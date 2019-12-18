 <!doctype html>
<html class="no-js" lang="en">

<?php
  include "connect.php";
     error_reporting(0);
    session_start();
  if ($_SESSION["USUSID"] == "") {
    header("location:./index.php");
  }

   

   if ( isset( $_POST['User_name'] ) ) {

      $_SESSION["User_name"] = $_POST['User_name'];
      
   }

 







$USID_trim = trim($_SESSION["USUSID"]);
  $STRQTY = "select  email,Company,NameF  from [StockPrice].[dbo].[Username]  where [UserN]  ='".$_SESSION["USUSID"]."'  ";
$login_result = odbc_fetch_array(odbc_exec($con, $STRQTY));
$email = trim($login_result["email"]);
$Company = trim($login_result["Company"]);
$NameF = trim($login_result["NameF"]);

 

 

   ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> User Master Registration Data Entry</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- jQuery UI library -->
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- favicon
	    
    ============================================ -->
    <link rel="stylesheet" href="css/editor/select2.css">
    <link rel="stylesheet" href="css/editor/datetimepicker.css">
    <link rel="stylesheet" href="css/editor/bootstrap-editable.css">
    <link rel="stylesheet" href="css/editor/x-editor-style.css">
    <!-- normalize CSS
    ============================================ -->
    <link rel="stylesheet" href="css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
		<!--============================================ -->
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
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- dropzone CSS
		============================================ -->
    <link rel="stylesheet" href="css/dropzone/dropzone.css">
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
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
     <!-- select2 CSS
		============================================ -->
    <link rel="stylesheet" href="css/select2/select2.min.css">
    <!-- chosen CSS
		============================================ -->
    <link rel="stylesheet" href="css/chosen/bootstrap-chosen.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

 <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>


<script type="text/javascript">$(document).ready(function(){
$("input").click(function(){
        $(this).next().show();
        $(this).next().hide();
    });

});


           


</script>
<style>
* {
  box-sizing: border-box;
}

body {
  font: 16px Arial;  
}

/*the container must be positioned relative:*/
.autocomplete {
  position: relative;
  display: inline-block;
}

input {
  border: 1px solid transparent;
  background-color: #f1f1f1;
  padding: 10px;
  font-size: 16px;
}

input[type=text] {
  background-color: #f1f1f1;
  width: 100%;
}

input[type=submit] {
  background-color: DodgerBlue;
  color: #fff;
  cursor: pointer;
}

.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

/*when hovering an item:*/
.autocomplete-items div:hover {
  background-color: #e9e9e9; 
}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}
</style>
</head>  
       <!--action="3.php -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <!--         <form    action="add_display.php" method="post" class="form-horizontal"  onSubmit="JavaScript:return fncSubmit();"  enctype="multipart/form-data"> -->

                          
 
   
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

                                                      <li class="nav-item dropdown">
                                                    <a href="./logout.php" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">  <i class="educate-icon educate-pages icon-wrap" aria-hidden="true"></i>
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
                                            <ul class="collapse dropdown-header-top">
                                                <li><a href="index_mail.php">User Master Registration Data Entry</a></li>
                                               
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
                                          
                                            

                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="index_mail.php">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Search User Master Registration Data Entry</span>
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
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a  >Search User Master Registration Data Entry</a></li>
 
                            </ul>


                            <form method="post" onSubmit="JavaScript:return check_submit();" >

                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">
                                                    
                                                        <div class="row  form-group">



                                                             <div class="row form-group">
                                              

                            
                           

                              
                          </div>
   <?php   $STRQTY = "select  email,Company  from [StockPrice].[dbo].[Username]  where [UserN]  ='".$_SESSION["USUSID"]."'  ";
$login_result = odbc_fetch_array(odbc_exec($con, $STRQTY));
$email = trim($login_result["email"]);
$Company = trim($login_result["Company"]);
 $this_date = date("Y/m/d");
 ?> 
                             
                      </div>


   
   <div class="row form-group">

                        


     <form action="./search.php" method="post"> 

                            <div class="col col-md-2"><label for="text-input" class=" form-control-label">User Name  :</label></div>
                            <div class="col-24 col-md-8"><input type="text" id="User_name"    name="User_name" value="<?php echo $_SESSION["User_name"]  ?>" placeholder="User name"  class="form-control">
                            </div>

                       
                               <button class='btn btn-primary btn-sm'>Search</button>
                          </div>
 
