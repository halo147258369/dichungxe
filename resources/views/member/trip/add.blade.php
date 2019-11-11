@extends('member.master')
@section('head')
<title>Dichungxe | Đặt xe của tôi</title>
<link rel="stylesheet" href="{{secure_asset('plugins/datatables/dataTables.bootstrap4.css')}}">
<link rel="stylesheet" href="{{secure_asset('plugins/select2/select2.min.css')}}">
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
          <h1>THÊM CHUYẾN đi</h1>
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
            <h3 class="card-title">Nhập tông tin chyến đi</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="form-group">
              <label for="vehicle_id">Chọn phương tiện</label>
              <select name="vehicle_id" id="vehicle_id" class="form-control select2">
                @foreach($vehicles as $vehicle)
                <option value="{{$vehicle->id}}">{{$vehicle->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="vehicle_id">Điểm khởi hành</label>
              <input type="text" name="name[]" class="form-control" placeholder="Số nhà, tên đường" required="required">
            </div>
            <div class="form-group">
              <select name="citie_id[]" id="from_city" class="form-control"  onchange="getDistricts('from_city', 'from_district')">
                <option value="0">Chọn tỉnh/thành phố</option>
                @foreach($cities as $city)
                <option value="{{$city->id}}">{{$city->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <select name="district_id[]" id="from_district" class="form-control" onchange="getWards('from_district', 'from_ward')">
              </select>
            </div>
            <div class="form-group">
              <select name="ward_id[]" id="from_ward" class="form-control">
              </select>
            </div>
            <div class="form-group">
              <label for="vehicle_id">Điểm đến</label>
              <input type="text" name="name[]" class="form-control" placeholder="Số nhà, tên đường" required="required">
            </div>
            <div class="form-group">
              <select name="citie_id[]" id="to_city" class="form-control"  onchange="getDistricts('to_city', 'to_district')">
                <option value="0">Chọn tỉnh/thành phố</option>
                @foreach($cities as $city)
                <option value="{{$city->id}}">{{$city->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <select name="district_id[]" id="to_district" class="form-control" onchange="getWards('to_district', 'to_ward')">
              </select>
            </div>
            <div class="form-group">
              <select name="ward_id[]" id="to_ward" class="form-control">
              </select>
            </div>
            <div class="form-group">
              <label for="title">Tiêu đề</label>
              <input type="text" name="title" class="form-control" placeholder="Nhập Tiêu Đề" required="required">
            </div>
            <div class="form-group">
              <label for="day_go">Thời gian đi</label>
              <input type="date" name="day_go" class="form-control" placeholder="Nhập thời gian đi" required="required">
            </div>
            <div class="form-group">
              <label for="vehday_toicle_id">Thời gian đến</label>
              <input type="date" name="day_to" class="form-control" placeholder="Nhập thời gian đến" required="required">
            </div>
            <div class="form-group">
              <label for="seat">Số Chỗ Còn Trống</label>
              <input type="number" name="seat" class="form-control" placeholder="Nhập số chỗ trống" required="required">
            </div>
            <div class="form-group">
              <label for="price">Giá Tiền</label>
              <input type="number" name="price" class="form-control" placeholder="Nhập giá tiền" required="required">
            </div>
            <button type="submit" class="btn btn-primary">Lưu chuyến đi</button>
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
<script src="{{secure_asset('plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{secure_asset('plugins/datatables/dataTables.bootstrap4.js')}}"></script>
<script src="{{secure_asset('plugins/select2/select2.full.min.js')}}"></script>
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