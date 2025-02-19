<?php 
require_once("../../db/dbhepler.php");
        
        
 ?>
<!DOCTYPE html>

<head>
    <title>list_subject</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="../../public/css/bootstrap.min.css">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="../../public/css/style.css" rel='stylesheet' type='text/css' />
    <link href="../../public/css/style-responsive.css" rel="stylesheet" />
    <!-- font CSS -->
    <link
        href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="../../public/css/font.css" type="text/css" />
    <link href="../../public/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="../../public/css/morris.css" type="text/css" />
    <!-- calendar -->
    <link rel="stylesheet" href="../../public/css/monthly.css">
    <!-- //calendar -->
    <!-- //font-awesome icons -->
    <script src="../../public/js/jquery2.0.3.min.js"></script>
    <script src="../../public/js/raphael-min.js"></script>
    <script src="../../public/js/morris.js"></script>
</head>

<body>
    <section id="container">
        <!--header start-->
        <header class="header fixed-top clearfix">
            <!--logo start-->
            <div class="brand">
                <a href="index.html" class="logo">
                    tNt Coder
                </a>
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars"></div>
                </div>
            </div>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">


                    <!-- notification dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-nav clearfix">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <li>
                        <input type="text" class="form-control search" placeholder=" Search">
                    </li>
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="images/2.png">
                            <span class="username">Nguyễn Trọng Nghĩa</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                            <li><a href="login.html"><i class="fa fa-key"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->

                </ul>
                <!--search & user info end-->
            </div>
        </header>
        <!--header end-->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse">
                <!-- sidebar menu start-->
                <div class="leftside-navigation">
                    <ul class="sidebar-menu" id="nav-accordion">
                        <li>
                            <a class="active" href="index.php">
                                <i class="fa fa-dashboard"></i>
                                <span>Bảng Điều Kiển</span>
                            </a>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span>Môn Học</span>
                            </a>
                            <ul class="sub">
                                <li><a href="list_subject.php">Danh sách Môn Học </a></li>
                                <li><a href="add_subject.php">Thêm Môn Học Mới </a></li>
                                <li><a href="grids.html">Tài Liệu</a></li>
                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-th"></i>
                                <span>Quản Lý Sinh Viên</span>
                            </a>
                            <ul class="sub">
                                <li><a href="basic_table.html">Danh sách Sinh Viên</a></li>
                                <li><a href="responsive_table.html">Responsive Table</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-tasks"></i>
                                <span>Form Components</span>
                            </a>
                            <ul class="sub">
                                <li><a href="form_component.html">Form Elements</a></li>
                                <li><a href="form_validation.html">Form Validation</a></li>
                                <li><a href="dropzone.html">Dropzone</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-envelope"></i>
                                <span>Mail </span>
                            </a>
                            <ul class="sub">
                                <li><a href="mail.html">Inbox</a></li>
                                <li><a href="mail_compose.html">Compose Mail</a></li>
                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class=" fa fa-bar-chart-o"></i>
                                <span>Maps</span>
                            </a>
                            <ul class="sub">
                                <li><a href="google_map.html">Google Map</a></li>
                                <li><a href="vector_map.html">Vector Map</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="login.html">
                                <i class="fa fa-user"></i>
                                <span>Login Page</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                <div class="table-agile-info">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List Project
                        </div>
                        <div>
                            <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
                                <thead>
                                    <tr>
                                        <th data-breakpoints="xs">STT</th>
                                        <th>Tên Môn Học</th>
                                        <th>Ngày Khởi tạo</th>
                                        

                                   
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php 
                                 $sql="SELECT * FROM subject";
                                $rs= mysqli_query($con,$sql);
                                $index=1;
                                while ($row=mysqli_fetch_array($rs)) { ?>
                                    <tr>
                                        <td><?php echo $index++ ?></td>
                                        <td><?php echo $row['subject_name'];?></td>
                                        <td><?php echo $row['created_at'];?></td>
                                      <th data-breakpoints="xs"><a href="delete.php?id=<?php echo $row['id'];?>"><i class="fa fa-trash-o"></i></a>
                                       <a href="add_subject.php?id=<?php echo $row['id'];?>"><i class="fa fa-pencil-square-o"></i></a>
                                      <a href=""><i class="fa fa-info-circle"></i></a>
                                    </th>  
                                       
                                    </tr>
                                    <?php } ?>
         
         



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <!-- footer -->
            <div class="footer">
                <div class="wthree-copyright">
                    <p> Master NTN | Design by <a href="https://www.facebook.com/profile.php?id=100019319836961">NTN</a>
                    </p>
                </div>
            </div>
            <!-- / footer -->
        </section>
        <!--main content end-->
    </section>
    <script src="../../public/js/bootstrap.js"></script>
    <script src="../../public/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../../public/js/scripts.js"></script>
    <script src="../../public/js/jquery.slimscroll.js"></script>
    <script src="../../public/js/jquery.nicescroll.js"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
    <script src="../../public/js/jquery.scrollTo.js"></script>
  
</body>

</html>