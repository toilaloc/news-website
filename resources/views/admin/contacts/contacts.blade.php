@extends('admin.layouts.index')

@section('content')

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
      <h6 class="m-0 font-weight-bold text-primary">List of Contacts</h6>
    </div>
    <div class="card-body">
    <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Title</th>
        <th scope="col">Tên</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Message</th>
        <th scope="col" colspan="2">Chức năng</th>
      </tr>
    </thead>
    <tbody>
    @foreach($contacts as $contact)
        <tr>
            <td><a href="">{{$contact->contact_title}}</a></td>
            <td>{{$contact->contact_name}}</td>
            <td>{{$contact->contact_email}}</td>
            <td>{{$contact->contact_phone}}</td>
            <td>{{$contact->contact_message}}</td>
            <td><a href="contacts/{{ $contact->id }}/edit">Sửa</td>
            <td><a onclick="return confirm('Bạn có chắc chắn xóa không ?')" href="contacts/{{ $contact->id }}/delete">Xóa</a></td>
        </tr>
    @endforeach
    </tbody>
  </table>
    </div>
</div>

@endsection