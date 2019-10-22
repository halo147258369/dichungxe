    @extends('member.master')
    @section('main')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Phương tiện
                        <small>Thêm</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-12" style="padding-bottom:120px">
                    @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                        {{$err}}<br>
                        @endforeach
                    </div>
                    @endif
                    @if(session('thongbao'))
                    <div class='alert alert-success'>
                        {{session('thongbao')}}
                    </div>
                    @endif
                    @if(session('loi'))
                    <div class='alert alert-success'>
                        {{session('loi')}}
                    </div>
                    @endif
                    <form action="admin/phuongtien/them" method="POST" enctype="multipart/form-data" id="myform">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label>Loại phương tiện (*)</label>
                            <select class="form-control" name="loaiphuongtien">
                                @foreach($vehicle_types as $vehicle_types)
                                <option value="{{$vehicle_type->id}}">{{$vehicle_type->name}}</option>
                                @endforeach
                            </select>   
                        </div>
                        <div class="form-group form-group-sm">
                            <label>Tên phương tiện <span class="error">(*) </span></label>
                            <input class="form-control" name="ten" placeholder="Nhập tên phương tiện" />
                        </div>
                        <div class="form-group">
                            <label>Hình ảnh (*)</label>
                            <input type="file" name="hinh" class="form-control" />
                        </div>
                        <div class="form-group form-group-sm">
                            <label>Biển số <span class="error">(*) </span></label>
                            <input class="form-control" name="bienso" placeholder="Nhập biển số xe" />
                        </div>
                        <div class="form-group">
                            <label>Tình trạng </label>
                            <textarea name="tinhtrang" id="demo" class="form-control ckeditor" rows="3"></textarea>
                        </div>
                        <div class="form-group form-group-sm">
                            <label>Số chỗ <span class="error">(*) </span></label>
                            <input class="form-control" name="socho" placeholder="Nhập sỗ chỗ" />
                        </div>
                        <!--  <div class="form-group form-group-sm">
                                <label>Thông báo:</label>
                                <input class="form-control" name="thongbao" placeholder="Nhập tiêu tên thông báo" />
                            </div> -->

                        <a class="btn btn-sm btn-info " href="{{ URL::to('admin/phuongtien/danhsach') }}"> <i class="glyphicon glyphicon-circle-arrow-left"></i> Quay lại</a>
                        <button type="reset" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-refresh"></i>Làm mới</button>
                        <button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-floppy-save"></span>Thêm </button>
                        <form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    @endsection