<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet"> <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="js/jquery-1.11.1.min.js"></script>
</head>
<style>
body {  
  background: #F1F3FA;
}


.profile {  margin: 20px 0;}

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
/*https://hocwebgiare.com/thiet_ke_web_chuan_demo/bootstrap_user_profile/images/profile_user.jpg*/
</style>
<body>
  <div class="container"> 
   <h1 class="text-center">Trang người dùng</h1> 
   <div class="container"> 
    <div class="row profile">        
     <div class="col-md-3">          
      <div class="profile-sidebar">                          
       <div class="profile-userpic">                 <img src="../images/luanvan.jpg" class="img-responsive" alt="Thông tin cá nhân">               
       </div>                                            
       <div class="profile-usertitle">                   
        <div class="profile-usertitle-name">
               
        </div>                  
        <div class="profile-usertitle-job">                       
                     
          </div>              
      </div>                                                
      <div class="profile-userbuttons">                 
        <button type="button" class="btn btn-success btn-sm"><a href="successlogin1/">Trang chủ</a></button>                  
        <button type="button" class="btn btn-danger btn-sm"><a href="logout">Thoát ra</a></button>                
      </div>                                            
      <div class="profile-usermenu">                    
        <ul class="nav"><div class="logo_menuchinh" style="float:left; padding-top:5px; padding-left:10px; color:#fff; margin-left:auto; margin-right:auto; text-align=center; line-height:40px; font-size:16px;font-weight:bold;font-family:Arial">TienDat</div>&nbsp&nbsp<div class="menu-icon"><span></span></div>                      
          <li class="active">                        
            <a href="#">                         
              <!-- <i class="glyphicon glyphicon-info-sign"></i>  -->
             <!--  Cập nhật thông tin cá nhân -->
            </a>                     
          </li> 
           <li>                            
            <a href="#">                         
              <i class="glyphicon glyphicon-user"></i>                            
             
            </a>                       
          </li>                       
          <li>                            
            <a href="#">                         
              <i class="glyphicon glyphicon-phone"></i>                           
                       
          </li>                       
          <li>                            
            <a href="#" target="_blank">                         
              <i class="glyphicon glyphicon-home"></i>                          
            
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
          @if(session('thongbao'))
                  <div class="alert alert-success">
                      {{session('thongbao')}}
                  </div>
              @endif

              @if(session('thongbao2'))
              <div class="alert alert-danger">
                  {{session('thongbao2')}}
              </div>
          @endif
      </div>  

      <style>
        p {
  
    margin-right: 650px;

    
}
      </style>
                    <form action="admin/chuyendi/them" method="POST" enctype="multipart/form-data" id="myform">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            
                            <div class="form-group">
                                <p =align="left"><B> Phương tiện (*)</B></p>
                                <select class="form-control" name="idPhuongTien">
                                   
                                </select>
                            </div>
                   
                             <p =align="left"><B> Điểm Đi (*)</B></p>
                            <!--   <label> Điểm Đi (*)</label> -->
 <input class="form-control"  type="text"name="DiaChiCuThe" placeholder="Chọn thành phố ,quận huyện, phường" /><br>
 <br>
      <div class="form-group form-group-sm"> 
                    
            <div class="col-xs-6 col-md-3"><label for="email">Thành Phố:</label>
                  <select class="form-control" name="cities"id="thanhpho" placeholder="Thành Phố" type="select"> 

                  </select>
           </div> 
           <div class="col-xs-6 col-md-3"><label for="email">Quận Huyên:</label>
                   <select class="form-control" name="districts"id="quanhuyen" placeholder="Quận Huyên" required="" type="select"> 
   
                 </select>
           </div> 
           <div class="col-xs-6 col-md-3"><label for="email">Phường Xã:</label> 
                    <select class="form-control" name="wards" id="phuong"placeholder="phuongxa" required="" type="select"> 
 
                    </select> 
           </div>
          <div class="col-xs-6 col-md-3"><label for="email">Địa Điểm:</label>
                    <select class="form-control" name="from_id"id="diadiem" placeholder="Điểm Đi" required="" type="select"> 
   
                   </select>
         </div> 
    </div>


<br>
<br>
<br>
 <p =align="left"><B> Điểm Đến (*)</B></p>
  <input class="form-control" name="DiaChiCuThe" placeholder="Chọn thành phố, quận huyện ,phường" /><br>
 <br>
 <div class="form-group form-group-sm"> 
                    
         <div class="col-xs-6 col-md-3"><label for="email">Thành Phố:</label>  
               <select class="form-control" name="cities"id="thanhpho" placeholder="Thành Phố" type="select"> 

               </select>
         </div> 
         <div class="col-xs-6 col-md-3"><label for="email">Quận Huyên:</label>
               <select class="form-control" name="districts"id="quanhuyen" placeholder="Quận Huyên" required="" type="select"> 
   
               </select>
         </div> 
          <div class="col-xs-6 col-md-3"><label for="email">Phường Xã:</label> 
                <select class="form-control" name="wards" id="phuong"placeholder="phuongxa" required="" type="select"> 
 
              </select> 
          </div>
          <div class="col-xs-6 col-md-3"><label for="email">Địa Điểm:</label>
               <select class="form-control" name="to_id"id="quanhuyen" placeholder="Quận Huyên" required="" type="select"> 
   
               </select>
          </div> 
    </div>

<br>
<br>
<br>

                            
                            <div class="form-group form-group-sm">
                                <p =align="left"><B>Tiêu Đề (*)</B></p>
                                <input class="form-control" name="TieuDe" placeholder="Nhập Tiêu Đề" />
                            </div>
                            
                                                      
                            <div class="form-group form-group-sm">
                                 <p =align="left"><B> Thời Gian Đi (*)</B></p>                                <input type="date"class="form-control" name="ThoiGianDi" placeholder="nhập thời gian đi" />
                            </div>
                              <div class="form-group form-group-sm">
                            <p =align="left"><B> Thời Gian Đến (*)</B></p>
                                <input type="date"class="form-control" name="ThoiGianDen" placeholder="nhập thời gian đến" />
                            </div>
                              <div class="form-group form-group-sm">
                                <p =align="left"><B> Số Chỗ (*)</B></p> 
                                <input class="form-control" name="SoCho" placeholder="nhập số chỗ trống" />
                            </div>
                              <div class="form-group form-group-sm">
                           <p =align="left"><B> Giá Tiền (*)</B></p>
                                <input class="form-control" name="GiaTien" placeholder="nhập giá tiền" />
                            </div>
                            
                            <!-- <div class="form-group form-group-sm">
                                <label>Thông báo:</label>
                                <input class="form-control" name="thongbao" placeholder="Nhập tiêu tên thông báo" />
                            </div>  -->
                                
                             <a class="btn btn-sm btn-info " href="{{ URL::to('') }}"> <i class="glyphicon glyphicon-circle-arrow-left"></i> Quay lại</a>
                            <button type="reset" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-refresh"></i>Làm mới</button>
                            <button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-floppy-save"></span>Thêm </button>
                        <form>
  <div id="bg_footer" style="width: 500px; margin-left: 105px; background: #2267a2">
        <div class="container">
            <div class="row">
                <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="footer">
                    <p>Bản quyền thuộc team_tttt@vnpt.com</p>              
                </div>
            </div>
        </div>
  </div>
  </body>
</html>































