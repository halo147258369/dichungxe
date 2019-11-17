@extends('admin.master')
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
            <form action="{{route('admin.hour.add.post')}}" method="POST" enctype="multipart/form-data" id="myform">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
            
              <div class="form-group">
               <label>Chọn Tuyến Bus</label>
               <select class="form-control" name="busroutes">
                @foreach($busroutes as $busroute)
                <option value="{{$busroute->id}}">{{$busroute->name}}</option>
                @endforeach
              </select>
            </div>
<div class="form-group">
               <label>Chọn Công Ty</label>
               <select class="form-control" name="companies">
                @foreach($companies as $company)
                <option value="{{$company->id}}">{{$company->name}}</option>
                @endforeach
              </select>
            </div>
            
            <div class="form-group">
               <label>Chọn Thứ</label>
               <select class="form-control" name="days">
               @foreach($days as $day)
                <option value="{{$day->id}}">{{$day->name}}</option>
                @endforeach 
          
              </select>
            </div>
            

           
   
            <div class="form-group">
              <label>Thời gian đi</label>
              <input type="time" name="time" class="form-control" placeholder="Nhập thời gian đi" required="required">
            </div>
           
          
            <button type="submit" class="btn btn-primary">Lưu chuyến đi</button>
              </form>
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