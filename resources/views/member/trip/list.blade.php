@extends('member.master')
@section('title')
Danh sách chuyến đi
@endsection
@section('main')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">chuyến đi
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
                        <td><b>phương tiện</td>
                        <td><b>Điểm đi</td>
                        <td><b>Điểm đến</td>
                        <td><b>Tiêu đề</td>
                        <td><b>TG đi</td>
                        <td><b>TG đến</td>
                        <td><b>Số chỗ</td>
                        <td><b>Giá tiền</td>
                        <td><b>Xóa</td>
                        <td><b>Cập nhật</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($trips as $trip)

                    <tr class="odd gradeX" align="center">
                        <td>{{$trip->id}}</td>
                        <td>{{$trip->vehicle->name}}</td>
                        <td>{{$trip->from->name}}, {{$trip->from->city->name}}</td>
                        <td>{{$trip->to->name}}, {{$trip->to->city->name}}</td>
                        <td>{{$trip->title}}</td>
                        <td>{{date('d-m-Y', strtotime($trip->day_go))}}</td>
                        <td>{{date('d-m-Y', strtotime($trip->day_to))}}</td>
                        <td>{{$trip->seat}}</td>
                        <td>{{$trip->price}}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('member.trip.delete.get', ['id'=>$trip->id])}}"> Xóa</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('member.trip.edit.get', ['id'=>$trip->id])}}">Cập nhật</a></td>
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
@endsection