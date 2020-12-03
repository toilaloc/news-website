@extends('frontend.layouts.others.index')
@section('title', "Tác giả ". $user->fullname)
@section('content')
    <!-- Profile Section -->
    @if($user->status == 1)
        @if(Auth::check())
            @if (App\Models\Followers::where(['author_id' => $user->id, 'user_id' => Auth::user()->id])->exists() || $user->id == Auth::id())
                @include('frontend.pages.users_profile.infor-author')
            @else 
                @include('frontend.pages.users_profile.privateMode')
            @endif   
        @else
          @include('frontend.pages.users_profile.privateMode')
        @endif
    @else
      @include('frontend.pages.users_profile.infor-author')
    @endif
@endsection
