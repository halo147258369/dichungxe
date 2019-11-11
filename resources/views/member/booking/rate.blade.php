@extends('member.master')
@section('head')
<title>Dichungxe | Đánh giá trải nghiệm</title>
<link rel="stylesheet" href="{{secure_asset('plugins/datatables/dataTables.bootstrap4.css')}}">
<link rel="stylesheet" href="{{secure_asset('star-rating/StarRating.css')}}">
<link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
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
          <h1>ĐÁNH GIÁ</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active">Đánh giá</li>
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
            <h3 class="card-title">Để lại đánh giá của bạn</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="form-group">
              <label>Bạn nghĩ gì sau chuyến đi?</label>
              <textarea id="content" class="form-control" rows="3" placeholder="Hãy viết gì đó về chuyến đi của bạn"></textarea>
              <x-star-rating id="rating" value="0" number="5"></x-star-rating>
            </div>
            <div onclick="submit()" class="btn btn-primary">Gửi</div>

          </div>
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
<script src="{{secure_asset('star-rating/StarRating.js')}}"></script>
<script src="{{secure_asset('plugins/datatables/dataTables.bootstrap4.js')}}"></script>
<script>
  function submit() {
    post(
      '{{route('member.booking.rate.post', ['id' => $booking->id])}}', 
      {
        "_token": "{{ csrf_token() }}",
        "rate_type_id": $('#rating').val(),
        "content": $('#content').val()
      }
    );
  }

  function post(path, params, method = 'post') {

    const form = document.createElement('form');
    form.method = method;
    form.action = path;

    for (const key in params) {
      if (params.hasOwnProperty(key)) {
        const hiddenField = document.createElement('input');
        hiddenField.type = 'hidden';
        hiddenField.name = key;
        hiddenField.value = params[key];

        form.appendChild(hiddenField);
      }
    }

    document.body.appendChild(form);
    form.submit();
  }
</script>
@stop