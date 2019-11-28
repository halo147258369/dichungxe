@extends('admin.master')
@section('head')
<title>Dichungxe |  Chỉnh sửa thông tin tuyến bus</title>
@stop
@section('main')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Chỉnh/Sửa</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active">Chỉnh sửa/Tuyến Bus</li>
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
            <h3 class="card-title">chỉnh sửa thông tin</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
           <form action="{{route('admin.busroute.edit.post',['id' => $busroute->id])}}" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <div class="form-group">
                                <label>Tên </label>
                                <input class="form-control" name="name" placeholder="Nhập tên" value ="{{$busroute->name}}" />
                            </div>
                            
                           
                           <button class="btn btn-sm btn-info " onclick="history.go(-1);"> <i class="glyphicon glyphicon-circle-arrow-left"></i> Quay lại</button>
                            
                            <button type="submit" class="btn btn-primary btn-sm">
                              <span class="glyphicon glyphicon-floppy-save"></span>Cập nhật </button>
                        <form>  
          
          
        </div>
        <!-- /.card-body -->
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
<script>
      function getDistricts(id_form, id_to) {
        var matp = $("#"+id_form).val();
        $.ajax({
          url: '/api/getdistricts/' + matp
        }).done(function(data) {
          $("#"+id_to).html('<option value="0">Chọn quận/huyện</option>');
          data.forEach(function(element) {
            $("#"+id_to).append('<option value="' + element['id'] + '">' + element['name'] + '</option>');
          });
        });;
      }

      function getWards(id_form, id_to) {
        var maqh = $("#"+id_form).val();
        $.ajax({
          url: '/api/getwards/' + maqh
        }).done(function(data) {
          $("#"+id_to).html('<option value="0">Chọn xã/phường/thị trấn</option>');
          data.forEach(function(element) {
            $("#"+id_to).append('<option value="' + element['id'] + '">' + element['name'] + '</option>');
          });
        });;
      }
</script>
@stop