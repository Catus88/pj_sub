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
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <form role="search" class="sr-input-func">
                                                <input type="text" placeholder="Search..." class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="index_mail.php">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">User Master Registration Data Entry</span>
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
        <!-- Static Table Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>User Master Registration Data Entry</h1>
                                </div>
                            </div>



                            <form method="post" >

                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">

                                          
                                    
                                    <div id="toolbar"> 
                                       
                                    </div>
                                         <div id="toolbar">
                                              

                                             
                                           <!------    <button class='btn btn-primary btn-sm' formaction="http://mail.smcthai.co.th:8082/pj_mail/M_UMR/web/index_add.php" >Create</button>     ----->

 
                                                  

                                              <!------   <button class='btn btn-success btn-sm' formaction="  http://mail.smcthai.co.th:8082/PJ_MAIL/M_UMR/web/update_submit.php  " >submit</button>
                                ----->
                                                  

                                           

                                           <!------ example ----->
                <button class='btn btn-warning btn-sm' formaction="./index_edit_ad.php" >Edit</button> 
                <button class='btn btn-danger btn-sm' formaction="./Cancle_admin.php" >Cancle</button> 
                                           <!------ example ----->




                                          <!------ example ----->    <!------ 
               <button class='btn btn-danger btn-sm' formaction="./cancle.php" >Cancle</button> ----->

                                           <!------ example ----->
                                               
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true"     data-key-events="true"   data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId"  data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="state" > </th>
                                               
                                                <th data-field="id">No</th>
                                                <th data-field="name" data-editable="false">UMR No.</th>
                                                <th data-field="email" data-editable="false">Date</th>
                                                <th data-field="phone" data-editable="false">SMC A/C</th>
                                                <th data-field="complete">Distributor Code</th>
                                                <th data-field="complete1">Distributor End User Code</th>
                                                <th data-field="task" data-editable="false">User Name</th>
                                                  <th data-field="status"  >Status</th>
                                                 
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        

   <?php


$STRQTY = "select  *   from [StockPrice].[dbo].[Username]  where [UserN]  ='".$_SESSION["USUSID"]."'  ";
$login_result = odbc_fetch_array(odbc_exec($con, $STRQTY));
$Company = trim($login_result["Company"]);
$User_name = trim($login_result["UserN"]);

                $count = 0;

       

 
  
