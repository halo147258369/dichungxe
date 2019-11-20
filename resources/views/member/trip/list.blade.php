@extends('member.master')
@section('head')
<title>Dichungxe | Chuyến đi của tôi</title>
<link rel="stylesheet" href="{{secure_asset('plugins/datatables/dataTables.bootstrap4.css')}}">
<style>
  .pagination li {
    padding: 10px;
  }

  .pagination {
    float: right;
  }
</style>
@stop
@section('main')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>CHUYẾN ĐI CỦA TÔI</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active">Chuyến đi</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Chuyến đi của tôi</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                 <!--  <td><b>STT</td> -->
                  <td><b>phương tiện</td>
                  <td><b>Điểm đi</td>
                  <td><b>Điểm đến</td>
                  <td><b>Tiêu đề</td>
                  <td><b>TG đi</td>
                  <td><b>TG đến</td>
                  <td><b>Số chỗ</td>
                  <td><b>Giá tiền</td>
                  <td></td>
                </tr>
              </thead>
              <tbody>
                @foreach($trips as $trip)
                <tr>
                  <!-- <td>{{$trip->id}}</td> -->
                  <td>{{$trip->vehicle->name}}</td>
                  <td>{{$trip->from->name}}, {{$trip->from->city->name}}</td>
                  <td>{{$trip->to->name}}, {{$trip->to->city->name}}</td>
                  <td>{{$trip->title}}</td>
                  <td>{{date('d-m-Y', strtotime($trip->day_go))}}</td>
                  <td>{{date('d-m-Y', strtotime($trip->day_to))}}</td>
                  <td>{{$trip->seat}}</td>
                  <td>{{$trip->price}}</td>
                  <td>
                    <div class="btn-group">
                      <a href="{{ route('member.trip.view.get', ['id' => $trip->id]) }}" class="btn btn-primary">Xem</a>
                      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <div class="dropdown-menu" role="menu">
                        <a class="dropdown-item" href="{{ route('member.trip.edit.get', ['id' => $trip->id]) }}">Sửa</a>
                        <a class="dropdown-item" href="{{ route('member.trip.delete.get', ['id' => $trip->id]) }}">Xoá</a>
                      </div>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->

          <div class="dataTables_paginate paging_simple_numbers">
            {{ $trips->links() }}
          </div>
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@stop

@section('script')
<script src="{{secure_asset('plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{secure_asset('plugins/datatables/dataTables.bootstrap4.js')}}"></script>
<script>
  $(function() {
    $("#example1").DataTable({
      // "order": false,
      "order": [
        [0, "asc"]
      ],
      "lengthMenu": [50],
      "bPaginate": false,
      "language": {
        "sProcessing": "Đang xử lý...",
        "sLengthMenu": "Xem _MENU_ mục",
        "sZeroRecords": "Không tìm thấy dòng nào phù hợp",
        "sInfo": "Đang xem _START_ đến _END_ trong tổng số _TOTAL_ mục",
        "sInfoEmpty": "Đang xem 0 đến 0 trong tổng số 0 mục",
        "sInfoFiltered": "(được lọc từ _MAX_ mục)",
        "sInfoPostFix": "",
        "sSearch": "Tìm:",
        "sUrl": "",
        "oPaginate": {
          "sFirst": "Đầu",
          "sPrevious": "Trước",
          "sNext": "Tiếp",
          "sLast": "Cuối"
        }
      }
    });
  });
</script>
@stop