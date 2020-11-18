<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Comments;
use App\Models\Categories;
use App\Models\Tags;
use Illuminate\Support\Str;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Posts::all();
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
        return view('admin.posts.create', compact('categories'));
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

    if($request->hasfile('thumbnail')){
            $file = $request->file('thumbnail');
            $thumbnail = $file->getClientOriginalName();
            $file->move(public_path('uploads/posts/thumbnail'), $thumbnail);
    }else {
            $thumbnail = "default.png";
    }

    $post = new Posts();
    $post->name = $request->name;
    $post->content = $request->content;
    $post->slug = $request->slug;
    $post->vote = 0;
    $post->date = $request->date;
    $post->view = 0;
    $post->desc = $request->desc;
    $post->status = $request->status;
    $post->thumbnail = $thumbnail;
    $post->author_id = 1;
    $post->reviewer = NULL;
    $post->save();
    $post->Categories()->attach($request->categories_id);

    if($post)
    {

        $tagNames = explode(',',$request->tag);
        //dd($tagNames);
        $tagIds = [];
        foreach($tagNames as $tagName)
        {
            //$post->tags()->create(['name'=>$tagName]);
            //Or to take care of avoiding duplication of Tag
            //you could substitute the above line as
            $tag = Tags::firstOrCreate([
                'name'=>$tagName,
                'slug' => Str::slug($tagName, '-'),
                ]);
            if($tag)
            {
              $tagIds[] = $tag->id;
            }
        }
        $post->Tags()->sync($tagIds);
    }
    return redirect()->route('posts.index')->with('success', 'Thêm tin tức thành công');

    }


    public function getSlug(Request $request){
        // get request
        $name = $request->name;
        // name to slug
        $slug = Str::slug($name, '-');
        // send result resolved to client
        return response()->json([ 'slug' => $slug]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Posts::where('slug', $slug)->firstOrFail();
        return view('frontend.pages.posts.postDisplay', compact('post'));
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
        return view('admin.posts.edit', compact('postEditing', 'categories'));
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

        if($request->hasfile('thumbnail')){
                $file = $request->file('thumbnail');
                if($file === "") {
                    $thumbnail = $file->getClientOriginalName();
                    $file->move(public_path('uploads/posts/thumbnail'), $thumbnail);
                }
                else {
                    $thumbnail = $postUpdate->thumbnail;
                }

        }else {
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

        if($newUpdate)
    {
        $resolveTags = str_replace("                                        ","", $request->tagUpdate);
        $tagNames = explode(',',$resolveTags);
        //dd($tagNames);
        $tagIds = [];
        foreach($tagNames as $tagName)
        {
            //$post->tags()->create(['name'=>$tagName]);
            //Or to take care of avoiding duplication of Tag
            //you could substitute the above line as
            $tag = Tags::firstOrCreate([
                'name'=>$tagName,
                'slug' => Str::slug($tagName, '-'),
                ]);
            if($tag)
            {
              $tagIds[] = $tag->id;
            }
        }
        $postUpdate->Tags()->sync($tagIds);
    }

        $postUpdate->Categories()->sync($request->input('categories_id', []));

        return redirect()->route('posts.index')->with('success', 'Thêm tin tức thành công');

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

        if($deletePost) {
            return redirect()->route('posts.index')
            ->with('success','Đã xóa tin tức');
        }
    }
}
