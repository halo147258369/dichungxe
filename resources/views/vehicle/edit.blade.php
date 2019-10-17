@extends('client.master')
@section('main')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Phương tiện
                            <small>{{$phuongtien->ten}}</small>
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
                        <form action="admin/phuongtien/sua/{{$phuongtien->id}}" method="POST"  enctype="multipart/form-data"> <!-- thieu enctype="multipart/form-data" -->
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>

                            <div class="form-group">
                                <label>Loại phương tiện (*)</label>
                                <select class="form-control" name="loaiphuongtien">
                                    @foreach($loaiphuongtien as $lpt)
                                    <option 
                                    @if($phuongtien->loaiphuongtien->id == $lpt->id)
                                    {{"selected"}}
                                    @endif
                                    value="{{$lpt->id}}">{{$lpt->ten}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Tên phương tiện</label>
                                <input class="form-control" name="ten" placeholder="Nhập tên phương tiện" value ="{{$phuongtien->ten}}" />
                            </div>
                          <div class="form-group">
                                <label>Hình ảnh</label>
                                <p>
                                    <img width="400px" src="upload/phuongtien/{{$phuongtien->hinh}}">
                                </p>
                                 <input type="file" name="hinh" class="form-control"/>
                                                       
                            </div>
                            <div class="form-group">
                                <label>Biển số</label>
                                <input class="form-control" name="bienso" placeholder="Nhập tên phương tiện" value ="{{$phuongtien->bienso}}" />
                            </div>

                           <div class="form-group">
                                <label>Tình trạng</label>
                                <textarea name="tinhtrang" id="demo" class="form-control ckeditor" rows="3">
                                    {{$phuongtien->tinhtrang}}
                                </textarea>
                            </div>
                            
                            <div class="form-group">
                                <label>Số chỗ</label>
                                <input class="form-control" name="socho" placeholder="Nhập tên phương tiện" value ="{{$phuongtien->socho}}" />
                            </div>

                            

                           <a class="btn btn-sm btn-info " href="{{ URL::to('admin/phuongtien/danhsach') }}"> <i class="glyphicon glyphicon-circle-arrow-left"></i> Quay lại</a>
                            
                            <button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-floppy-save"></span>Cập nhật </button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection