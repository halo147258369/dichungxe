  @extends('admin.master')
    @section('main')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Quận huyện
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
                              <!--   <td><b>STT</td> -->
                                <td><b>Tên thành phố</td>
                                <td><b>Tên quận huyện</td>
                                
                                <td><b>Xóa</td>
                                <td><b>Cập nhật</td>
                            </tr>
                        </thead>
                        <tbody>
                   @foreach($districts as $d)
                            <tr class="odd gradeX" align="center">
                              <!--   <td>{{$d->id}}</td> -->
                              <td>{{$d->city->name}}</td>
                              <td>{{$d->name}}</td>
                                
                                
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href=""> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="">Cập nhật</a></td>
                            </tr>
                         @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        @endsection