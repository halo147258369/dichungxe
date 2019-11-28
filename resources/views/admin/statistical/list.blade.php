@extends('admin.master')
@section('head')
<title>Dichungxe | Thống kê</title>
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
            <h1>Thống kê</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Thống kê</li>
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
              <h3 class="card-title">Danh sách </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1">
                <img src="data:image/png;base64,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" class="img-responsive" alt="cruise-img" />
              </span>
 
              <div class="info-box-content">
                <span class="info-box-text"><font color="black"><b>Số người dùng</b></font></span>
                <span class="info-box-number">
                  {{$member}}
                  <small></small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTfr_NBq8gfdUA3EilvbMxAYUr-hBzYx8osRkABMM98AtLXN1mj"   /></span>

              <div class="info-box-content">
                <span class="info-box-text"><font color=""><b>Tổng số phương tiện</b></font></span>
                <span class="info-box-number">{{$vehicle}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><img src="data:image/jpeg;base64,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"   /></span>

              <div class="info-box-content">
                <span class="info-box-text"><b>Số lượng công ty</b></span>
                <span class="info-box-number">{{$company}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
         
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->


     
        <!-- /.row -->

        <!-- Main row -->
       
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
<!--haak -->
    

       

<!--haak -->

    <!-- BAR CHART -->
         
  <div class="box-footer">
  <div class="col-md-12">
    <h2 >Biểu Đồ Thống Kê Số Lượng Chuyến Đi Theo Tháng</h2>
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

          <!-- BAR CHART -->

            <!-- /.card -->
        
            </div>
            <!-- /.card-body -->
            
            <div class="dataTables_paginate paging_simple_numbers">
        
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
<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

    var areaChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [
        {
          label               : 'Digital Goods',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [28, 48, 40, 19, 86, 27, 90]
        },
        {
          label               : 'Electronics',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [65, 59, 80, 81, 56, 55, 40]
        },
      ]
    }

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }

    // This will get the first returned node in the jQuery collection.
    var areaChart       = new Chart(areaChartCanvas, { 
      type: 'line',
      data: areaChartData, 
      options: areaChartOptions
    })

    //-------------
    //- LINE CHART -
    //--------------
    var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
    var lineChartOptions = jQuery.extend(true, {}, areaChartOptions)
    var lineChartData = jQuery.extend(true, {}, areaChartData)
    lineChartData.datasets[0].fill = false;
    lineChartData.datasets[1].fill = false;
    lineChartOptions.datasetFill = false

    var lineChart = new Chart(lineChartCanvas, { 
      type: 'line',
      data: lineChartData, 
      options: lineChartOptions
    })

    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [
          'Chrome', 
          'IE',
          'FireFox', 
          'Safari', 
          'Opera', 
          'Navigator', 
      ],
      datasets: [
        {
          data: [700,500,400,600,300,100],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var donutChart = new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions      
    })

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData        = donutData;
    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var pieChart = new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions      
    })

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = jQuery.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp1
    barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    var barChart = new Chart(barChartCanvas, {
      type: 'bar', 
      data: barChartData,
      options: barChartOptions
    })

    //---------------------
    //- STACKED BAR CHART -
    //---------------------
    var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
    var stackedBarChartData = jQuery.extend(true, {}, barChartData)

    var stackedBarChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      scales: {
        xAxes: [{
          stacked: true,
        }],
        yAxes: [{
          stacked: true
        }]
      }
    }

    var stackedBarChart = new Chart(stackedBarChartCanvas, {
      type: 'bar', 
      data: stackedBarChartData,
      options: stackedBarChartOptions
    })
  })
</script>
@stop

@section('script')
<script src="{{secure_asset('plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{secure_asset('plugins/datatables/dataTables.bootstrap4.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable({
        // "order": false,
        "order": [[ 0, "asc" ]],
        "lengthMenu": [ 50 ],
        "bPaginate": false,
        "language": {
            "sProcessing":   "Đang xử lý...",
            "sLengthMenu":   "Xem _MENU_ mục",
            "sZeroRecords":  "Không tìm thấy dòng nào phù hợp",
            "sInfo":         "Đang xem _START_ đến _END_ trong tổng số _TOTAL_ mục",
            "sInfoEmpty":    "Đang xem 0 đến 0 trong tổng số 0 mục",
            "sInfoFiltered": "(được lọc từ _MAX_ mục)",
            "sInfoPostFix":  "",
            "sSearch":       "Tìm:",
            "sUrl":          "",
            "oPaginate": {
                "sFirst":    "Đầu",
                "sPrevious": "Trước",
                "sNext":     "Tiếp",
                "sLast":     "Cuối"
            }
        }
    });
  });

</script>
@stop