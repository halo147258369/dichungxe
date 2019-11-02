@extends('admin.master')
@section('title')
Danh sách chuyến đi
@endsection
@section('main')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Duyệt đặt xe
                    <small>Danh sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            @if(session('status'))
            <div class="row">
                <div class="col-md-12">
                    <div class='alert alert-success'>
                        {{session('status')}}
                    </div>
                </div>
            </div>
            @endif
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <td><b>STT</td>
                        <td><b>Đi từ</td>
                        <td><b>Đến</td>
                        <td><b>Số chỗ</td>
                        <td><b>Tình trạng</td>
                        <td><b>Cập nhật</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bookings as $booking)

                    <tr class="odd gradeX" align="center">
                        <td>{{$booking->id}}</td>
                        <td>{{$booking->trip->from->ward->name}}, {{$booking->trip->from->district->name}}, {{$booking->trip->from->city->name}}</td>
                        <td>{{$booking->trip->to->ward->name}}, {{$booking->trip->to->district->name}}, {{$booking->trip->to->city->name}}</td>
                        <td>{{$booking->seat}}</td>
                        <td>@if($booking->verify) <span class="badge bg-success">ĐÃ DUYỆT</span> @else <span class="badge bg-danger">CHƯA DUYỆT</span> @endif</td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a class="btn btn-primary @if($booking->verify) disabled @endif"  href="{{route('admin.booking.verify.get', ['id'=>$booking->id])}}">Duyệt</a></td>
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