@extends('member.master')
@section('head')
<title>Dichungxe | Đặt xe của tôi</title>
@stop
@section('main')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>THÊM PHƯỜNG/XÃ</h1>
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
            <div class="form-group">
              <select name="citi_id" id="citi_id" class="form-control"  onchange="getDistricts('citi_id', 'district_id')">
                <option value="0">Chọn tỉnh/thành phố</option>
                @foreach($cities as $city)
                <option value="{{$city->id}}">{{$city->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="name">Chọn quận/huyện</label>
              <select name="district_id" id="district_id" class="form-control">
              </select>
            </div>
            <div class="form-group">
              <label for="name">Tên phường/xã</label>
              <input type="text" name="name" id="name" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Thêm</button>
          </div>
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