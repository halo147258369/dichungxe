@extends('admin.master')
@section('head')
<h1>
  BIỂU ĐỒ THỐNG KÊ SỐ LƯỢNG CHI ĐOÀN 
</h1>
<ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
  <li class="active">Thống kê</li>
  <li class="active">Thống kê số lượng chi đoàn</li>
</ol>


@section('css')
{{-- <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css"> --}}
<link rel="stylesheet" href="{{ asset ('css/toastr.css') }}">
<link rel="stylesheet" href="{{ asset ('theme/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
<style>
/*a {
  color: black !important;
  }*/
  td{
    text-align: center; !important;
  }

  th{
    text-align: center; !important;
  }
</style>


<div class="box">

  


<div class="box-header">
  <!-- <h3 class="box-title">Danh Sách Hãng Sản Xuất</h3> -->
</div>
<!-- /.box-header -->

<div class="box-footer">
  <div class="col-md-12">
    <h2 >Biểu Đồ Thống Kê Số lượng Chi Đoàn Của Khoa</h2>
    <canvas id="myChart" width="400" height="100"></canvas>
  </div>
</div>
<!-- Modal -->
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="{{ asset ('theme/admin/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset ('theme/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

<canvas id="myChart" width="400" height="100"></canvas>
<script>
  var ctx = document.getElementById('myChart').getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: <?php echo ("$labels"); ?>,
      datasets: [{
        label: <?php echo ("$labels"); ?>,
        data: <?php echo ("$values"); ?>,
        backgroundColor: [

        'rgba(255, 215 , 0)',
        'rgba(106, 90, 205)',
        'rgba(141, 238, 238)',
        'rgba(255, 99, 132)',
        'rgba(255, 140, 0)',
        'rgba(54, 162, 235)',
        'rgba(255, 206, 86)',
        'rgba(75, 192, 192)',
        'rgba(153, 102, 255)',
        'rgba(255, 159, 64)',
        'rgba(255, 105, 180)'
                // ]
                ]
              }]
            },
            options: {
              scales: {
                yAxes: [{
                  ticks: {
                    beginAtZero: true
                  }
                }]
              }
            }
          });
        </script>


@section('script')