@extends('admin.master')
@section('head')
<title>Dichungxe | Danh sách Quận Huyện</title>
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
          <h1>DANH SÁCH QUẬN HUYỆN</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active">QUẬN HUYỆN</li>
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
            <h3 class="card-title">Danh sách </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
              <thead>
                <tr align="center">
                  <!--   <td><b>STT</td> -->
                  <td><b>Tên thành phố</td>
                  <td><b>Tên quận huyện</td>

                  <td><b>Xóa</td>
                  <td><b>Cập nhật</td>
                </tr>
              </thead>
              <tbody>
                @foreach($districts as $d)
                <tr class="odd gradeX" align="center">
                  <td>{{$d->city->name}}</td>
                  <td>{{$d->name}}</td>
                  <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href=""> Xóa</a></td>
                  <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="">Cập nhật</a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->

          <div class="dataTables_paginate paging_simple_numbers">

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