@extends('member.master')
@section('main')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Phương tiện
                    <small>{{$vehicle->name}}</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                    {{$err}}<br>
                    @endforeach
                </div>
                @endif
                @if(session('status'))
                <div class='alert alert-success'>
                    {{session('status')}}
                </div>
                @endif
                @if(session('error'))
                <div class='alert alert-success'>
                    {{session('error')}}
                </div>
                @endif
                <form action="{{route('member.vehicle.edit.post', ['id' => $vehicle->id])}}" method="POST" enctype="multipart/form-data">
                    <!-- thieu enctype="multipart/form-data" -->
                    <input type="hidden" name="_token" value="{{csrf_token()}}" />

                    <div class="form-group">
                        <label>Loại phương tiện (*)</label>
                        <select class="form-control" name="vehicle_type_id">
                            @foreach($vehicle_types as $type)
                            <option @if($vehicle->vehicle_type_id == $type->id)
                                {{"selected"}}
                                @endif
                                value="{{$type->id}}">{{$type->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Tên phương tiện</label>
                        <input class="form-control" name="name" placeholder="Nhập tên phương tiện" value="{{$vehicle->name}}" />
                    </div>

                    <div class="form-group">
                        <label>Biển số</label>
                        <input class="form-control" name="number" placeholder="Nhập tên phương tiện" value="{{$vehicle->number}}" />
                    </div>

                    <div class="form-group">
                        <label>Tình trạng</label>
                        <textarea name="tinhtrang" id="description" class="form-control ckeditor" rows="3">{{$vehicle->description}}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Số chỗ</label>
                        <input class="form-control" name="seat" placeholder="Nhập tên phương tiện" value="{{$vehicle->seat}}" />
                    </div>
                    
                    <button class="btn btn-sm btn-info " onclick="history.go(-1);"> <i class="glyphicon glyphicon-circle-arrow-left"></i> Quay lại</button>

                    <button type="submit" class="btn btn-primary btn-sm">Cập nhật </button>
                    <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection