<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
</head>
<style>
  body {
    background: #F1F3FA;
  }


  .profile {
    margin: 20px 0;
  }

  .profile-sidebar {
    padding: 20px 0 10px 0;
    background: #fff;
  }


  .profile-userpic img {
    float: none;
    margin: 0 auto;
    width: 50%;
    height: 50%;
    -webkit-border-radius: 50% !important;
    -moz-border-radius: 50% !important;
    border-radius: 50% !important;
  }


  .profile-usertitle {
    text-align: center;
    margin-top: 20px;
  }


  .profile-usertitle-name {
    color: #5a7391;
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 7px;
  }


  .profile-usertitle-job {
    text-transform: uppercase;
    color: #5b9bd1;
    font-size: 12px;
    font-weight: 600;
    margin-bottom: 15px;
  }


  .profile-userbuttons {
    text-align: center;
    margin-top: 10px;
  }


  .profile-userbuttons .btn {
    text-transform: uppercase;
    font-size: 11px;
    font-weight: 600;
    padding: 6px 15px;
    margin-right: 5px;
  }


  .profile-userbuttons .btn:last-child {
    margin-right: 0px;
  }

  .profile-usermenu {
    margin-top: 30px;
  }

  .profile-usermenu ul li {
    border-bottom: 1px solid #f0f4f7;
  }


  .profile-usermenu ul li:last-child {
    border-bottom: none;
  }

  .profile-usermenu ul li a {
    color: #93a3b5;
    font-size: 14px;
    font-weight: 400;
  }


  .profile-usermenu ul li a i {
    margin-right: 8px;
    font-size: 14px;
  }

  .profile-usermenu ul li a:hover {
    background-color: #fafcfd;
    color: #5b9bd1;
  }


  .profile-usermenu ul li.active {
    border-bottom: none;
  }


  .profile-usermenu ul li.active a {
    color: #5b9bd1;
    background-color: #f6f9fb;
    border-left: 2px solid #5b9bd1;
    margin-left: -2px;
  }


  .profile-content {
    padding: 20px;
    background: #fff;
    min-height: 460px;
  }

  p {
    margin-right: 650px;
    \

  }

  /*https://hocwebgiare.com/thiet_ke_web_chuan_demo/bootstrap_user_profile/images/profile_user.jpg*/
</style>

