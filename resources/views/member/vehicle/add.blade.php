@extends('member.master')
@section('head')
<title>Dichungxe |  Thêm Phương Tiện</title>
@stop
@section('main')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>THÊM PHƯƠNG/TIỆN</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active">Phường/xã</li>
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
            <h3 class="card-title">Nhập tông tin phường xã</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            
            <form action="{{route('member.vehicle.add.post')}}" method="POST" enctype="multipart/form-data" id="myform">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label>Loại phương tiện (*)</label>
                            <select class="form-control" name="vehicle_type_id">
                                @foreach($vehicle_types as $vehicle_type)
                                <option value="{{$vehicle_type->id}}">{{$vehicle_type->name}}</option>
                                @endforeach
                            </select>   
                        </div>
                        <div class="form-group form-group-sm">
                            <label>Tên phương tiện <span class="error">(*) </span></label>
                            <input class="form-control" name="name" placeholder="Nhập tên phương tiện" required="requrired"/>
                        </div>
                        <div class="form-group form-group-sm">
                            <label>Biển số <span class="error">(*) </span></label>
                            <input class="form-control" name="number" placeholder="Nhập biển số xe" required="requrired"/>
                        </div>
                        <div class="form-group">
                            <label>Tình trạng </label>
                            <textarea name="description" id="demo" class="form-control ckeditor" rows="3"></textarea>
                        </div>
                        <div class="form-group form-group-sm">
                            <label>Số chỗ <span class="error">(*) </span></label>
                            <input class="form-control" name="seat" placeholder="Nhập sỗ chỗ" required="requrired"/>
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
<!-- @stop

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
@stop -->