$querystr_SOPCA = odbc_exec($conn,"select CARFNO,CARFDT,CACUSN,CAECNM,CASTAT,CADSTC,CAURID,CAARSM,CASLMG,CAAUAP   from smcdta.CUSTREFJ1 where   CACOCD = '02' and CABRCD = ''     order by CARFNO desc      ");
 #$querystr_SOPCA = odbc_exec($conn,"select * from smcdta.SOPCA where   CACOCD = '02' and  CADSTC = '".$USID_trim."'   ");
           while ($result_approve = odbc_fetch_array($querystr_SOPCA)) {

            $CARFNO  = iconv("windows-874", "utf-8", $result_approve["CARFNO"]);
            $CARFDT = iconv("windows-874", "utf-8", $result_approve["CARFDT"]);
            $CACUSN = iconv("windows-874", "utf-8", $result_approve["CACUSN"]);
            $CAECNM  = iconv("windows-874", "utf-8", $result_approve["CAECNM"]);
            $CASTAT = iconv("windows-874", "utf-8", $result_approve["CASTAT"]);
            $CADSTC = iconv("windows-874", "utf-8", $result_approve["CADSTC"]);
            $CAURID = iconv("windows-874", "utf-8", $result_approve["CAURID"]);
            $CASLMG = iconv("windows-874", "utf-8", $result_approve["CASLMG"]);
            $CAAUAP = iconv("windows-874", "utf-8", $result_approve["CAAUAP"]);
            $CAARSM = iconv("windows-874", "utf-8", $result_approve["CAARSM"]);

             $CAURID_T = trim($CAURID);    
            $CARFNO_T = trim($CARFNO);
            $CACUSN_T = trim($CACUSN);
            $CADSTC_T = trim($CADSTC);
            $CASLMG_T = trim($CASLMG); 
            $CAAUAP_T = trim($CAAUAP);
            $CAARSM_T = trim($CAARSM);

     $querystr_sopcf = odbc_exec($conn,"select CFUSRC from smcdta.SOPCF where   CFRFNO =  '".$CARFNO."'  "); 
     while ($result_approve_o2 = odbc_fetch_array($querystr_sopcf)) {
$CFUSRC = iconv("windows-874", "utf-8", $result_approve_o2["CFUSRC"]);

 




            $test = 'null';
            $count++;
            $status =  "";


          #<a href ='./index_edit.php?DCNO=".$CARFNO_T."' >  <button class='btn btn-info btn-sm' >Edit  </button>  </a>
           #     <a href ='./cancle.php?DCNO=".$CARFNO_T."' >  <button class='btn btn-danger btn-sm' >Cancle </button> </a>
            #     <a href ='./display.php?DCNO=".$CARFNO_T."' >  <button class='btn btn-success btn-sm' >Display </button> </a>
  if ($result_approve) {
          
           $Message_b = "
               
               
                 <a href ='./display.php?DCNO=".$CARFNO_T."' >  <button class='btn btn-warning btn-sm' >  Summit </button> </a>

                <input name='CARFNO_T' type = 'text' hidden value = '".$CARFNO_T."' >  
                       
                       "; 
 

          $Message_M  =  "
                      
               <a href ='./display.php?DCNO=".$CARFNO_T."' > <button class='btn btn-gray btn-sm' >submit  </button>  &#10003   </a>
                
               <input name='CARFNO_T' type = 'text' hidden value = '".$CARFNO_T."' >
                       
                       ";   
         $Message_D  =  "
                       
                          <a href ='./display.php?DCNO=".$CARFNO_T."' > <button class='btn btn-gray btn-sm' >Delete  </button> </a>
                           ";  
                
         $Message_C  =  "
                         
                           <a href ='./display.php?DCNO=".$CARFNO_T."' > <button type='button' class='btn btn-success'> Complete  </button> 
                            </a>    "; 
                                             
          $Message_R  =  "
                            
                            <a href ='./display.php?DCNO=".$CARFNO_T."' > <button class='btn btn-gray btn-sm' > BM Approve   </button>  </a>   ";          
         $Message_U  =   "
                          
                            <a href ='./display.php?DCNO=".$CARFNO_T."' > <button class='btn btn-gray btn-sm' > Area  Approve   </button>    </a>
                            ";  

   $Message_bz = "
               
                  <button data-toggle='tooltip' title='Submit' class='btn btn-warning'><i class='fa fa-envelope-o' aria-hidden='true'></i></button>
                                            <button data-toggle='tooltip' title='Edit' class='btn btn-primary' formaction  ='./display.php?DCNO=".$CARFNO_T."'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></button>
                                            <button data-toggle='tooltip' title='Trash' class='btn btn-danger'  class='pd-setting-ed' formaction  ='./display.php?DCNO=".$CARFNO_T."'>
                                            <i class='fa fa-trash-o' aria-hidden='true'></i></button>
                <input name='CARFNO_T' type = 'text' hidden value = '".$CARFNO_T."' >
                <input name='CARFNO_T' type = 'text' hidden value = '".$CARFNO_T."' >  
                       
                       "; 
 

          $Message_Mz  =  "
                      

               
                 <button class='btn btn-gray btn-sm' formaction  ='./display.php?DCNO=".$CARFNO_T."' >  WAT  </button>       
               <input name='CARFNO_T' type = 'text' hidden value = '".$CARFNO_T."' >
                       
                       ";   
         $Message_Dz  =  "
                       
                          <button data-toggle='tooltip' title='Delete' class='btn btn-danger'  class='pd-setting-ed' formaction  ='./display.php?DCNO=".$CARFNO_T."'>
                                            <i class='fa fa-times' aria-hidden='true'></i></button>  
                           ";  
                
         $Message_Cz  =  "
                         
                            <button data-toggle='tooltip' title='Complete Submit' class='btn btn-success'  class='pd-setting-ed' formaction  ='./display.php?DCNO=".$CARFNO_T."'>
                                            <i class='fa fa-check' aria-hidden='true'></i></button>
                               "; 
                                             
          $Message_Rz  =  "
                            
                            <button class='btn btn-gray btn-sm' formaction  ='./display.php?DCNO=".$CARFNO_T."'>  BM
<span class='sr-only'>Loading...</span>   </button>        ";          
         $Message_Uz  =   "
                          
                              <button class='btn btn-gray btn-sm' formaction  ='./display.php?DCNO=".$CARFNO_T."' > ARM
<span class='sr-only'>Loading...</span>   </button>   
                            ";  
                                
   $Message_XUz  =   "
                          
                               <button class='btn btn-p btn-sm' formaction  ='./display.php?DCNO=".$CARFNO_T."' > <i class='fa fa-tag'></i>
<span class='sr-only'>Loading...</span>   </button>     
  <input name='CARFNO_T' type = 'text' hidden value = '".$CARFNO_T."' >
                            ";  



                              $Message_Mz1  =  "
                      
                  <button class='btn   btn-warning btn-sm'   formaction  ='./display.php?DCNO=".$CARFNO_T."' > Wait Approve </button>   
               
                
                       
                       ";   
         $Message_Dz1  =  "
                       
                         <button class='btn btn-danger btn-sm' formaction  ='./display.php?DCNO=".$CARFNO_T."'> Delete </button>   
                           ";  




            $Message_Dz2  =  "
                       
                         <button class='btn btn-danger btn-sm' formaction  ='./display.php?DCNO=".$CARFNO_T."'> Delete Branch Manager  </button>   
                           "; 

                $Message_Dz3  =  "
                       
                         <button class='btn btn-danger btn-sm' formaction  ='./display.php?DCNO=".$CARFNO_T."'> Delete Area  Manager </button>   
                           "; 

             $Message_Dz4  =  "
                       
                         <button class='btn btn-danger btn-sm' formaction  ='./display.php?DCNO=".$CARFNO_T."'>Disagree </button>   
                           "; 





                
         $Message_Cz1  =  "
                         
                              <button class='btn btn-success btn-primary btn-sm'   formaction  ='./display.php?DCNO=".$CARFNO_T."' > Approve Already </button>   
                               "; 
                                             
          $Message_Rz1  =  "
                            
                          <button class='btn btn-warning btn-warning btn-sm'   formaction  ='./display.php?DCNO=".$CARFNO_T."' > Branch manager Approve </button>        ";          
         $Message_Uz1  =   "
                            <button class='btn btn-warning btn-warning btn-sm'   formaction  ='./display.php?DCNO=".$CARFNO_T."' > Area manager Approve</button>    
                            ";  
                                
      $Message_XUz1  =   "
                          
                               <button class='btn btn-primary btn-info btn-sm'   formaction  ='./display.php?DCNO=".$CARFNO_T."' >  Wait Submit </button>  
                            ";  

      $Message_ZUz1  =   "
                          
                               <button class='btn btn-danger btn-info btn-sm'   formaction  ='./display.php?DCNO=".$CARFNO_T."' >  Cancle </button>  
                            ";  


                                 
        if ($CASTAT == ' ' ) {
                echo    "
                     <tr>
                    <td>  <input name='num'  id  = 'num' type='radio' value='".$CARFNO."'> <br> </td>
                      
                        <td><font color='DodgerBlue'>".$count."</font></td>
                           
                         <td > <a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='DodgerBlue'>  ".$CARFNO." </font> </div> </a></td>  
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='DodgerBlue'>".$CARFDT."</font></div></a></td>
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='DodgerBlue'>".$CACUSN."</font></div></a></td>
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='DodgerBlue'>".$CADSTC_T."</font></div></a></td>
                         
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='DodgerBlue'>".$CFUSRC."</font></div></a></td>
                           
                         <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='DodgerBlue'>".$CAECNM."</font></div></a></td> 
                          <td>".$Message_XUz1."</td>
                         </tr> ";
                  }
        if ($CASTAT == 'M') {
                echo    "
                     <tr>
                      <td>  <input name='num'  id  = 'num' type='radio' value='".$CARFNO."'> <br> </td>
                   
                      <td><font color='Orange'>".$count."</font></td>
                       
                         <td > <a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='Orange'>  ".$CARFNO." </font></div> </a></td>  
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='Orange'>".$CARFDT."</font></div></a></td>
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='Orange'>".$CACUSN."</font></div></a></td>
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='Orange'>".$CADSTC_T."</font></div></a></td>
                           
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='Orange'>".$CFUSRC."</font></div></a></td>
                         <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='Orange'>".$CAECNM."</font></div></a></td>
                         <td>".$Message_Mz1."</td>
                         </tr> ";
                    }
           if ($CASTAT == 'D' and $CAURID_T != ''  and $CAARSM_T != ''    and $CAURID_T != 'SJ') {
                      echo    "
                     <tr>
                          <td>  </td>
                      
                       <td><font color='red'>".$count."</font></td>
                         
                         <td >  <a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='red'>  ".$CARFNO."  </div> </a> </td>  
                        <td> <a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='red'> ".$CARFDT." </font></div></a></td>
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div> <font color='red'> ".$CACUSN."</font></div></a></td>
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='red'>  ".$CADSTC_T."</font></div></a></td>
                          
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='red'>  ".$CFUSRC."</font></div></a></td>
                          <td> <a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='red'>  ".$CAECNM." </font></div></a></td>
                        <td>".$Message_Dz4."</td>
                         </tr> ";
                        }

    if ($CASTAT == 'D' and $CAURID_T != ''  and $CAARSM_T == ''    and $CAURID_T != 'SJ') {
                      echo    "
                     <tr>
                          <td>    </td>
                      
                       <td><font color='red'>".$count."</font></td>
                         
                         <td >  <a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='red'>  ".$CARFNO."  </div> </a> </td>  
                        <td> <a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='red'> ".$CARFDT." </font></div></a></td>
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div> <font color='red'> ".$CACUSN."</font></div></a></td>
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='red'>  ".$CADSTC_T."</font></div></a></td>
                          
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='red'>  ".$CFUSRC."</font></div></a></td>
                          <td> <a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='red'>  ".$CAECNM." </font></div></a></td>
                        <td>".$Message_Dz1."</td>
                         </tr> ";
                        }

    

     

      if ($CASTAT == 'D' and $CAURID_T == 'SJ' ) {
                      echo    "
                    
                        <td>   </td>
                       <td><font color='red'>".$count."</font></td>
                         
                         <td >  <a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='red'>  ".$CARFNO."  </div> </a> </td>  
                        <td> <a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='red'> ".$CARFDT." </font></div></a></td>
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div> <font color='red'> ".$CACUSN."</font></div></a></td>
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='red'>  ".$CADSTC_T."</font></div></a></td>
                          
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='red'>  ".$CFUSRC."</font></div></a></td>
                          <td> <a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='red'>  ".$CAECNM." </font></div></a></td>
                        <td>".$Message_ZUz1."</td>
                         </tr> ";
                        }


 


     if ($CASTAT == 'C') {
                            echo    "
                     <tr>
                      <td>  <input name='num'  id  = 'num' type='radio' value='".$CARFNO."'> <br> </td>
                     
                        <td><font color='green'>".$count."</font></td>
                         
                         <td > <a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='green'>  ".$CARFNO."  </font></div> </a></td>  
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='green'>".$CARFDT."</font></div></a></td>
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='green'>".$CACUSN."</font></div></a></td>
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='green'>".$CADSTC_T."</font></div></a></td>
                           
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='green'>".$CFUSRC."</font></div></a></td>
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='green'>".$CAECNM."</font></div></a></td>
                        <td>".$Message_Cz1."</td>
                         </tr> ";
                          }
      if ($CASTAT == 'R') {
                                    echo    "
                     <tr>
                      <td>  <input name='num'  id  = 'num' type='radio' value='".$CARFNO."'> <br> </td>
                      
                       <td><font color='Orange'>".$count."</font></td>
                        
                        <td > <a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='Orange'>  ".$CARFNO."  </font></div> </a></td>  
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='Orange'>".$CARFDT."</font></div></a></td>
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='Orange'>".$CACUSN."</font></div></a></td>
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='Orange'>".$CADSTC_T."</font></div></a></td>
                        
                          <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='Orange'>".$CFUSRC."</font></div></a></td>
                          <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='Orange'>".$CAECNM."</font></div></a></td>
                        <td>".$Message_Rz1."</td>
                         </tr> ";
                         }
      if ($CASTAT == 'U') {
                            echo    "
                     <tr>
                     <td>  <input name='num'  id  = 'num' type='radio' value='".$CARFNO."'> <br> </td>
                        
                          <td><font color='Orange'>".$count."</font></td>
                        <td > <a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='Orange'>  ".$CARFNO."  </font></div> </a></td>  
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='Orange'>".$CARFDT."</font></div></a></td>
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='Orange'>".$CACUSN."</font></div></a></td>
                        <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='Orange'>".$CADSTC_T."</font></div></a></td>
                        
                          <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='Orange'>".$CFUSRC."</font></div></a></td>
                         <td><a href ='./display.php?DCNO=".$CARFNO_T."'><div><font color='Orange'>".$CAECNM."</font></div></a></td>
                          <td>".$Message_Uz1."</td>
                         </tr> ";
                 }

               
          
         }
   }
  }
        





 


    odbc_close($conn);
        ob_end_flush();

     ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
        </form>




                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Static Table End -->
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="footer-copy-right">
                           <p>Copyright © 2019. All rights reserved.  by <a href="http://www.smcthai.co.th/index-en.php">SMC (Thailand) Ltd.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery
    ============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
    ============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
    ============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
    ============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
    ============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
    ============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
    ============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
    ============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
    ============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
    ============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- data table JS
    ============================================ -->
    <script src="js/data-table/bootstrap-table.js"></script>
    <script src="js/data-table/tableExport.js"></script>
    <script src="js/data-table/data-table-active.js"></script>
    <script src="js/data-table/bootstrap-table-editable.js"></script>
    <script src="js/data-table/bootstrap-editable.js"></script>
    <script src="js/data-table/bootstrap-table-resizable.js"></script>
    <script src="js/data-table/colResizable-1.5.source.js"></script>
    <script src="js/data-table/bootstrap-table-export.js"></script>
    <!--  editable JS
    ============================================ -->
    <script src="js/editable/jquery.mockjax.js"></script>
    <script src="js/editable/mock-active.js"></script>
    <script src="js/editable/select2.js"></script>
    <script src="js/editable/moment.min.js"></script>
    <script src="js/editable/bootstrap-datetimepicker.js"></script>
    <script src="js/editable/bootstrap-editable.js"></script>
    <script src="js/editable/xediable-active.js"></script>
    <!-- Chart JS
    ============================================ -->
    <script src="js/chart/jquery.peity.min.js"></script>
    <script src="js/peity/peity-active.js"></script>
    <!-- tab JS
    ============================================ -->
    <script src="js/tab.js"></script>
    <!-- plugins JS
    ============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
    ============================================ -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS
    ============================================ -->
  
</body>

</html>