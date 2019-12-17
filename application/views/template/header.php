
<!doctype html>
<html class="no-js" lang="en">
<?php
  include "connect.php";
     error_reporting(0);
    session_start();
  if ($_SESSION["USUSID"] == "") {
    header("location:./index.php");
  }

  $USID_trim = trim($_SESSION["USUSID"]);


  $STRQTY = "select  *   from [StockPrice].[dbo].[Username]  where [UserN]  ='".$_SESSION["USUSID"]."'  ";
$login_result = odbc_fetch_array(odbc_exec($con, $STRQTY));
$email = trim($login_result["email"]);
$Company = trim($login_result["Company"]);
$NameF = trim($login_result["NameF"]);

 

   ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>User Master Registration Data Entry</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- x-editor CSS
		============================================ -->
    <link rel="stylesheet" href="css/editor/select2.css">
    <link rel="stylesheet" href="css/editor/datetimepicker.css">
    <link rel="stylesheet" href="css/editor/bootstrap-editable.css">
    <link rel="stylesheet" href="css/editor/x-editor-style.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->
  <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index_mail.php"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                <strong><a href="index_mail.php"><img src="img/logo/logo.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li>
                            <a class="has-arrow" href="index_mail.php">
                                   <span class="educate-icon educate-home icon-wrap"></span>
                                   <span class="mini-click-non">Home</span>
                                </a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Dashboard v.1" href="index_mail.php"><span class="mini-sub-pro">User Master Registration Data Entry</span></a></li>
                                
                            </ul>
                        </li>
                         
                            <?php   if ($_SESSION["USUSID"] == "SJ") { 

                       echo "   <li>
                            <a class='has-arrow' href='index_edit_admin.php' aria-expanded='false'><span class='educate-icon educate-event icon-wrap sub-icon-mg'></span> <span class='mini-click-non'>Edit</span></a>
                            <ul class='submenu-angle' aria-expanded='false'>
                                <li><a title='All Professors' href='index_edit_admin.php'><span class='mini-sub-pro'>Edit UMR</span></a></li>
                                
                            </ul>
                        </li>
                         <li>
                            <a class='has-arrow' href='index_report.php' aria-expanded='false'><span class='educate-icon educate-event icon-wrap sub-icon-mg'></span> <span class='mini-click-non'>Report</span></a>
                             
                        </li>";

                     }
                ?>


                       
                         
                       
                        
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index_mail.php"><img class="main-logo" src="img/logo/logo.png" alt=""  width="120" height="20" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="educate-icon educate-nav"></i>
												</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="index_mail.php" class="nav-link">Home</a>
                                                </li>
                                                  <?php   if ($_SESSION["USUSID"] == "SJ") { 

                       echo "   
                            <li class='nav-item'><a href='index_edit_admin.php' class='nav-link'>Edit</a>
                                                </li>
                        ";

                     }
                ?>
                                                 
                                               
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                
                                                
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
															<img src="img/product/pro4.jpg" alt="" />
															<span class="admin-name">Welcome : <?php  echo $NameF ?></span>
															<i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
														</a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                       
                                                        <li><a href="logout.php"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                

                                                    <li class="nav-item dropdown">
                                                    <a href="./logout.php" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">  <i class="educate-icon educate-pages icon-wrap" aria-hidden="true"></i> </a>

                                                         <a href="logout.php"  ><span class="admin-name">Logout</span></a>
                                                    
                                                </li>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="index_mail.php">Home <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            
                                        </li>
                                        

                            <?php   if ($_SESSION["USUSID"] == "SJ") { 

                       echo "   <li>
                            <a class='has-arrow' href='index_edit_admin.php' aria-expanded='false'><span class='educate-icon educate-event icon-wrap sub-icon-mg'></span> <span class='mini-click-non'>Edit</span></a>
                            <ul class='submenu-angle' aria-expanded='false'>
                                <li><a title='All Professors' href='index_edit_admin.php'><span class='mini-sub-pro'>Edit UMR</span></a></li>
                                
                            </ul>
                        </li>
                         <li>
                            <a class='has-arrow' href='index_report.php' aria-expanded='false'><span class='educate-icon educate-event icon-wrap sub-icon-mg'></span> <span class='mini-click-non'>Report</span></a>
                             
                        </li>";

                     }
                ?>

                                        
                                               
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




<style type="text/css">
	
	.hide{
  display:none;  
	}


</style>