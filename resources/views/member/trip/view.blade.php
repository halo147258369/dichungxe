@extends('member.master')
@section('head')
<title>Dichungxe | Chuyến đi của tôi</title>
<link rel="stylesheet" href="{{secure_asset('plugins/datatables/dataTables.bootstrap4.css')}}">
<style>
  .pagination li {
    padding: 10px;
  }

  .pagination {
    float: right;
  }
</style>
@stop
@section('main')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>CHUYẾN ĐI CỦA TÔI</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active">Chuyến đi</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Chuyến đi của tôi</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <td>Tên khách hàng</td>
                  <td>Số điện thoại</td>
                  <td>Tình trạng</td>
                  <td></td>
                </tr>
              </thead>
              <tbody>
                @foreach($bookings as $booking)
                <tr>
                  <td>{{$booking->member->name}}</td>
                  <td>{{$booking->member->phone}}</td>

                  @if($booking->verify == 0)
                  <td>
                    <span class="badge bg-warning">CHƯA DUYỆT</span> </td>
                  <td>
                    <a href="{{route('member.booking.verify.get', ['id'=>$booking->id])}}" class="btn btn-primary"> Chấp nhận</a>
                    <a href="{{route('member.booking.notverify.get', ['id'=>$booking->id])}}" class="btn btn-default">Từ chối</a>
                  </td>
                  @else
                  @if($booking->verify == 1)
                  <td>
                    <span class="badge bg-success">ĐÃ DUYỆT</span></td>
                  <td>
                    <a class="btn btn-primary disabled">Đã Duyệt</a>
                  </td>
                  @else
                  <td>
                    <span class="badge bg-danger">ĐÃ TỪ CHỐI</span></td>
                  <td>
                    <a class="btn btn-primary disabled">Đã Từ chối</a>
                  </td>
                  @endif
                  @endif
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@stop

@section('script')
<script src="{{secure_asset('plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{secure_asset('plugins/datatables/dataTables.bootstrap4.js')}}"></script>
<script>
  $(function() {
    $("#example1").DataTable({
      // "order": false,
      "order": [
        [0, "asc"]
      ],
      "lengthMenu": [50],
      "bPaginate": false,
      "language": {
        "sProcessing": "Đang xử lý...",
        "sLengthMenu": "Xem _MENU_ mục",
        "sZeroRecords": "Không tìm thấy dòng nào phù hợp",
        "sInfo": "Đang xem _START_ đến _END_ trong tổng số _TOTAL_ mục",
        "sInfoEmpty": "Đang xem 0 đến 0 trong tổng số 0 mục",
        "sInfoFiltered": "(được lọc từ _MAX_ mục)",
        "sInfoPostFix": "",
        "sSearch": "Tìm:",
        "sUrl": "",
        "oPaginate": {
          "sFirst": "Đầu",
          "sPrevious": "Trước",
          "sNext": "Tiếp",
          "sLast": "Cuối"
        }
      }
    });
  });
</script>
@stop