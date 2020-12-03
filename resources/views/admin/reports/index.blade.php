@extends('admin.layouts.index')
@section('title', "Danh sách báo cáo")
@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Danh sách báo cáo</h6>
    </div>
    <div class="card-body">
    <table id="tableReport" class="table table-bordered">
    <thead>
      <tr>
        <th scope="col" width="5%">#</th>
        <th scope="col">Nội dung báo cáo</th>
        <th scope="col">Lý do báo cáo</th>
        <th scope="col">Người báo cáo</th>
        <th scope="col">Người bị báo cáo</th>
        <th scope="col">Loại báo cáo</th>
        <th scope="col">Xem</th>
        {{-- <th scope="col">Xử lý</th> --}}
      </tr>
    </thead>
    <tbody>
        @foreach($reports as $report)
       
        <tr>
        <th>{{$report->id}}</th>
        <td> @if($report->post_id != NULL){{$report->Post->name}} @endif</td>
        <th>{{$report->reason}}</th>
        <td>{{$report->Reporter->fullname}}</td>
        <td> @if($report->post_id != NULL){{App\Models\Users::find($report->Post->author_id)->fullname}} @endif</td>
        <td> <span class="badge badge-success">{{$report->type}}</span></td>
        <td>
        <a type="submit" class="btn btn-primary btn-sm d-inline" href="@if($report->post_id != NULL){{url('post', $report->Post->slug)}} @endif">Xem</a>
        </td>
        {{-- <td>
            <form class="d-inline" action="" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm d-inline" onclick="return confirm('bạn có chắc muốn xóa');">Xử lý</button>
            </form>
            </td> --}}
        </tr>
       
          @endforeach
    </tbody>
  </table>
    </div>
</div>
@endsection