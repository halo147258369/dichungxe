@extends('client.master')
@section('main')
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Phương tiện
                            <small>Danh sách</small>
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
                                <td><b>STT</td>
                                <td><b>Loại phương tiện</td>
                                <td><b>Tên phương tiện</td>
                                <td><b>Hình ảnh</td>
                                <td><b>Biển số</td>
                                <td><b>Tình trạng</td>
                                <td><b>Số chỗ</td>
                                <td><b>Xóa</td>
                                <td><b>Cập nhật</td>
                            </tr>
                        </thead>
                        <tbody>
                           
                            <tr class="odd gradeX" align="center">
                                <td></td>
                                <!-- <td>{{$pt->idLoaiPhuongTien}}</td> -->
                                <td> </td>

                                <td></td>
                                <!-- <td>{{$pt->hinh}}</td> -->
                               <td> <img src="" class="img-responsive" alt="" height="150px" /></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/phuongtien/xoa/{{$pt->id}}"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/phuongtien/sua/{{$pt->id}}">Cập nhật</a></td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection