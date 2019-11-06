@extends('admin.master')
@section('head')
<title>Dichungxe | Admin: Duyệt chuyến xe</title>
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
          <h1>DUYỆT CHUYẾN XE</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active">Đặt xe</li>
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
            <h3 class="card-title">Duyệt chuyến xe</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <td><b>Ngày đi</td>
                  <td><b>Tên chuyến đi</td>
                  <td><b>Sỗ chỗ đặt</td>
                  <td><b>Trạng thái duyệt</td>
                  <td></td>
                </tr>
              </thead>
              <tbody>
                @foreach($bookings as $booking)
                <tr>
                  <td>{{$booking->trip->day_go}}</td>
                  <td>{{$booking->trip->title}}</td>
                  <td>{{$booking->seat}}</td>
                  <td>@if($booking->verify) <span class="badge bg-success">ĐÃ DUYỆT</span> @else <span class="badge bg-danger">CHƯA DUYỆT</span> @endif</td>
                  <td>
                    <a href="{{route('admin.booking.verify.get', ['id'=>$booking->id])}}" class="btn btn-primary @if($booking->verify) disabled @endif" >@if($booking->verify) Đã @endif Duyệt</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->

          <div class="dataTables_paginate paging_simple_numbers">
            {{ $bookings->links() }}
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