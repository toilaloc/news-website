<?php

namespace App\Http\Controllers;

use App\Events\NotificationPosting;
use App\Events\ViewsCounter;
use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Post_votes;
use App\Models\Categories;
use App\Models\Subcribe;
use App\Models\Tags;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Notifications\Notification;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
       
       $this->middleware('checkpermissions:quan-ly-bai-viet,them-bai-viet,quan-ly-bai-viet,sua-bai-viet,xoa-bai-viet')->except(['create','show','getSlug', 'store', 'myPost', 'edit', 'update']);
    }

    public function index()
    {
        $posts = Posts::orderBy('id', 'DESC')->where('status','<>',1)->get();
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tags::get()->pluck('name', 'id');
        $categories = Categories::whereNull('category_id')->get();
        Carbon::setLocale('vi');
        $dateTime  = Carbon::now('Asia/Ho_Chi_Minh');
        return view('admin.posts.create', compact('categories', 'dateTime'));
    }

    public function post_vote(Request $request)
    {
        $rate =  Post_votes::create([
            'post_id' => $request->post_id,
            'user_id' => $request->user_id,
            'rate' => $request->star,
        ]);
        
        return "success";
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => ['required', 'string', 'unique:posts', 'max:100'],
            'content' => ['required', 'string'],
            'slug',
            'desc',
            'vote',
            'view',
            'status',
            'author_id',
            'thumbnail',
            'date',
            'categories_id' => ['required', 'array', 'min:1'],
            'categories_id.*' => ['required', 'integer', 'exists:categories,id'],
        ]);

        if ($request->hasfile('thumbnail')) {
            $file = $request->file('thumbnail');
            $thumbnail = $file->getClientOriginalName();
            $file->move(public_path('uploads/posts/thumbnail'), $thumbnail);
        } else {
            $thumbnail = "default.png";
        }

        foreach(Auth::user()->Roles as $role) {
        if($role->id == 3 && $role->id != 4){
            $status = 1;                                                  
        }else{
            $status = 0;
        }
        }                               
                   

        $post = new Posts();
        $post->name = $request->name;
        $post->content = $request->content;
        $post->slug = $request->slug;
        $post->vote = 0;
        $post->date = $request->date;
        $post->view = 0;
        $post->desc = $request->desc;
        $post->status = $status;
        $post->thumbnail = $thumbnail;
        $post->author_id = $request->author_id;
        $post->reviewer = NULL;
        $post->save();
        $post->Categories()->attach($request->categories_id);

        if ($post) {
            $tagNames = explode(',', $request->tag);
            $tagIds = [];
            foreach ($tagNames as $tagName) {
                $tag = Tags::firstOrCreate([
                    'name' => $tagName,
                    'slug' => Str::slug($tagName, '-'),
                ]);
                if ($tag) {
                    $tagIds[] = $tag->id;
                }
            }
            $post->Tags()->sync($tagIds);
        }

        $sub = Subcribe::where('author_id',Auth::id())->get();
        foreach ($sub as $value) {

            Mail::to($value->email)->send('mail.SendNotification',[
                'link'=>'http://127.0.0.1:8000/post/'.$request->slug,
                'author'=>Auth::user()->name
            ]);

        }

        foreach(Auth::user()->Roles as $role) {
            if($role->id == 3){
        return redirect()->route('posts.mypost')->with('success', 'Thêm tin tức thành công');
            }
            else {
                return redirect()->route('posts.index')->with('success', 'Thêm tin tức thành công');
            }
        }
    }


    public function myPost(){
        Carbon::setLocale('vi');
        $dateTime  = Carbon::now('Asia/Ho_Chi_Minh');
        $myposts = Posts::where('author_id', Auth::user()->id)->get();
        return view('admin.posts.myPost', compact('myposts', 'dateTime'));
    }


    public function getSlug(Request $request)
    {
        // get request
        $name = $request->name;
        // name to slug
        $slug = Str::slug($name, '-');
        // send result resolved to client
        return response()->json(['slug' => $slug]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {   
        
        Carbon::setLocale('vi');
        $dateTime  = Carbon::now('Asia/Ho_Chi_Minh');
        $post = Posts::where('slug', $slug)->firstOrFail(); 
        $authorId = $post->author_id;


       $postsCountView = Posts::where('slug', $slug)->firstOrFail();
       event(new ViewsCounter($postsCountView));

        
        $postNew = Posts::take(5)->orderBy('id', 'DESC')->get();
        $hotPosts = Posts::where('view','>','0')->take(5)->get();

         foreach($post->Categories as $category){
          $categoryId = $category["id"];
          $relaPost = Posts::whereHas('Categories', function($query) use ($categoryId) {
            $query->where('id','=', $categoryId);
          })->get();
         }
         
        $postAuthor = Posts::where('author_id','=',$authorId)->take(3)->get();
        return view('frontend.pages.posts.postDisplay', compact(
            'post',
            'dateTime',
            'postNew',
            'hotPosts',
            'relaPost', 
            'postAuthor'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Categories::whereNull('category_id')->get();
        $postEditing = Posts::find($id);


        foreach(Auth::user()->Roles as $role) {

        // Nếu là tác giả của bài viết đó thì được sửa    
        if(Auth::user()->id == $postEditing->author_id){
            return view('admin.posts.edit', compact('postEditing', 'categories'));
        }

        // Còn nếu là admin hoặc quản lý vẫn vào sửa được
        else if($role->id == 1 || $role->id == 2){
            return view('admin.posts.edit', compact('postEditing', 'categories'));
        }
        // Còn không thì return về trang 401
        else {
            return view('errors.401');
        }
        }
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $postUpdate = Posts::findOrFail($id);
        $this->validate($request, [
            'name' => ['required', 'string', 'max:100'],
            'content',
            'slug',
            'desc',
            'vote',
            'view',
            'status',
            'author_id',
            'thumbnail',
            'date',
            'categories_id' => ['required', 'array', 'min:1'],
            'categories_id.*' => ['required', 'integer', 'exists:categories,id'],
        ]);

        if ($request->hasfile('thumbnail')) {
            $file = $request->file('thumbnail');
            if ($file) {
                $thumbnail = $file->getClientOriginalName();
                $file->move(public_path('uploads/posts/thumbnail'), $thumbnail);
            } else {
                $thumbnail = $postUpdate->thumbnail;
            }
        } else {
            $thumbnail = $postUpdate->thumbnail;
        }

        // điều kiện ? đúng : sai
        $request->name !== $postUpdate->name ? $name = $request->name : $name = $postUpdate->name;
        $request->content !== $postUpdate->content ? $content = $request->content : $content = $postUpdate->content;
        $request->slug !== $postUpdate->slug ? $slug = $request->slug : $slug = $postUpdate->slug;
        $vote = $postUpdate->vote;
        $request->date !== $postUpdate->date ? $date = $request->date : $date = $postUpdate->date;
        $view = $postUpdate->view;
        $request->desc !== $postUpdate->desc ? $desc = $request->desc : $desc = $postUpdate->desc;
        $endThumbnail = $thumbnail;
        // $request->status !== $postUpdate->status ? $post->status = $request->status : $post->status = $postUpdate->status;
        $status = $postUpdate->status;
        $authorId = $postUpdate->author_id;
        $reviewer = $postUpdate->reviewer;

        $newUpdate =   $postUpdate->update([
            'name'  => $name,
            'content' => $content,
            'slug' => $slug,
            'desc' => $desc,
            'vote' => $vote,
            'view' => $view,
            'status' => $status,
            'author_id' => $authorId,
            'thumbnail' => $endThumbnail,
            'date' => $date,
            'reviewer' => $reviewer,
        ]);

        if(empty($postUpdate->author_id)){
            return view('errors.404');
        }


        foreach(Auth::user()->Roles as $role) {

            // Nếu là tác giả của bài viết đó thì được sửa    
            if(Auth::user()->id == $postUpdate->author_id){
                if ($newUpdate) {
                    $resolveTags = str_replace("                                        ", "", $request->tagUpdate);
                    $tagNames = explode(',', $resolveTags);
                    //dd($tagNames);
                    $tagIds = [];
                    foreach ($tagNames as $tagName) {
                        //$post->tags()->create(['name'=>$tagName]);
                        //Or to take care of avoiding duplication of Tag
                        //you could substitute the above line as
                        $tag = Tags::firstOrCreate([
                            'name' => $tagName,
                            'slug' => Str::slug($tagName, '-'),
                        ]);
                        if ($tag) {
                            $tagIds[] = $tag->id;
                        }
                    }
                    $postUpdate->Tags()->sync($tagIds);
                }
        
                $postUpdate->Categories()->sync($request->input('categories_id', []));
        
                return redirect()->route('posts.mypost')->with('success', 'Cập nhật tin tức thành công');
            }
    
            // Còn nếu là admin hoặc quản lý vẫn vào sửa được
            else if($role->id == 1 || $role->id == 2){
                if ($newUpdate) {
                    $resolveTags = str_replace("                                        ", "", $request->tagUpdate);
                    $tagNames = explode(',', $resolveTags);
                    //dd($tagNames);
                    $tagIds = [];
                    foreach ($tagNames as $tagName) {
                        //$post->tags()->create(['name'=>$tagName]);
                        //Or to take care of avoiding duplication of Tag
                        //you could substitute the above line as
                        $tag = Tags::firstOrCreate([
                            'name' => $tagName,
                            'slug' => Str::slug($tagName, '-'),
                        ]);
                        if ($tag) {
                            $tagIds[] = $tag->id;
                        }
                    }
                    $postUpdate->Tags()->sync($tagIds);
                }
        
                $postUpdate->Categories()->sync($request->input('categories_id', []));
        
                return redirect()->route('posts.index')->with('success', 'Cập nhật tin tức thành công');
            }
            // Còn không thì return về trang 401
            else {
                return view('errors.401');
            }
            }

        // Add = attach
        // Delete = detach
        // Update = sync

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteTag =  Posts::find($id);
        $deleteTag->tags()->detach();
        $deletePost = Posts::find($id)->delete();
        if ($deletePost) {
            return redirect()->route('posts.index')
                ->with('success', 'Đã xóa tin tức');
        }
    }

    public function approvalPost(){
        Carbon::setLocale('vi');
        $dateTime  = Carbon::now('Asia/Ho_Chi_Minh');
        $approvalPosts = Posts::all()->where('status', '<>', 0);
        return view('admin.posts.approvalPost', compact('approvalPosts','dateTime'));
    }

    public function resolvedApprovalPost(Request $request, $id){

        $approvalPost = Posts::findOrFail($id);

        $this->validate($request, [
            'name',
            'content',
            'slug',
            'desc',
            'vote',
            'view',
            'status',
            'author_id',
            'thumbnail',
            'date',
            'categories_id',
            'categories_id.*' =>  'exists:categories,id',
        ]);


            $thumbnail = $approvalPost->thumbnail;

        // điều kiện ? đúng : sai
         $name = $approvalPost->name;
        $content = $approvalPost->content;
       $slug = $approvalPost->slug;
        $vote = $approvalPost->vote;
       $date = $approvalPost->date;
        $view = $approvalPost->view;
         $desc = $approvalPost->desc;
        $endThumbnail = $thumbnail;
        $status = 0;
        $authorId = $approvalPost->author_id;
        $reviewer = Auth::user()->id;

        $newUpdate =   $approvalPost->update([
            'name'  => $name,
            'content' => $content,
            'slug' => $slug,
            'desc' => $desc,
            'vote' => $vote,
            'view' => $view,
            'status' => $status,
            'author_id' => $authorId,
            'thumbnail' => $endThumbnail,
            'date' => $date,
            'reviewer' => $reviewer,
        ]);

        if ($newUpdate) {
            event(new NotificationPosting($approvalPost));
            return back()->with('success', 'Đã duyệt bài');
        }



      
    }
}
