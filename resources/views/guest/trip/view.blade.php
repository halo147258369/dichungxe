<!doctype html>
<html lang="en">
    <head>
        <title>Car Detail Left Sidebar</title>
          <base href="{{asset('')}}">
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="icon" href="images/favicon.png" type="image/x-icon">
        
        <!-- Google Fonts -->	
        <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
        
        <!-- Bootstrap Stylesheet -->	
        <link rel="stylesheet" href="source/css/bootstrap.min.css">
        
        <!-- Font Awesome Stylesheet -->
        <link rel="stylesheet" href="source/css/font-awesome.min.css">
            
        <!-- Custom Stylesheets -->	
        <link rel="stylesheet" href="source/css/style.css">
        <link rel="stylesheet" id="cpswitch" href="source/css/orange.css">
        <link rel="stylesheet" href="source/css/responsive.css">
        
        <!-- Date-Picker Stylesheet -->
        <link rel="stylesheet" href="source/css/datepicker.css">
        
        <!-- Slick Stylesheet -->
		<link rel="stylesheet" href="source/css/slick.css">
        <link rel="stylesheet" href="source/css/slick-theme.css">
    </head>
    
    
    <body>
    
        <!--====== LOADER =====-->
        <div class="loader"></div>
    
    
    	<!--======== SEARCH-OVERLAY =========-->       
        <div class="overlay">
            <a href="javascript:void(0)" id="close-button" class="closebtn">&times;</a>
            <div class="overlay-content">
                <div class="form-center">
                    <form>
                    	<div class="form-group">
                        	<div class="input-group">
                        		<input type="text" class="form-control" placeholder="Search..." required />
                            	<span class="input-group-btn"><button type="submit" class="btn"><span><i class="fa fa-search"></i></span></button></span>
                            </div><!-- end input-group -->
                        </div><!-- end form-group -->
                    </form>
                </div><!-- end form-center -->
            </div><!-- end overlay-content -->
        </div><!-- end overlay -->
        
        
        <!--============= TOP-BAR ===========-->
         <div id="top-bar" class="tb-text-white">
            <div class="container">
                <div class="row">          
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div id="info">
                            <ul class="list-unstyled list-inline">
                                <li><span><i class="fa fa-map-marker"></i></span>3/2 Ninh Kiều , Cần Thơ City</li>
                                <li><span><i class="fa fa-phone"></i></span>+0373765400</li>
                            </ul>
                        </div><!-- end info -->
                    </div><!-- end columns -->
                    
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div id="links">
                            <ul class="list-unstyled list-inline">
                                <li><a href="login"><span><i class="fa fa-lock"></i></span></a></li>
                                <li><a href="dk"><span><i class="fa fa-plus"></i></span>Đăng Ký</a></li>
                                <li>
                                    <form>
                                        <ul class="list-inline">
                                            <li>
                                                <div class="form-group currency">
                     <span><i class="fa fa-angle-down"></i></span>
                       <select class="form-control">
                            <option value="">$</option>
                                <option value="">£</option>
                                                    </select>
                                                </div><!-- end form-group -->
                                            </li>
                                            
                                            <li>
                                                <div class="form-group language">
                                                    <span><i class="fa fa-angle-down"></i></span>
                                                    <select class="form-control">
                                                        <option value="">EN</option>
                                                        <option value="">UR</option>
                                                        <option value="">FR</option>
                                                        <option value="">IT</option>
                                                    </select>
                                                </div><!-- end form-group -->
                                            </li>
                                        </ul>
                                    </form>
                                </li>
                            </ul>
                        </div><!-- end links -->
                    </div><!-- end columns -->              
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end top-bar -->

        <nav class="navbar navbar-default main-navbar navbar-custom navbar-white" id="mynavbar-1">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" id="menu-button">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>                        
                    </button>
                    <div class="header-search hidden-lg">
                        <a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a>
                    </div>
                    <a href="#" class="navbar-brand"><span><i class="fa fa-car"></i>Di</span>nhoxe</a>
                </div><!-- end navbar-header -->
                
                <div class="collapse navbar-collapse" id="myNavbar1">
                    <ul class="nav navbar-nav navbar-right navbar-search-link">
                        <li class="dropdown active"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Huong Dan<span><i class="fa fa-angle-down"></i></span></a>
                            <ul class="dropdown-menu">
                                <li class="active"><a href="#">Main Homepage</a></li>
                            </ul>           
                        </li>
                       
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">XE<span><i class="fa fa-angle-down"></i></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="car-homepage.html">Car Homepage</a></li>
                                <li><a href="car-listing-left-sidebar.html">List View Left Sidebar</a></li>
                                <li><a href="car-listing-right-sidebar.html">List View Right Sidebar</a></li>
                                <li><a href="car-grid-left-sidebar.html">Grid View Left Sidebar</a></li>
                                <li><a href="car-grid-right-sidebar.html">Grid View Right Sidebar</a></li>
                                <li><a href="car-detail-left-sidebar.html">Detail Left Sidebar</a></li>
                                <li><a href="car-detail-right-sidebar.html">Detail Right Sidebar</a></li>
                            </ul>           
                        </li>
                        <li><a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a></li>
                    </ul>
                </div><!-- end navbar collapse -->
            </div><!-- end container -->
        </nav><!-- end navbar -->        
        <div class="sidenav-content">
            <div id="mySidenav" class="sidenav" >
                <h2 id="web-name"><span><i class="fa fa-plane"></i></span>Star Travel</h2>

                <div id="main-menu">
                	<div class="closebtn">
                        <button class="btn btn-default" id="closebtn">&times;</button>
                    </div><!-- end close-btn -->
                    
                    <div class="list-group panel">
                    
                        <a href="#home-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-home link-icon"></i></span>Home<span><i class="fa fa-chevron-down arrow"></i></span></a>
                        <div class="collapse sub-menu" id="home-links">
                            <a href="index.html" class="list-group-item">Main Homepage</a>
                            <a href="flight-homepage.html" class="list-group-item">Flight Homepage</a>
                            <a href="hotel-homepage.html" class="list-group-item">Hotel Homepage</a>
                            <a href="tour-homepage.html" class="list-group-item">Tour Homepage</a>
                            <a href="cruise-homepage.html" class="list-group-item">Cruise Homepage</a>
                            <a href="car-homepage.html" class="list-group-item">Car Homepage</a>
                            <a href="landing-page.html" class="list-group-item">Landing Page</a>
                        </div><!-- end sub-menu -->
                        
                        <a href="#flights-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-plane link-icon"></i></span>Flights<span><i class="fa fa-chevron-down arrow"></i></span></a>
                        <div class="collapse sub-menu" id="flights-links">
                            <a href="flight-homepage.html" class="list-group-item">Flight Homepage</a>
                            <a href="flight-listing-left-sidebar.html" class="list-group-item">List View Left Sidebar</a>
                            <a href="flight-listing-right-sidebar.html" class="list-group-item">List View Right Sidebar</a>
                            <a href="flight-grid-left-sidebar.html" class="list-group-item">Grid View Left Sidebar</a>
                            <a href="flight-grid-right-sidebar.html" class="list-group-item">Grid View Right Sidebar</a>
                            <a href="flight-detail-left-sidebar.html" class="list-group-item">Detail Left Sidebar</a>
                            <a href="flight-detail-right-sidebar.html" class="list-group-item">Detail Right Sidebar</a>
                        </div><!-- end sub-menu -->
                        
                        <a href="#hotels-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-building link-icon"></i></span>Hotels<span><i class="fa fa-chevron-down arrow"></i></span></a>
                        <div class="collapse sub-menu" id="hotels-links">
                            <a href="hotel-homepage.html" class="list-group-item">Hotel Homepage</a>
                            <a href="hotel-listing-left-sidebar.html" class="list-group-item">List View Left Sidebar</a>
                            <a href="hotel-listing-right-sidebar.html" class="list-group-item">List View Right Sidebar</a>
                            <a href="hotel-grid-left-sidebar.html" class="list-group-item">Grid View Left Sidebar</a>
                            <a href="hotel-grid-right-sidebar.html" class="list-group-item">Grid View Right Sidebar</a>
                            <a href="hotel-detail-left-sidebar.html" class="list-group-item">Detail Left Sidebar</a>
                            <a href="hotel-detail-right-sidebar.html" class="list-group-item">Detail Right Sidebar</a>
                        </div><!-- end sub-menu -->
                        
                        <a href="#tours-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-globe link-icon"></i></span>Tours<span><i class="fa fa-chevron-down arrow"></i></span></a>
                        <div class="collapse sub-menu" id="tours-links">
                            <a href="tour-homepage.html" class="list-group-item">Tour Homepage</a>
                            <a href="tour-listing-left-sidebar.html" class="list-group-item">List View Left Sidebar</a>
                            <a href="tour-listing-right-sidebar.html" class="list-group-item">List View Right Sidebar</a>
                            <a href="tour-grid-left-sidebar.html" class="list-group-item">Grid View Left Sidebar</a>
                            <a href="tour-grid-right-sidebar.html" class="list-group-item">Grid View Right Sidebar</a>
                            <a href="tour-detail-left-sidebar.html" class="list-group-item">Detail Left Sidebar</a>
                            <a href="tour-detail-right-sidebar.html" class="list-group-item">Detail Right Sidebar</a>
                        </div><!-- end sub-menu -->
                        
                        <a href="#cruise-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-ship link-icon"></i></span>Cruise<span><i class="fa fa-chevron-down arrow"></i></span></a>
                        <div class="collapse sub-menu" id="cruise-links">
                            <a href="cruise-homepage.html" class="list-group-item">Cruise Homepage</a>
                            <a href="cruise-listing-left-sidebar.html" class="list-group-item">List View Left Sidebar</a>
                            <a href="cruise-listing-right-sidebar.html" class="list-group-item">List View Right Sidebar</a>
                            <a href="cruise-grid-left-sidebar.html" class="list-group-item">Grid View Left Sidebar</a>
                            <a href="cruise-grid-right-sidebar.html" class="list-group-item">Grid View Right Sidebar</a>
                            <a href="cruise-detail-left-sidebar.html" class="list-group-item">Detail Left Sidebar</a>
                            <a href="cruise-detail-right-sidebar.html" class="list-group-item">Detail Right Sidebar</a>
                        </div><!-- end sub-menu -->
                        
                        <a href="#cars-links" class="list-group-item active" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-car link-icon"></i></span>Cars<span><i class="fa fa-chevron-down arrow"></i></span></a>
                        <div class="collapse sub-menu" id="cars-links">
                            <a href="car-homepage.html" class="list-group-item">Car Homepage</a>
                            <a href="car-listing-left-sidebar.html" class="list-group-item">List View Left Sidebar</a>
                            <a href="car-listing-right-sidebar.html" class="list-group-item">List View Right Sidebar</a>
                            <a href="car-grid-left-sidebar.html" class="list-group-item">Grid View Left Sidebar</a>
                            <a href="car-grid-right-sidebar.html" class="list-group-item">Grid View Right Sidebar</a>
                            <a href="#" class="list-group-item active">Detail Left Sidebar</a>
                            <a href="car-detail-right-sidebar.html" class="list-group-item">Detail Right Sidebar</a>
                        </div><!-- end sub-menu -->
                        
                        <a href="#pages-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-clone link-icon"></i></span>Pages<span><i class="fa fa-chevron-down arrow"></i></span></a>
                        <div class="collapse sub-menu" id="pages-links">
                        	<div class="list-group-heading list-group-item">Standard <span>Pages</span></div>
                            <a href="about-us.html"  class="list-group-item">About Us</a>
                            <a href="contact-us.html"  class="list-group-item">Contact Us</a>
                            <a href="blog-listing-left-sidebar.html"  class="list-group-item">Blog Listing Left Sidebar</a>
                            <a href="blog-listing-right-sidebar.html"  class="list-group-item">Blog Listing Right Sidebar</a>
                            <a href="blog-detail-left-sidebar.html"  class="list-group-item">Blog Detail Left Sidebar</a>
                            <a href="blog-detail-right-sidebar.html"  class="list-group-item">Blog Detail Right Sidebar</a>
                            <div class="list-group-heading list-group-item">User <span>Dashboard</span></div>
                            <a href="dashboard.html"  class="list-group-item">Dashboard</a>
                            <a href="user-profile.html"  class="list-group-item">User Profile</a>
                            <a href="booking.html"  class="list-group-item">Booking</a>
                            <a href="wishlist.html"  class="list-group-item">Wishlist</a>
                            <a href="cards.html"  class="list-group-item">Cards</a>
                            <div class="list-group-heading list-group-item">Special <span>Pages</span></div>
                            <a href="login.html"  class="list-group-item">Login</a>
                            <a href="registration.html"  class="list-group-item">Registration</a>
                            <a href="forgot-password.html"  class="list-group-item">Forgot Password</a>
                            <a href="error-page.html"  class="list-group-item">404 Page</a>
                            <a href="coming-soon.html"  class="list-group-item">Coming Soon</a>
                            <div class="list-group-heading list-group-item">Extra <span>Pages</span></div>
                            <a href="before-you-fly.html" class="list-group-item">Before Fly</a>
                            <a href="travel-insurance.html" class="list-group-item">Travel Insurance</a>
                            <a href="holidays.html" class="list-group-item">Holidays</a>
                            <a href="thank-you.html" class="list-group-item">Thank You</a>
                        </div><!-- end sub-menu -->
                    </div><!-- end list-group -->
                </div><!-- end main-menu -->
            </div><!-- end mySidenav -->
        </div><!-- end sidenav-content -->
        
        
        <!--============= PAGE-COVER =============-->
        <section class="page-cover" id="cover-car-detail">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    	<h1 class="page-title">Đi cùng nhau giảm chi phí</h1>
                        <ul class="breadcrumb">
                            <li><a href="#">Dinhoxe</a></li>
                            <li class="active">Và lại bảo vệ môi trường</li>
                        </ul>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->
        
        
        <!--==== INNERPAGE-WRAPPER =====-->
        <section class="innerpage-wrapper">
        	<div id="car-details" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">        	
                        
                        <div class="col-xs-12 col-sm-12 col-md-3 side-bar left-side-bar">
                            
                            <div class="side-bar-block booking-form-block">
                            	<h2 class="selected-price">ĐẶT XE</h2>
                            
                            	<div class="booking-form">
                                    
                                    Bạn đã đăng nhập với tên {{ Auth::guard('member')->user()->name }}
                                    <form action="{{route('member.booking.add.post')}}" method="POST" enctype="multipart/form-data" id="myform">
                                        <input type="hidden" name="trip_id" value="{{$trip->id}}" />
                                        <input type="hidden" name="member_id" value="{{Auth::guard('member')->user()->id}}" />
                                        <input type="hidden" name="_token" value="{{csrf_token()}}" />
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="seat" placeholder="Số chỗ" >
                                        </div>

                                        <button class="btn btn-block btn-orange">Đặt xe</button>
                                    </form>

                                </div><!-- end booking-form -->
                            </div><!-- end side-bar-block -->
                           
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-12">
                                    <div class="side-bar-block main-block ad-block">
                                        <div class="main-img ad-img">
                                            <a href="#">
                                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQBsU64_t8rWD4zsD9tAjIkEuNtSu-R9KkD8nc_HLd6R2_NwqJt&s" class="img-responsive" alt="car-ad" />
                                                <div class="">
                                                    <div class="ad-text">
                                                  <!--       <span>chia sẻ</span> -->
                                                        <h4></h4>
                                                        <span></span>
                                                    </div><!-- end ad-text -->
                                                </div><!-- end columns -->
                                            </a>
                                        </div><!-- end ad-img -->
                                    </div><!-- end side-bar-block -->
                                </div><!-- end columns -->
                                
                                <div class="col-xs-12 col-sm-6 col-md-12">    
                                    <div class="side-bar-block support-block">
                                        <h3>Số điên Thoại chủ xe </h3>
                                        <p></p>
                                        <div class="support-contact">
                                            <span><i class="fa fa-phone"></i></span>      
                                             <p>  {{$trip->phone}}  </p>
                                             
                                            
                                        </div><!-- end support-contact -->
                                    </div><!-- end side-bar-block -->
                                </div><!-- end columns -->
                                
                            </div><!-- end row -->

                        </div><!-- end columns --> 
                       
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side">
                            <div class="detail-slider">
                                <div class="feature-slider">
                                    <div><img src="source/images/car-feature-1.jpg" class="img-responsive" alt="feature-img"/></div>
                                    <div><img src="source/images/car-feature-2.jpg" class="img-responsive" alt="feature-img"/></div>
                                    <div><img src="source/images/car-feature-3.jpg" class="img-responsive" alt="feature-img"/></div>
                                    <div><img src="source/images/car-feature-4.jpg" class="img-responsive" alt="feature-img"/></div>
                                    <div><img src="source/images/car-feature-5.jpg" class="img-responsive" alt="feature-img"/></div>
                                </div><!-- end feature-slider -->
                            	
                                <!-- div class="feature-slider-nav">
                                    <div><img src="source/images/car-feature-thumb-1.jpg" class="img-responsive" alt="feature-thumb"/></div>
                                    <div><img src="source/images/car-feature-thumb-2.jpg" class="img-responsive" alt="feature-thumb"/></div>
                                    <div><img src="source/images/car-feature-thumb-3.jpg" class="img-responsive" alt="feature-thumb"/></div>
                                    <div><img src="source/images/car-feature-thumb-4.jpg" class="img-responsive" alt="feature-thumb"/></div>
                                    <div><img src="source/images/car-feature-thumb-5.jpg" class="img-responsive" alt="feature-thumb"/></div>
                                </div> --><!-- end feature-slider-nav -->
                                
                                <ul class="list-unstyled features tour-features">
                                	<li><div class="f-icon"><i class="fa fa-wheelchair"></i></div><div class="f-text"><p class="f-heading">chỗ</p><p class="f-data"></p></div></li>
                                    <!-- <li><div class="f-icon"><i class="fa fa-calendar"></i></div><div class="f-text"><p class="f-heading">Duration</p><p class="f-data">1 ngày </p></div></li> -->
                                    <li><div class="f-icon"><i class="fa fa-clock-o"></i></div><div class="f-text"><p class="f-heading">chi phí tiết kiệm</p><p class="f-data">50% </p></div></li>
                                </ul>

                            </div><!-- end detail-slider -->  
                            <div class="detail-tabs">
                            	<ul class="nav nav-tabs nav-justified">
                                    <li class="active"><a href="#car-information" data-toggle="tab">Thông tin về xe</a></li>
                                </ul>
                            	
                                <div class="tab-content">

                                    <div id="car-information" class="tab-pane in active">
                                    	<div class="row">
                                    		<div class="col-sm-4 col-md-4 tab-img">
                                        		<img src="source/images/car-detail-tab-1.jpg" class="img-responsive" alt="flight-detail-img" />
                                            </div><!-- end columns -->
                                        	
                                            <div class="col-sm-8 col-md-8 tab-text">
                                                
                                        		<h3>Thông Tin xe</h3>
                                           
                                                <p>{{$trip->seat}} :ghế </p>
                                            
                                                @foreach($vehicle as $v)
                                                @if($v->id == $trip->vehicle_id)
                                             <p>  {{$v->description}}  </p>
                                             @endif
                                             @endforeach
                                         
                              
                                            </div><!-- end columns -->
                                     
                                        </div><!-- end row -->
                                    </div><!-- end car-information -->
                                	
                                    <div id="cr-features" class="tab-pane">
                                    	<div class="row">
                                    		<div class="col-sm-4 col-md-4 tab-img">
                                        		<img src="source/images/car-detail-tab-2.jpg" class="img-responsive" alt="flight-detail-img" />
                                            </div><!-- end columns -->
                                        	
                                            <div class="col-sm-8 col-md-8 tab-text">
                                        		<h3>Features</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.<br/> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                            </div><!-- end columns -->
                                        </div><!-- end row -->
                                    </div><!-- end cr-features -->
                                    
                                    <div id="rental-info" class="tab-pane">
                                    	<div class="row">
                                    		<div class="col-sm-4 col-md-4 tab-img">
                                        		<img src="source/images/car-detail-tab-3.jpg" class="img-responsive" alt="flight-detail-img" />
                                            </div><!-- end columns -->
                                        	
                                            <div class="col-sm-8 col-md-8 tab-text">
                                        		<h3>Rental Info</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                                            </div><!-- end columns -->
                                        </div><!-- end row -->
                                    </div><!-- end rental-info -->

                                </div><!-- end tab-content -->



                                 <div class="tab-content">

                                    <div id="car-information" class="tab-pane in active">
                                        <div class="row">
                                            <div class="col-sm-4 col-md-4 tab-img">
                                                <img src="https://cdn.pixabay.com/photo/2012/04/15/20/12/happy-35164_960_720.png" />
                                            </div><!-- end columns -->
                                            
                                            <div class="col-sm-8 col-md-8 tab-text">
                                                <h3>Các lời nhận xét từ các chuyến xe trước </h3>
                                          @foreach($rate as $r)
                                                @if($r->member_id == $trip->id)
                                                     <p>{{$r->content}}</p>
                                               @endif
                                          @endforeach                       
             
                                               
                                    
                                            </div><!-- end columns -->
                                     
                                        </div><!-- end row -->
                                    </div><!-- end car-information -->
                                    
                                    
                                    
                                    
                                           
                            
        
        
        <!--======================= FOOTER =======================-->
        
        
        
        <!-- Page Scripts Starts -->
        <script src="source/js/jquery.min.js"></script>
        <script src="source/js/bootstrap.min.js"></script>
        <script src="source/js/bootstrap-datepicker.js"></script>
        <script src="source/js/slick.min.js"></script>
        <script src="source/js/custom-navigation.js"></script>
        <script src="source/js/custom-date-picker.js"></script>
        <script src="source/js/custom-slick.js"></script>
        <!-- Page Scripts Ends -->
    </body>
</html>
