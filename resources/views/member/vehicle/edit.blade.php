@extends('member.master')

@section('head')
<title>Dichungxe | Thêm phương tiện</title>
<link rel="stylesheet" href="{{ secure_asset('plugins/select2/select2.min.css') }}">
@stop
  
@section('main')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>THÊM PHƯƠNG TIỆN</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Phương tiện</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
    @if (count($errors) > 0) 
    @foreach ($errors->all() as $error) 
      <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h4><i class="icon fa fa-ban"></i> Thất bại!</h4> {!! $error !!}
      </div>
    @endforeach
    @endif
    <form action="{{route('member.vehicle.add.post')}}" method="post">
    {{csrf_field()}}
    <input type="hidden" name="member_id" value="{{ Auth::guard('member')->user()->id}}"/>
    <div class="row">
      <div class="col-md-12">
        <div class="card card-primary">
          <div class="card-body">
            <div class="col-md-12">
              <div class="form-group col-md-12">
                <label>Loại phương tiện</label>
                <select name="vehicle_type_id" class="form-control select2" style="width: 100%;">
                  @foreach($vehicle_types as $vehicle_type)
                  <option value="{{$vehicle_type->id}}">{{$vehicle_type->name}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group col-md-12">
                <label>Tên phương tiện</label>
                <input type="texxt" class="form-control" name="name" value="{{ old('name') }}" required>
              </div>
              <div class="form-group col-md-12">
                <label>Số chỗ</label>
                <input type="number" class="form-control" name="seat" value="{{ old('seat') }}" required>
              </div>
              <div class="form-group col-md-12">
                <label>Biển số</label>
                <input type="textarea" class="form-control" name="number" value="{{ old('number') }}" placeholder="VD: 65-XX 456.79" required>
              </div>
              <div class="form-group col-md-12">
                <label>Tình trạng xe</label>
                <input type="textarea" class="form-control" name="description" value="{{ old('description') }}" placeholder="Xe đời 2016, có máy lạnh, ..." required>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary pull-right">Thêm mới</button>
          </div>
        </div>
      </div>
    </div>
    </form>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@stop
@section('script')
<!-- bootstrap datepicker -->
<script language="JavaScript" type="text/javascript" src="{{ asset('/plugins/jquery/jquery.min.js')}}"></script>
<script language="JavaScript" type="text/javascript" src="{{ asset('/plugins/select2/select2.full.min.js')}}"></script>
<script>
/* global $ */
  $(function () {
    $('.select2').select2()
  })
</script>
@stop