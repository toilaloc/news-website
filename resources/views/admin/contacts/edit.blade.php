@extends('admin.layouts.index')

@section('content')
<div class="col-lg-12 mb-12 sm-12">
@if(session()->get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ session()->get('success') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
  <div class="card shadow mb-4">
      <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">EDIT POSTS: {{$contactsEditing->contact_name}}</h6>
      </div>
      <div class="card-body">
        <form action="{{url('contacts/update')}}" method="post" enctype="multipart/form-data">
            @csrf
                    <input type="hidden" id="id" name="id" value="{{ $contactsEditing->id }}" />
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="contact_title"   value="{{$contactsEditing->contact_title}}">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="contact_name"  value="{{$contactsEditing->contact_name}}">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">user info</label>
              <div class="col-sm-10">
              @if($contactsEditing->user_id != '')
              <input type="text" class="form-control" name="user_id"  value="{{$contactsEditing->user_id}}" disabled>
              @else
              <input type="text" class="form-control" name="user_id"  value="none" disabled>
              @endif
                
              </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="contact_email"   value="{{$contactsEditing->contact_email}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Phone</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="contact_phone"   value="{{$contactsEditing->contact_phone}}">
                </div>
            </div>
              <div class="form-group row">
                <label for="inputEmail3"  class="col-sm-2 col-form-label">Message</label>
                <div class="col-sm-10">
                    <textarea class="form-control"  rows="5" name="contact_message">{!!$contactsEditing->contact_message!!}</textarea>
                </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-12">
                <center><button type="submit" class="btn btn-primary">update</button></center>
              </div>
            </div>
          </form>
      </div>
    </div>
</div>

@endsection