</form>
                             
 
                           
 <!-- Static Table Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>  User Master Search Results :</h1>
                                </div>
                            </div>



                            <form method="post" >

                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">

                                          
                                    
                                    <div id="toolbar"> 
                                       
                                    </div>
                                         <div id="toolbar">
                                              

                                             
                                              
                                               
                                    </div>
                                   <table id="table" data-toggle="table" data-pagination="true" data-search="true"     data-key-events="true"   data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId"  data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                
                                                 
                                                <th data-field="id">No</th>
                                                <th data-field="name"  >User Name </th>
                                                 <th data-field="complete">User Code</th>
                                                 <th data-field="complete1">Territory Code</th>
                                                <th data-field="email"  >Tax ID</th>
                                                <th data-field="phone" >Branch </th>
                                                  <th  data-field="select1"> Select</th>
                                                 
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
 <?php  


if ( $_POST["User_name"] != "" ) {

     $sopo1_query = odbc_exec( $conn , "  select  O1ECNM,O1TCNM,O1CENM,O1CTNM,O1CUSN ,O1TRRY ,  OHCCTX,OHSTRG,OHCUSN    from  smcdta.sopo1 a
  join smcdta.SOPOH b on b.OHCUSN = a.O1CUSN 
  where a.O1ECNM like '". strtoupper($_POST["User_name"]) ."%'   
  limit 50 ");

}


     ?>

   <?php

   $i = 1;

   while (  $result = odbc_fetch_array($sopo1_query) ) {
    

                $OHSTRG = "";

                if ( trim($result["OHSTRG"]) != "" ) {
                  $OHSTRG = "00".$result["OHSTRG"];
                }


               echo    "
                     <tr>
                       
                        
                        <td><font color='blue'>".$i."</font></td>
                        <td >
                        <div><font color='blue'>  ".$result["O1ECNM"]."  </font></div> </a></td>  
                        <td><div><font color='blue'>".$result["O1CUSN"]."</font></div></a></td>
                        <td><div><font color='blue'>".$result["O1TRRY"]."</font></div></a></td>
                        <td><div><font color='blue'>".$result["OHCCTX"]."</font></div></a></td>
                          <td><font color='blue'>".$OHSTRG."</font></div></a></td>
                        <td> <button class='btn btn-success btn-sm' formaction='./index_edit.php?OHCCTX=". trim($result["OHCCTX"]) ."&OHSTRG=". trim($OHSTRG) ."&O1CUSN=". trim($result["O1CUSN"]) ."&num=". trim($result["O1CUSN"]) ."' >Select</button> 
                         <button class='btn btn-primary btn-sm' formaction='./search_edit_page1.php?O1CUSN=".trim($result["O1CUSN"]) ."' >Detail</button>  </td>
                           
                         </tr> ";

              $i += 1;

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
     
                        
                 
 <div class="row form-group">
 
                       <div class="card-footer" align="center">
                        

                     <a class="btn btn-danger btn-sm" href = http://mail.smcthai.co.th:8082/pj_mail/M_UMR/WEB/index_edit.php>  Back
                        </a>

                      </div>  
</div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

          </form>

        </div>

 
<script type="text/javascript">
  

  $(document).keypress(
  function(event){
    if (event.which == '13') {
      event.preventDefault();
    }
});


  function check_submit(){

    if (document.getElementById("total").value == 0) {
            alert("Please fill  value  of  month !!  ");
            return false;
    }

  }




 document.getElementById("customer_cusn").addEventListener("keyup", function(event) {
      if (event.keyCode === 13) {
       event.preventDefault();
       //alert("test");

       var value_a = document.getElementById("customer_cusn").value;

       $.post("check_code.php", { taxid: value_a } , function(return_value, status_a){

          //var object = jQuery.parseJSON(return_value);
        
          if ( return_value == 1 ) {

            alert("Tax ID is correct");            

          }else{

            alert("Tax ID is incorrect");

          }


      }); 


      }
  });



 document.getElementById("customer_cusn1").addEventListener("keyup", function(event) {
      if (event.keyCode === 13) {
       event.preventDefault();
       //alert("test");

       var value_b = document.getElementById("customer_cusn1").value;

       $.post("check_code.php", { brachid: value_b } , function(return_value, status_a){

          //var object = jQuery.parseJSON(return_value);
        
          if ( return_value == 1 ) {

            alert("Brach ID is correct");            

          }else{

            alert("Brach ID is incorrect");

          }


      }); 


      }
  });






  document.getElementById("execute_search").addEventListener("click", function(event) {

   

       var value_a = document.getElementById("customer_cusn").value;
       var value_b = document.getElementById("customer_cusn1").value;

       $.post("query.php", { taxid: value_a , brachid : value_b } , function(return_value, status_a){

          //console.log(return_value); //debug

          var object = jQuery.parseJSON(return_value);
          $("#O1ECNM").val(object.O1ECNM);
          $("#O1TCNM").val(object.O1TCNM);
          $("#O1EAD1").val(object.O1EAD1);
          $("#O8EAD1").val(object.O8EAD1);
          $("#O1EAD2").val(object.O1EAD2);
          $("#O8EAD2").val(object.O8EAD2);
          $("#O1EAD3").val(object.O1EAD3);
          $("#O8EAD3").val(object.O8EAD3);
          $("#EXEDES").val(object.EXEDES);
          $("#O1PSTC").val(object.O1PSTC);
          $("#O8PSTC").val(object.O8PSTC);
          $("#O1TAD1").val(object.O1TAD1);
          $("#O8TAD1").val(object.O8TAD1);
          $("#O1TAD2").val(object.O1TAD2);
          $("#O8TAD2").val(object.O8TAD2);
          $("#O1TAD3").val(object.O1TAD3);
          $("#O8TAD3").val(object.O8TAD3);
          $("#O1TAD4").val(object.O1TAD4);
          $("#O8TAD4").val(object.O8TAD4);
          $("#O1CENM").val(object.O1CENM);
          $("#O8CENM").val(object.O8CENM);
          $("#O1CTNM").val(object.O1CTNM);
          $("#O8CTNM").val(object.O8CTNM);
          $("#O1CHQP").val(object.O1CHQP);
          $("#O1TLNO").val(object.O1TLNO);
          $("#O8TLNO").val(object.O8TLNO);
          $("#O1FXNO").val(object.O1FXNO);
          $("#O8FXNO").val(object.O8FXNO);
          $("#OHCCTX1").val(object.OHCCTX1);
          $("#OHSTRG1").val(object.OHSTRG1);  
          $("#OHCCTX").val(object.OHCCTX);
          $("#O1TSR1").val(object.O1TSR1);
          $("#OWMIX").val(object.OWMIX);
          $("#INDT").val(object.INDT);
          $("#O1RGEX").val(object.O1RGEX);
         $("#OBAMGR").val(object.OBAMGR);
         $("#O1CUSN").val(object.O1CUSN);
         $("#OBAMGR11").val(object.OBAMGR11);   
          $("#OBAMGR111").val(object.OBAMGR111);   



      }); 


      
  });



       
        $(function() {
            $("#auto_company").autocomplete({
                    source: [ "PHP", "Python", "Ruby", "JavaScript", "MySQL", "Oracle" ]

            });
        });




</script>

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
    <!-- touchspin JS
		============================================ -->
    <script src="js/touchspin/jquery.bootstrap-touchspin.min.js"></script>
    <script src="js/touchspin/touchspin-active.js"></script>
    <!-- colorpicker JS
		============================================ -->
		<script src="js/colorpicker/jquery.spectrum.min.js"></script>
    <script src="js/colorpicker/color-picker-active.js"></script>
    <!-- datapicker JS
		============================================ -->
    <script src="js/datapicker/bootstrap-datepicker.js"></script>
    <script src="js/datapicker/datepicker-active.js"></script>
     <!-- input-mask JS
		============================================ -->
    <script src="js/input-mask/jasny-bootstrap.min.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
		 <!-- chosen JS
		============================================ -->
    <script src="js/chosen/chosen.jquery.js"></script>
    <script src="js/chosen/chosen-active.js"></script>
    <!-- select2 JS
		============================================ -->
    <script src="js/select2/select2.full.min.js"></script>
    <script src="js/select2/select2-active.js"></script>
    <!-- ionRangeSlider JS
		============================================ -->
    <script src="js/ionRangeSlider/ion.rangeSlider.min.js"></script>
    <script src="js/ionRangeSlider/ion.rangeSlider.active.js"></script>
    <!-- rangle-slider JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- maskedinput JS
		============================================ -->
    <script src="js/jquery.maskedinput.min.js"></script>
    <script src="js/masking-active.js"></script>
    <!-- datepicker JS
		============================================ -->
    <script src="js/datepicker/jquery-ui.min.js"></script>
    <script src="js/datepicker/datepicker-active.js"></script>
    <!-- form validate JS
		============================================ -->
    <script src="js/form-validation/jquery.form.min.js"></script>
    <script src="js/form-validation/jquery.validate.min.js"></script>
    <script src="js/form-validation/form-active.js"></script>
    <!-- dropzone JS
		============================================ -->
    <script src="js/dropzone/dropzone.js"></script>
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
</body>

</html>
