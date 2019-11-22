@extends('member.master')
@section('head')
<title>Dichungxe | Đặt xe của tôi</title>
@stop
@section('main')
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Tin tức
                            <small>danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    @if(session('thongbao'))
                            <div class='alert alert-success'>
                                {{session('thongbao')}}
                            </div>
                        @endif
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <td><b>ID</td>
                                <td><b>Tiêu đề</td>
                                <td><b>Nội dung</td>
                                <td><b>Hình</td>
                                <td><b>Xóa</td>
                                <td><b>Sửa</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($news as $news)
                                <tr class="odd gradeX" align="center">
                                    <td>{{$news->id}}</td>
                                    <td>{{$news->title}}</td>
                                    <td>{{$news->content}}</td>
                                    <td><img width="100px4" src="upload/news/{{$news->image}}"</td>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/news/delete/{{$news->id}}"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/news/edit/{{$news->id}}">Sửa</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@stop

@section('script')      