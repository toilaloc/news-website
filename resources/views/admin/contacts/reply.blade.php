@extends('admin.layouts.index')
@section('title', "Trả lời liên hệ")
@section('content')

    @if (session()->get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="card shadow mb-4">
      <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">trả lời liên hệ của: {{$contactsReply->contact_name}}</h6>
      </div>
      <div class="card-body">
        <form action="{{url('panel/EmailContacts', $contactsReply->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$contactsReply->id}}"/>
            <div class="row">
                <div class="form-group col-sm-12">
                    <label for="inputEmail3" class="col-form-label">tiêu đề</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group col-sm-6">
                <label for="inputEmail3" class="col-form-label">Name</label>
                    <input type="text" class="form-control" name="contact_name" value="{{$contactsReply->contact_name}}">
                </div>
                <div class="form-group col-sm-6">
                    <label for="inputEmail3" class="col-form-label">email</label>
                    <input type="text" class="form-control" name="contact_email" value="{{$contactsReply->contact_email}}">
                </div>
                <div class="form-group col-sm-12">
                    <label for="inputEmail3" class="col-form-label">Nội dung</label>
                    <textarea class="form-control" name="contact_reply" rows="3"></textarea>
                </div>
            </div>
            <div class="form-group">
              <div class="col-sm-12">
                <button type="submit" class="btn btn-primary">Gửi mail</button>
              </div>
            </div>
          </form>
          
          </div>
      </div>
    </div>
</div>
@endsection