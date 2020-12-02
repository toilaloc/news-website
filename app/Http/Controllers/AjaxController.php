<?php

namespace App\Http\Controllers;

use App\Events\UserReports;
use App\Models\Categories;
use App\Models\Posts;
use App\Models\Report;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AjaxController extends Controller
{
    public function loadFormReply(Request $request){
        $formReply =  view('frontend.pages.comments.formReply')->render();
        return response()->json(['formReply'=>$formReply]);   
    }

    public function loadPostAuthor(Request $request){
      $userId = $request->id;
      $length = $request->length;
      $lastId = $request->last;

      $oldData = Posts::where('author_id', $userId)->orWhere('id','<', $lastId)->where('status','<>', 1)->orderBy('created_at','DESC')->take(3)->skip($length)->get();

      if(!$oldData->isEmpty()){
        $icon = 'success';
        $message = 'Tải dữ liệu thành công';
        $end = '';
        $data = '';
        foreach($oldData as $newData){
            $data .= "<div class='row mb-2 pb-2 border-bottom listPostAuthor' data-postid='$newData->id'>
            <div class='col-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 px-md-2 mb-3 mb-md-0'>
              <div class='position-relative'>
                <a href='post/$newData->slug'>
                <img class='img-fluid w-100' src='../../uploads/posts/thumbnail/$newData->thumbnail' alt='$newData->name' style='border-radius: 0rem;'>
             </a>
              </div>
            </div>
            <div class='col-8 col-lg-8 col-md-8 col-sm-8 col-xs-8'>
              <div class='media mb-2'>
                <div class='media-body'>
                <a href='post/$newData->slug'><h3 class='h4 text-hover-primary mb-0'>$newData->name</h3></a>
                </div>
              </div>
              <div class='d-flex justify-content-start align-items-center small text-muted'>
                <div class='d-inline-block mr-2'>
                  $newData->created_at
                </div>
                <div class='d-inline-block mr-2'>";
                foreach($newData->Categories as $category){
                    $data .=   "<a style='color: #333;' href='../../category/$category->slug'>$category->name</a>";
                }
                $data .= "</div>
              </div>
              <p class='font-size-1 text-body mb-0 d-none d-md-block d-lg-block'>
              $newData->desc</p>
            </div>
        </div>";

        }
    }
    else {
        $icon = 'error';
        $message = 'Không còn dữ liệu';
        $data =  "<li class='list-group-item'><center><strong>Không còn bài viết để hiển thị</strong></center></li>";
        $end = "$('#loadPostCategory').remove()";
    }
            return response()->json(['data'=> $data,'icon' => $icon, 'message' => $message, 'end' => $end]);   

    }

    public function loadPostCategoryAll(Request $request){
        // load chuyên mục cha có chứa nhiều chuyên mục con
        $categoryId = $request->id;
        $length = $request->length;
        $lastId = $request->last;
        $firstId = $request->first;

          $oldData  = Posts::whereHas('categories', function($query) use ($categoryId, $lastId, $firstId) {
            $query->where('categories.category_id', $categoryId);
        })->orderBy('created_at','DESC')->take(2)->skip($length)->get();
     
        if(!$oldData->isEmpty()){
            $icon = 'success';
            $message = 'Tải dữ liệu thành công';
            $end = '';
            $data = '';
            foreach($oldData as $newData){
                $data .= "<div class='row mb-2 pb-2 border-bottom listPostCategory' data-post='$newData->id'>
                <div class='col-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 px-md-2 mb-3 mb-md-0'>
                  <div class='position-relative'>
                    <a href='../post/$newData->slug'>
                    <img class='img-fluid w-100' src='../../uploads/posts/thumbnail/$newData->thumbnail' alt='$newData->name' style='border-radius: 0rem;'>
                 </a>
                  </div>
                </div>
                <div class='col-8 col-lg-8 col-md-8 col-sm-8 col-xs-8'>
                  <div class='media mb-2'>
                    <div class='media-body'>
                    <a href='../post/$newData->slug'><h3 class='h4 text-hover-primary mb-0'>$newData->name</h3></a>
                    </div>
                  </div>
                  <div class='d-flex justify-content-start align-items-center small text-muted'>
                    <div class='d-inline-block mr-2'>
                      $newData->created_at
                    </div>
                    <div class='d-inline-block mr-2'>";
                    foreach($newData->Categories as $category){
                        $data .=   "<a style='color: #333;' href='../../category/$category->slug'>$category->name</a>";
                    }
                    $data .= "</div>
                  </div>
                  <p class='font-size-1 text-body mb-0 d-none d-md-block d-lg-block'>
                  $newData->desc</p>
                </div>
            </div>";

            }
        }
        else {
            $icon = 'error';
            $message = 'Không còn dữ liệu';
            $data =  "<li class='list-group-item'><center><strong>Không còn bài viết để hiển thị</strong></center></li>";
            $end = "$('#loadPostCategory').remove()";
        }
                return response()->json(['data'=> $data,'icon' => $icon, 'message' => $message, 'end' => $end]);   
    

    }

    public function loadPostCategory(Request $request){
        $categoryId = $request->id;
        $length = $request->length;
        $lastId = $request->last;
  
        $oldData  =  Posts::WhereHas('categories', function($query) use ($categoryId, $lastId) {
            $query->where('id', $categoryId);
        })->limit(2)->skip($length)->orderBy('created_at','DESC')->get();
     
        if(!$oldData->isEmpty()){
            $icon = 'success';
            $message = 'Tải dữ liệu thành công';
            $end = '';
            $data = '';
            foreach($oldData as $newData){
                $data .= "<div class='row mb-2 pb-2 border-bottom listPostCategory' data-post='$newData->id'>
                <div class='col-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 px-md-2 mb-3 mb-md-0'>
                  <div class='position-relative'>
                    <a href='../../post/$newData->slug'>
                    <img class='img-fluid w-100' src='../../uploads/posts/thumbnail/$newData->thumbnail' alt='$newData->name' style='border-radius: 0rem;'>
                 </a>
                  </div>
                </div>
                <div class='col-8 col-lg-8 col-md-8 col-sm-8 col-xs-8'>
                  <div class='media mb-2'>
                    <div class='media-body'>
                    <a href='../../post/$newData->slug'><h3 class='h4 text-hover-primary mb-0'>$newData->name</h3></a>
                    </div>
                  </div>
                  <div class='d-flex justify-content-start align-items-center small text-muted'>
                    <div class='d-inline-block mr-2'>
                      $newData->created_at
                    </div>
                    <div class='d-inline-block mr-2'>";
                    foreach($newData->Categories as $category){
                        $data .=   "<a style='color: #333;' href='../../category/$category->slug'>$category->name</a>";
                    }
                    $data .= "</div>
                  </div>
                  <p class='font-size-1 text-body mb-0 d-none d-md-block d-lg-block'>
                  $newData->desc</p>
                </div>
            </div>";

            }
        }
        else {
            $icon = 'error';
            $message = 'Không còn dữ liệu';
            $data =  "<li class='list-group-item'><center><strong>Không còn bài viết để hiển thị</strong></center></li>";
            $end = "$('#loadPostCategory').remove()";
        }
                return response()->json(['data'=> $data,'icon' => $icon, 'message' => $message, 'end' => $end]);   
    
        
    }
    

    public function loadStatusProfile(Request $request){

        if(Auth::check()){
            $userId = Auth::user()->id;
        }

        $userChange  = Users::find($userId);

        if($request->status != $userChange){
                    // get infor
        $bio = $userChange->bio;
        $phone = $userChange->phone;
        $address = $userChange->address;
        $email = $userChange->email;
        $gender = $userChange->gender;
        $fullname = $userChange->fullname;
        $username = $userChange->username;
        $password = $userChange->password;
        $oldThumbnail = $userChange->thumbnail;
        $follower = $userChange->follower;
        $following = $userChange->following;
        $vote = $userChange->vote;
        $active = $userChange->active;
        $status = $request->status;



       $userChanged =  $userChange->update([
            'username'  => $username,
            'fullname' => $fullname,
            'password' => $password,
            'email' => $email,
            'address' => $address,
            'bio' => $bio,
            'gender' => $gender,
            'phone' => $phone,
            'active' => $active,
            'vote' => $vote,
            'status' => $status,
            'follower' => $follower,
            'following' => $following,
            'thumbnail' => $oldThumbnail,
        ]);

        if($userChanged){
            $icon = "success";
            $message = "Đổi thành công";
            $data =  view('frontend.components.loadStatusProfile')->render();
            return response()->json(['status'=>$data, 'icon' => $icon, 'message' => $message]);   
           }

        }   
    }

    public function report(Request $request){
        $validateData = $request->validate([
            'user_id',
            'author_id',
            'reason' => 'required',
            'post_id',
            'comment_id',
            'type'
        ]);

        if($request->user_id){
            $userId = $request->user_id;
        }else{
            $userId = NULL;
        }

        if($request->post_id){
            $postId = $request->post_id;
        }else{
            $postId = NULL;
        }

        if($request->comment_id){
            $commentId = $request->comment_id;
        }else{
            $commentId = NULL;
        }

       if($validateData) {
         $result =  Report::create([
            'user_id' => $userId,
            'reporter_id' => Auth::user()->id,
            'post_id' => $postId,
            'reason' => $request->reason,
            'comment_id' => $commentId,
            'type' => $request->type,
           ]);

          

           $getReport = Report::find($result);

           event(new UserReports($getReport));
           
           if($result){
            toast('Báo cáo thành công','success','top-right');
            return back();
           // return back()->with('success','Báo cáo thành công')->toToast();  
           }else {
            toast('Báo cáo không thành công','danger','top-right');
            return back();  
           }

        }
        
    }
}