<body>
  <div class="container">
    <h1 class="text-center">Trang người dùng</h1>
    <div class="container">
      <div class="row profile">
        <div class="col-md-3">
          <div class="profile-sidebar">
            <div class="profile-userpic"> <img src="{{asset('images/luanvan.jpg')}}" class="img-responsive" alt="Thông tin cá nhân">
            </div>
            <div class="profile-usertitle">
              <div class="profile-usertitle-name">

              </div>
              <div class="profile-usertitle-job">

              </div>
            </div>
            <div class="profile-userbuttons">
              <a class="btn btn-success btn-sm" href="{{route('member.dashboard.view.get')}}">Trang chủ</a>
              <a class="btn btn-danger btn-sm" href="{{route('member.logout.get')}}">Thoát ra</a>
            </div>
            <div class="profile-usermenu">
              <ul class="nav">
                <div class="logo_menuchinh" style="float:left; padding-top:5px; padding-left:10px; color:#fff; margin-left:auto; margin-right:auto; text-align=center; line-height:40px; font-size:16px;font-weight:bold;font-family:Arial">TienDat</div>&nbsp&nbsp<div class="menu-icon"><span></span></div>
                <li class="active">
                  <a href="#">
                    THÔNG TIN CÁ NHÂN
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="glyphicon glyphicon-user"></i>
                    {{Auth::guard('member')->user()->name}}
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="glyphicon glyphicon-phone"></i>
                    {{Auth::guard('member')->user()->phone}}
                  </a>
                </li>
                <li>
                  <a href="#" target="_blank">
                    <i class="glyphicon glyphicon-home"></i>
                    {{Auth::guard('member')->user()->address or 'Không có'}}
                  </a>
                </li>

              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-9">
          <div class="profile-content">
            <div class="profile-userbuttons">

              <div class="panel-body">
                @if(count($errors) > 0)
                <div class="alert alert-danger">
                  @foreach($errors->all() as $err)
                  {{$err}}<br>
                  @endforeach
                </div>

                @endif
                @if(session('status'))
                <div class="alert alert-success">
                  {{session('status')}}
                </div>
                @endif

                @if(session('error'))
                <div class="alert alert-danger">
                  {{session('error')}}
                </div>
                @endif
              </div>
              <form action="{{route('member.trip.edit.post', ['id'=>$trip->id])}}" method="POST" enctype="multipart/form-data" id="myform">
                <input type="hidden" name="_token" value="{{csrf_token()}}">

                <div class="form-group">
                  <p align="left"><B> Phương tiện (*)</B></p>
                  <select class="form-control" name="vehicle_id" required="required">
                    @foreach($vehicles as $vehicle)
                    <option value="{{$vehicle->id}}" @if($trip->vehicle_id==$vehicle->id) selected @endif>{{$vehicle->name}}</option>
                    @endforeach
                  </select>
                </div>

                <p align="left"><B> Điểm Đi (*)</B></p>
                <!--   <label> Điểm Đi (*)</label> -->
                <input class="form-control" type="text" name="name[]" placeholder="Số nhà, tên đường" required="required" value="{{$trip->from->name}}" /><br>
                <input type="hidden" name="place_id[]" value="{{$trip->from->id}}" >
                <br>
                <div class="form-group form-group-sm">

                  <div class="col-xs-12 col-md-4"><label for="citie_id[]">Thành Phố:</label>
                    <select class="form-control" name="city_id[]" id="from_city" placeholder="Thành Phố" type="select" onchange="getDistricts('from_city', 'from_district')">
                      <option value="0">Chọn quận/huyện</option>
                      @foreach($cities as $city)
                      <option value="{{$city->id}}" @if($trip->from->city_id==$city->id) selected @endif>{{$city->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-xs-12 col-md-4"><label for="district_id[]">Quận Huyên:</label>
                    <select class="form-control" name="district_id[]" id="from_district" placeholder="Quận Huyên" required="" type="select" onchange="getWards('from_district', 'from_ward')">
                      @foreach($trip->from->city->districts as $district)
                      <option value="{{$district->id}}" @if($trip->from->district_id==$district->id) selected @endif>{{$district->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-xs-12 col-md-4"><label for="ward_id[]">Phường Xã:</label>
                    <select class="form-control" name="ward_id[]" id="from_ward" placeholder="Phường Xã" required="" type="select">
                      @foreach($trip->from->district->wards as $ward)
                      <option value="{{$ward->id}}" @if($trip->from->ward_id==$ward->id) selected @endif>{{$ward->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>


                <br>
                <br>
                <br>
                <p align="left"><B> Điểm Đến (*)</B></p>
                <!--   <label> Điểm Đi (*)</label> -->
                <input class="form-control" type="text" name="name[]" placeholder="Số nhà, tên đường" required="required" value="{{$trip->to->name}}" /><br>
                <input type="hidden" name="place_id[]" value="{{$trip->to->id}}" >
                <br>
                <div class="form-group form-group-sm">

                  <div class="col-xs-12 col-md-4"><label for="citie_id[]">Thành Phố:</label>
                    <select class="form-control" name="city_id[]" id="to_city" placeholder="Thành Phố" type="select" onchange="getDistricts('to_city', 'to_district')">
                      <option value="0">Chọn quận/huyện</option>
                      @foreach($cities as $city)
                      <option value="{{$city->id}}" @if($trip->to->city_id==$city->id) selected @endif>{{$city->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-xs-12 col-md-4"><label for="district_id[]">Quận Huyên:</label>
                    <select class="form-control" name="district_id[]" id="to_district" placeholder="Quận Huyên" required="" type="select" onchange="getWards('to_district', 'to_ward')">
                    <option value="0">Chọn quận/huyện</option>
                      @foreach($trip->to->city->districts as $district)
                      <option value="{{$district->id}}" @if($trip->to->district_id==$district->id) selected @endif>{{$district->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-xs-12 col-md-4"><label for="ward_id[]">Phường Xã:</label>
                    <select class="form-control" name="ward_id[]" id="to_ward" placeholder="Phường Xã" required="" type="select">
                      @foreach($trip->to->district->wards as $ward)
                      <option value="{{$ward->id}}" @if($trip->to->ward_id==$ward->id) selected @endif>{{$ward->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <br>
                <br>
                <br>
                <div class="form-group form-group-sm">
                  <p align="left"><B>Tiêu Đề (*)</B></p>
                  <input class="form-control" name="title" placeholder="Nhập Tiêu Đề" required="required" value="{{$trip->title}}"/>
                </div>
                <div class="form-group form-group-sm">
                  <p align="left"><B> Thời Gian Đi (*)</B></p>
                  <input type="date" class="form-control" name="day_go" placeholder="nhập thời gian đi" required="required" value="{{date('Y-m-d', strtotime($trip->day_go))}}"/>
                </div>
                <div class="form-group form-group-sm">
                  <p align="left"><B> Thời Gian Đến (*)</B></p>
                  <input type="date" class="form-control" name="day_to" placeholder="nhập thời gian đến" required="required" value="{{date('Y-m-d', strtotime($trip->day_to))}}"/>
                </div>
                <div class="form-group form-group-sm">
                  <p align="left"><B> Số Chỗ Còn Trống (*)</B></p>
                  <input class="form-control" name="seat" placeholder="nhập số chỗ trống" required="required" value="{{$trip->seat}}" />
                </div>
                <div class="form-group form-group-sm">
                  <p align="left"><B> Giá Tiền (*)</B></p>
                  <input class="form-control" name="price" placeholder="nhập giá tiền" required="required" value="{{$trip->price}}"/>
                </div>
                <button class="btn btn-sm btn-info " onclick="history.go(-1);"> <i class="glyphicon glyphicon-circle-arrow-left"></i> Quay lại</button>
                <button type="reset" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-refresh"></i>Làm mới</button>
                <button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-floppy-save"></span>Lưu </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      function getDistricts(id_form, id_to) {
        var matp = document.getElementById(id_form).value;
        $.ajax({
          url: '/api/getdistricts/' + matp
        }).done(function(data) {
          $("#" + id_to).html('<option value="0">Chọn quận/huyện</option>');
          data.forEach(function(element) {
            $("#" + id_to).append('<option value="' + element['id'] + '">' + element['name'] + '</option>');
          });
        });;
      }

      function getWards(id_form, id_to) {
        var maqh = document.getElementById(id_form).value;
        $.ajax({
          url: '/api/getwards/' + maqh
        }).done(function(data) {
          $("#" + id_to).html('<option value="0">Chọn xã/phường/thị trấn</option>');
          data.forEach(function(element) {
            $("#" + id_to).append('<option value="' + element['id'] + '">' + element['name'] + '</option>');
          });
        });;
      }
    </script>
</body>

</html>