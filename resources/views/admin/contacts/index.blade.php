@extends('admin.layouts.index')
@section('title', "Danh sách liên hệ")
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
            <h6 class="m-0 font-weight-bold text-primary">Danh sách liên hệ</h6>
        </div>
        <div class="card-body">
            <table id="tablePost" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Tên</th>
                        <th scope="col">Tên tài khoản</th>
                        <th scope="col">Tiêu đề</th>
                        <th scope="col">Email</th>
                        <th scope="col">SĐT</th>
                        <th scope="col">Nội dung</th>
                        <th scope="col">Trả lời</th>
                        <th scope="col">Ngày gửi liên hệ</th>
                        <th scope="col">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <tr>
                            <td>{{ $contact->contact_name }}</td>
                           @if($contact->user_id != '')
                           <td>{{$contact->fullname}}</td>
                           @else
                           <td>None</td>
                           @endif
                            <td>{{ $contact->contact_title }}</td>
                            <td>{{ $contact->contact_email }}</td>
                            <td>{{ $contact->contact_phone }}</td>
                            <td>{{ $contact->contact_message }}</td>
                            @if($contact->contact_reply != '')
                           <td>{{$contact->contact_reply}}</td>
                           @else
                           <td class="btn-danger">Bạn chưa trả lời liên hệ này</td>
                           @endif
                            <td>{{ $contact->created_at }}</td>
                            <td><a class="btn btn-success btn-sm"  href="{{ url('panel/EmailContacts', $contact->id) }}">Phản hồi</a>
                            <a class="btn btn-success btn-sm" onclick="return confirm('bạn có chắc muốn xóa');" href="{{ url('panel/contactsDelete', $contact->id) }}">xóa</a></td>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
        