@extends('client.master')
@section('main')
  <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Quận huyện
                            <small>{{$quanhuyen->ten}}</small>
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
                        <form action="{{route('district.edit.post')}}" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <div class="form-group">
                                <label>Thành phố</label>
                                <select class="form-control" name="city">
                                  
                                    <option >
                                    </option>
                                    
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tên quận huyện</label>
                                <input class="form-control" name="name" placeholder="Nhập tên quận huyện" value ="" />
                            </div>
                           <a class="btn btn-sm btn-info " href="{{ URL::to('') }}"> <i class="glyphicon glyphicon-circle-arrow-left"></i> Quay lại</a>
                            
                            <button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-floppy-save"></span>Cập nhật </button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        @endsection