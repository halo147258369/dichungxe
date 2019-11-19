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
              <form action="{{route('admin.district.add.post')}}" method="POST" enctype="multipart/form-data" id="myform">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            
                            <div class="form-group">
                                <label>Thành phố</label>
                                <select class="form-control" name="cities">
                                     @foreach($city as $ct)
                                    <option value="{{$ct->id}}">{{$ct->name}}</option>
                                  @endforeach
                                </select>
                            </div>
                            <div class="form-group form-group-sm">
                                <label>Tên quận huyện <span class="error">(*) </span></label>
                                <input class="form-control" name="ten" placeholder="Nhập tên quận huyện" />
                            </div>
                            
                           <!--  <div class="form-group form-group-sm">
                                <label>Thông báo:</label>
                                <input class="form-control" name="thongbao" placeholder="Nhập tiêu tên thông báo" />
                            </div> -->
                                
                            <button class="btn btn-sm btn-info " onclick="history.go(-1);"> <i class="glyphicon glyphicon-circle-arrow-left"></i> Quay lại</button>
                            <button type="reset" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-refresh"></i>Làm mới</button>
                            <button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-floppy-save"></span>Thêm </button>
                        <form>
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
  $(function () {
    $("#example1").DataTable({
        // "order": false,
        "order": [[ 0, "asc" ]],
        "lengthMenu": [ 50 ],
        "bPaginate": false,
        "language": {
            "sProcessing":   "Đang xử lý...",
            "sLengthMenu":   "Xem _MENU_ mục",
            "sZeroRecords":  "Không tìm thấy dòng nào phù hợp",
            "sInfo":         "Đang xem _START_ đến _END_ trong tổng số _TOTAL_ mục",
            "sInfoEmpty":    "Đang xem 0 đến 0 trong tổng số 0 mục",
            "sInfoFiltered": "(được lọc từ _MAX_ mục)",
            "sInfoPostFix":  "",
            "sSearch":       "Tìm:",
            "sUrl":          "",
            "oPaginate": {
                "sFirst":    "Đầu",
                "sPrevious": "Trước",
                "sNext":     "Tiếp",
                "sLast":     "Cuối"
            }
        }
    });
  });

</script>
@stop