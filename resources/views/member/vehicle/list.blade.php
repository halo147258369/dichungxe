@extends('member.master')
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
                                <td><b>Loại phương tiện</td>
                                <td><b>Tên phương tiện</td>
                                <td><b>Biển số</td>
                                <td><b>Tình trạng</td>
                                <td><b>Số chỗ</td>
                                <td><b>Xóa</td>
                                <td><b>Cập nhật</td>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach($vehicles as $vehicle)
                            <tr class="odd gradeX" align="center">
                                <td>{{$vehicle->vehicle_type->name}}</td>
                                <td>{{$vehicle->name}}</td>
                                <td>{{$vehicle->number}}</td>
                                <td>{{$vehicle->description}}</td>
                                <td>{{$vehicle->seat}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('member.vehicle.delete.get', ['id'=>$vehicle->id])}}"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('member.vehicle.edit.get', ['id'=>$vehicle->id])}}">Cập nhật</a></td>
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