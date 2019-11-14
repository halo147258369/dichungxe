@extends('member.master')
@section('head')
<title>Dichungxe |  Chỉnh sửa chuyển đi</title>
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
            <li class="breadcrumb-item active">Chỉnh sửa/chuyến đi</li>
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
            <h3 class="card-title">chỉnh sửa thông tin chuyến đi</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            
           <form action="{{route('member.trip.edit.post', ['id'=>$trip->id])}}" method="POST" enctype="multipart/form-data" id="myform">
                <input type="hidden" name="_token" value="{{csrf_token()}}">

                <div class="form-group">
                  <p align="left"><B> Phương tiện (*)</B></p>
                  <select class="form-control" name="vehicle_id" required="required">
                    @foreach($vehicles as $vehicle)
                    <option value="{{$vehicle->id}}" @if($trip->vehicle_id==$vehicle->id) selected @endif>{{$vehicle->name}}</option>
                    @endforeach
                  </select>
                </div>

                <p align="left"><B> Điểm Đi (*)</B></p>
                <!--   <label> Điểm Đi (*)</label> -->
                <input class="form-control" type="text" name="name[]" placeholder="Số nhà, tên đường" required="required" value="{{$trip->from->name}}" /><br>
                <input type="hidden" name="place_id[]" value="{{$trip->from->id}}" >
                <br>
                <div class="form-group form-group-sm">

                  <div class="col-xs-12 col-md-4"><label for="citie_id[]">Thành Phố:</label>
                    <select class="form-control" name="city_id[]" id="from_city" placeholder="Thành Phố" type="select" onchange="getDistricts('from_city', 'from_district')">
                      <option value="0">Chọn quận/huyện</option>
                      @foreach($cities as $city)
                      <option value="{{$city->id}}" @if($trip->from->city_id==$city->id) selected @endif>{{$city->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-xs-12 col-md-4"><label for="district_id[]">Quận Huyên:</label>
                    <select class="form-control" name="district_id[]" id="from_district" placeholder="Quận Huyên" required="" type="select" onchange="getWards('from_district', 'from_ward')">
                      @foreach($trip->from->city->districts as $district)
                      <option value="{{$district->id}}" @if($trip->from->district_id==$district->id) selected @endif>{{$district->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-xs-12 col-md-4"><label for="ward_id[]">Phường Xã:</label>
                    <select class="form-control" name="ward_id[]" id="from_ward" placeholder="Phường Xã" required="" type="select">
                      @foreach($trip->from->district->wards as $ward)
                      <option value="{{$ward->id}}" @if($trip->from->ward_id==$ward->id) selected @endif>{{$ward->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>


                <br>
                <br>
                <br>
                <p align="left"><B> Điểm Đến (*)</B></p>
                <!--   <label> Điểm Đi (*)</label> -->
                <input class="form-control" type="text" name="name[]" placeholder="Số nhà, tên đường" required="required" value="{{$trip->to->name}}" /><br>
                <input type="hidden" name="place_id[]" value="{{$trip->to->id}}" >
                <br>
                <div class="form-group form-group-sm">

                  <div class="col-xs-12 col-md-4"><label for="citie_id[]">Thành Phố:</label>
                    <select class="form-control" name="city_id[]" id="to_city" placeholder="Thành Phố" type="select" onchange="getDistricts('to_city', 'to_district')">
                      <option value="0">Chọn quận/huyện</option>
                      @foreach($cities as $city)
                      <option value="{{$city->id}}" @if($trip->to->city_id==$city->id) selected @endif>{{$city->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-xs-12 col-md-4"><label for="district_id[]">Quận Huyên:</label>
                    <select class="form-control" name="district_id[]" id="to_district" placeholder="Quận Huyên" required="" type="select" onchange="getWards('to_district', 'to_ward')">
                    <option value="0">Chọn quận/huyện</option>
                      @foreach($trip->to->city->districts as $district)
                      <option value="{{$district->id}}" @if($trip->to->district_id==$district->id) selected @endif>{{$district->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-xs-12 col-md-4"><label for="ward_id[]">Phường Xã:</label>
                    <select class="form-control" name="ward_id[]" id="to_ward" placeholder="Phường Xã" required="" type="select">
                      @foreach($trip->to->district->wards as $ward)
                      <option value="{{$ward->id}}" @if($trip->to->ward_id==$ward->id) selected @endif>{{$ward->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <br>
              
                <div class="form-group form-group-sm">
                  <p align="left"><B>Tiêu Đề (*)</B></p>
                  <input class="form-control" name="title" placeholder="Nhập Tiêu Đề" required="required" value="{{$trip->title}}"/>
                </div>
                <div class="form-group form-group-sm">
                  <p align="left"><B> Thời Gian Đi (*)</B></p>
                  <input type="date" class="form-control" name="day_go" placeholder="nhập thời gian đi" required="required" value="{{date('Y-m-d', strtotime($trip->day_go))}}"/>
                </div>
                <div class="form-group form-group-sm">
                  <p align="left"><B> Thời Gian Đến (*)</B></p>
                  <input type="date" class="form-control" name="day_to" placeholder="nhập thời gian đến" required="required" value="{{date('Y-m-d', strtotime($trip->day_to))}}"/>
                </div>
                <div class="form-group form-group-sm">
                  <p align="left"><B> Số Chỗ Còn Trống (*)</B></p>
                  <input class="form-control" name="seat" placeholder="nhập số chỗ trống" required="required" value="{{$trip->seat}}" />
                </div>
                <div class="form-group form-group-sm">
                  <p align="left"><B> Giá Tiền (*)</B></p>
                  <input class="form-control" name="price" placeholder="nhập giá tiền" required="required" value="{{$trip->price}}"/>
                </div>
                <button class="btn btn-sm btn-info " onclick="history.go(-1);"> <i class="glyphicon glyphicon-circle-arrow-left"></i> Quay lại</button>
                <button type="reset" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-refresh"></i>Làm mới</button>
                <button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-floppy-save"></span>Lưu </button>
              </form>
              <script>
      function getDistricts(id_form, id_to) {
        var matp = document.getElementById(id_form).value;
        $.ajax({
          url: '/api/getdistricts/' + matp
        }).done(function(data) {
          $("#" + id_to).html('<option value="0">Chọn quận/huyện</option>');
          data.forEach(function(element) {
            $("#" + id_to).append('<option value="' + element['id'] + '">' + element['name'] + '</option>');
          });
        });;
      }

      function getWards(id_form, id_to) {
        var maqh = document.getElementById(id_form).value;
        $.ajax({
          url: '/api/getwards/' + maqh
        }).done(function(data) {
          $("#" + id_to).html('<option value="0">Chọn xã/phường/thị trấn</option>');
          data.forEach(function(element) {
            $("#" + id_to).append('<option value="' + element['id'] + '">' + element['name'] + '</option>');
          });
        });;
      }
    </script>      
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