  
  <script>



function fncSubmit()
{
 
 if(document.getElementById("Distributor").value == "")
  {
    alert('Please fill  Distributor Code !!');
    document.getElementById("Distributor_end_user").focus();
    return false;
  }

 if(document.getElementById("idemployee3").value == "")
  {
    alert('Please fill SMC A/C No !!');
    document.getElementById("idemployee3").focus();
    return false;
  }

 if(document.getElementById("Code").value == "")
  {
    alert('Please fill Distributor End User Code  !!');
    document.getElementById("Code").focus();
    return false;
  }
 if(document.getElementById("Man").value == "")
  {
    alert('Please fill  Sales Man  Distributor!! ');
    document.getElementById("Man").focus();
    return false;
  }

 if(document.getElementById("Contact_Name").value == "")
  {
    alert('Please fill  Issued By!! ');
    document.getElementById("Contact_Name").focus();
    return false;
  }

 if(document.getElementById("Email").value == "")
  {
    alert('Please fill  Email!! ');
    document.getElementById("Email").focus();
    return false;
  }
 if(document.getElementById("Position").value == "")
  {
    alert('Please fill  Position!! ');
    document.getElementById("Position").focus();
    return false;
  }
   if(document.getElementById("Tel").value == "")
  {
    alert('Please fill  Tel !! ');
    document.getElementById("Tel").focus();
    return false;
  }
 if(document.getElementById("Year").value == "")
  {
    alert('Please Input Fiscal Year for Budget !!  ');
    document.getElementById("Year").focus();
    return false;
  }
  if (document.getElementById('total').value == "0")
 {
     alert('Please fill  value  !! ');
        document.getElementById('total').focus();
     return false;

 }


 


  document.form1.submit();
}
</script>

   <?php  
     $DCNO = $_POST['num'];
    $querystr_SOPCA = odbc_exec($conn,"select *  from smcdta.SOPCA where  CARFNO = '".$DCNO."' ");
    $result_sopca = odbc_fetch_array($querystr_SOPCA);
    $CACENM = iconv("windows-874", "utf-8", $result_sopca["CACENM"]);
    $CACTNM = iconv("windows-874", "utf-8", $result_sopca["CACTNM"]);
    $CAEAD1 = iconv("windows-874", "utf-8", $result_sopca["CAEAD1"]);
    $CAEAD2 = iconv("windows-874", "utf-8", $result_sopca["CAEAD2"]);
    $CAEAD3 = iconv("windows-874", "utf-8", $result_sopca["CAEAD3"]);
    $CAEAD4 = iconv("windows-874", "utf-8", $result_sopca["CAEAD4"]);
    $CATAD1 = iconv("windows-874", "utf-8", $result_sopca["CATAD1"]);
    $CATAD2 = iconv("windows-874", "utf-8", $result_sopca["CATAD2"]);
    $CATAD3 = iconv("windows-874", "utf-8", $result_sopca["CATAD3"]);
    $CATAD4 = iconv("windows-874", "utf-8", $result_sopca["CATAD4"]);
    $CAPSTC = iconv("windows-874", "utf-8", $result_sopca["CAPSTC"]);
    $CATLNO = iconv("windows-874", "utf-8", $result_sopca["CATLNO"]);
    $CAFXNO = iconv("windows-874", "utf-8", $result_sopca["CAFXNO"]);
    $CATCNM = iconv("windows-874", "utf-8", $result_sopca["CATCNM"]);
    $CAECNM  = iconv("windows-874", "utf-8", $result_sopca["CAECNM"]);
    $CACUSN = iconv("windows-874", "utf-8", $result_sopca["CACUSN"]);
    $CARFDT = iconv("windows-874", "utf-8", $result_sopca["CARFDT"]);
    $CARFNO = iconv("windows-874", "utf-8", $result_sopca["CARFNO"]);
    $CAEFDT = iconv("windows-874", "utf-8", $result_sopca["CAEFDT"]);
    $CACHQP = iconv("windows-874", "utf-8", $result_sopca["CACHQP"]);
    $CARGEX = iconv("windows-874", "utf-8", $result_sopca["CARGEX"]);
    $CADSTC  = iconv("windows-874", "utf-8", $result_sopca["CADSTC"]);
    $CATSR1  = iconv("windows-874", "utf-8", $result_sopca["CATSR1"]);
    $CATSR1  = iconv("windows-874", "utf-8", $result_sopca["CATSR1"]);
 
    $querystr_SOPU0 = odbc_exec($conn,"select *  from smcdta.SOPU0 where  U0DSTC = '".$CADSTC."' ");
    $result_sopu0 = odbc_fetch_array($querystr_SOPU0);
    $U0DSTC = iconv("windows-874", "utf-8", $result_sopu0["U0DSTC"]);

    $CADSTC_trim = trim($CADSTC);
    $CATCNM_trim = trim($CATCNM);
    $CAECNM_trim = trim($CAECNM);
    $CACUSN_trim = trim($CACUSN);
  #  $CARFDT_trim = trim($CARFDT);
    $CARFDT_trim = date_create_from_format('Ymd',$CARFDT);
     $CARFDT_trimD = date_format($CARFDT_trim,'Y/m/d');
    $CARFNO_trim = trim($CARFNO);
    $CAEFDT_trim = trim($CAEFDT);
    $CACENM_trim = trim($CACENM);
    $CACTNM_trim = trim($CACTNM);
    $CAEAD1_trim = trim($CAEAD1);
    $CAEAD2_trim = trim($CAEAD2);
    $CAEAD3_trim = trim($CAEAD3);
    $CATAD1_trim = trim($CATAD1);
    $CATAD2_trim = trim($CATAD2);
    $CATAD3_trim = trim($CATAD3);
    $CATAD4_trim = trim($CATAD4);
    $CAPSTC_trim = trim($CAPSTC);
    $CATLNO_trim = trim($CATLNO);
    $CAFXNO_trim = trim($CAFXNO);
    $CACHQP_trim = trim($CACHQP);
    $CARGEX_trim  = trim($CARGEX);

       /* $O8CENM_trim1 = $CACENM_trim;
         $O8CTNM_trim1 = $CACTNM_trim;
         $O8TAD1_trim1 = $CATAD1_trim;
         $O8TAD2_trim1 = $CATAD2_trim;
         $O8TAD3_trim1 = $CATAD3_trim;
         $O8TAD3_trim1 = $CATAD3_trim;
         $O8EAD1_trim1 = $CAEAD1_trim;
         $O8EAD2_trim1 = $CAEAD2_trim;
         $O8EAD3_trim1 = $CAEAD3_trim;
         $O8PSTC_trim1 = $CAPSTC_trim;
         $O8TLNO_trim1 = $CATLNO_trim;
         $O8FXNO_trim1 = $CAFXNO_trim; */



  $querystr_SOPO1 = odbc_exec($conn,"select *  from smcdta.sopo1 where  O1CUSN = '".$CACUSN_trim."' ");
  $result_approve = odbc_fetch_array($querystr_SOPO1);
  $O1CUSN = iconv("windows-874", "utf-8", $result_approve["O1CUSN"]);
  $O1ECNM = iconv("windows-874", "utf-8", $result_approve["O1ECNM"]);
  $O1TCNM = iconv("windows-874", "utf-8", $result_approve["O1TCNM"]);
  $O1CENM = iconv("windows-874", "utf-8", $result_approve["O1CENM"]);
  $O1CTNM = iconv("windows-874", "utf-8", $result_approve["O1CTNM"]);
  $O1EAD1 = iconv("windows-874", "utf-8", $result_approve["O1EAD1"]);
  $O1EAD2 = iconv("windows-874", "utf-8", $result_approve["O1EAD2"]);
  $O1EAD3 = iconv("windows-874", "utf-8", $result_approve["O1EAD3"]);
  $O1EAD4 = iconv("windows-874", "utf-8", $result_approve["O1EAD4"]);
  $O1TAD1 = iconv("windows-874", "utf-8", $result_approve["O1TAD1"]);
  $O1TAD2 = iconv("windows-874", "utf-8", $result_approve["O1TAD2"]);
  $O1TAD3 = iconv("windows-874", "utf-8", $result_approve["O1TAD3"]);
  $O1TAD4 = iconv("windows-874", "utf-8", $result_approve["O1TAD4"]);
  $O1PSTC = iconv("windows-874", "utf-8", $result_approve["O1PSTC"]);
  $O1TLNO = iconv("windows-874", "utf-8", $result_approve["O1TLNO"]);
  $O1FXNO = iconv("windows-874", "utf-8", $result_approve["O1FXNO"]);
  $O1EFDT = iconv("windows-874", "utf-8", $result_approve["O1EFDT"]);
  $O1EFDT1 = date_create_from_format('Ymd',$O1EFDT);
  $O1EFDTD = date_format($O1EFDT1,'Y/m/d');


  $O1TSR1 = iconv("windows-874", "utf-8", $result_approve["O1TSR1"]);
  $O1CHQP = iconv("windows-874", "utf-8", $result_approve["O1CHQP"]);
  $O1RGEX = iconv("windows-874", "utf-8", $result_approve["O1RGEX"]);
  $O1TRRY = iconv("windows-874", "utf-8", $result_approve["O1TRRY"]);

  $querystr_SOPO8 = odbc_exec($conn,"select *   from smcdta.SOPO8 where  O8CUSN = '".$CACUSN_trim."' limit 1  ");
  $result_sopo8 = odbc_fetch_array($querystr_SOPO8);
  $O8CENM = iconv("windows-874", "utf-8", $result_sopo8["O8CENM"]);
  $O8CTNM = iconv("windows-874", "utf-8", $result_sopo8["O8CTNM"]);
  $O8TAD1 = iconv("windows-874", "utf-8", $result_sopo8["O8TAD1"]);
  $O8EAD1 = iconv("windows-874", "utf-8", $result_sopo8["O8EAD1"]);
  $O8EAD2 = iconv("windows-874", "utf-8", $result_sopo8["O8EAD2"]);
  $O8EAD3 = iconv("windows-874", "utf-8", $result_sopo8["O8EAD3"]);
  $O8TAD2 = iconv("windows-874", "utf-8", $result_sopo8["O8TAD2"]);
  $O8TAD3 = iconv("windows-874", "utf-8", $result_sopo8["O8TAD3"]);
  $O8TLNO = iconv("windows-874", "utf-8", $result_sopo8["O8TLNO"]);
  $O8FXNO = iconv("windows-874", "utf-8", $result_sopo8["O8FXNO"]);
  $O8PSTC = iconv("windows-874", "utf-8", $result_sopo8["O8PSTC"]);
  $O8CENM = iconv("windows-874", "utf-8", $result_sopo8["O8CENM"]);
  $O8CTNM = iconv("windows-874", "utf-8", $result_sopo8["O8CTNM"]);



  $querystr_SOPCF = odbc_exec($conn,"select CFUSRC   from smcdta.SOPCF where  CFRFNO = '".$DCNO."' ");
  $result_sopcf = odbc_fetch_array($querystr_SOPCF);
  $CFUSRC  = iconv("windows-874", "utf-8", $result_sopcf["CFUSRC"]);


  $querystr_SOPCC = odbc_exec($conn,"select CCOCR1   from smcdta.SOPCC where  CCRFNO  = '".$DCNO."' and CCTYPE ='SLDS'  and CCSEQN = '1' ");
  $result_sopcc = odbc_fetch_array($querystr_SOPCC);
  $CCOCR1  = iconv("windows-874", "utf-8", $result_sopcc["CCOCR1"]);


  $this_date = date("Ymd");

  $querystr_SOPOH = odbc_exec($conn,"select  OHCCTX,OHSTRG,OHGRP2,OHGRP1  from smcdta.SOPOH where  OHCUSN = '".$CACUSN_trim."' ");
  $result_sopoh = odbc_fetch_array($querystr_SOPOH);
  $OHCCTX  = iconv("windows-874", "utf-8", $result_sopoh["OHCCTX"]);
  $OHSTRG  = iconv("windows-874", "utf-8", $result_sopoh["OHSTRG"]);
  $STRG = "00".$OHSTRG;
  $OHGRP1 = iconv("windows-874", "utf-8", $result_sopoh["OHGRP1"]);
  $OHGRP2 = iconv("windows-874", "utf-8", $result_sopoh["OHGRP2"]);
     $INDT = $OHGRP1;
     $INDT1 = $OHGRP2;

  $querystr_SOPOW = odbc_exec($conn,"select  OWINDC ,OWGLEM ,OWGLEU,OWPRJP  from smcdta.SOPOW where  OWCUSN = '".$CACUSN_trim."' ");
  $result_sopow = odbc_fetch_array($querystr_SOPOW);
  $OWINDC  = iconv("windows-874", "utf-8", $result_sopow["OWINDC"]);
  $OWGLEM  = iconv("windows-874", "utf-8", $result_sopow["OWGLEM"]);
  $OWGLEU  = iconv("windows-874", "utf-8", $result_sopow["OWGLEU"]);
  $OWPRJP  = iconv("windows-874", "utf-8", $result_sopow["OWPRJP"]);
  $OWMIX = $OWINDC.$OWGLEM.$OWGLEU.$OWPRJP;

    #$INDT = substr($OWINDC,0,2);
  $querystr_SOPLE = odbc_exec($conn,"select  LETRRY  from smcdta.SOPLE where  LECUSN = '".$CACUSN_trim."' ");
  $result_sopLE = odbc_fetch_array($querystr_SOPLE);
  $LETRRY  = iconv("windows-874", "utf-8", $result_sopLE["LETRRY"]);
  $LEEFDT  = iconv("windows-874", "utf-8", $result_sopLE["LEEFDT"]);

  if ($LEEFDT <= $this_date) {
        $TRR = $LETRRY;

  } else {
       $TRR = $O1TRRY;

  }



  $querystr_SOPOA = odbc_exec($conn,"select  OASLMN  from smcdta.SALETRR3 where  OATRRY = '".$O1TRRY."'  ORDER BY OAEFDT desc  ");
  $result_sopoa = odbc_fetch_array($querystr_SOPOA);
  $OASLMN  = iconv("windows-874", "utf-8", $result_sopoa["OASLMN"]);
  $OASLMN_trim = trim($OASLMN);


  $querystr_SOPOB = odbc_exec($conn,"select  OBAMGR  from smcdta.SOPOB where  OBSLMN = '".$OASLMN_trim."' ");
  $result_sopob = odbc_fetch_array($querystr_SOPOB);
  $OBAMGR  = iconv("windows-874", "utf-8", $result_sopob["OBAMGR"]);
  $OBAMGR_trim = trim($OBAMGR);


  $querystr_SOPO7a = odbc_exec($conn,"select  O7ESNM  from smcdta.SOPO7 where  O7SLMN = '".$OBAMGR_trim."' ");
  $result_sopo7a = odbc_fetch_array($querystr_SOPO7a);
  $O7ESNMa  = iconv("windows-874", "utf-8", $result_sopo7a["O7ESNM"]);

  $querystr_SOPO7 = odbc_exec($conn,"select  O7ESNM  from smcdta.SOPO7 where  O7SLMN = '".$OASLMN_trim."' ");
  $result_sopo7 = odbc_fetch_array($querystr_SOPO7);
  $O7ESNM  = iconv("windows-874", "utf-8", $result_sopo7["O7ESNM"]);
  $OBAMGR11 = $OBAMGR." ".$O7ESNMa;
  $OBAMGR111 = $OASLMN." ".$O7ESNM;


  $querystr_SOPCCC = odbc_exec($conn,"select  *  from smcdta.SOPC# where  C#RFNO  = '".$DCNO."' ");
  $result_sopoccc = odbc_fetch_array($querystr_SOPCCC);
  $CCCYEAR  = iconv("windows-874", "utf-8", $result_sopoccc["C#YEAR"]);
  $CCCMN01  = iconv("windows-874", "utf-8", $result_sopoccc["C#MN01"]);
  $CCCMN02  = iconv("windows-874", "utf-8", $result_sopoccc["C#MN02"]);
  $CCCMN03  = iconv("windows-874", "utf-8", $result_sopoccc["C#MN03"]);
  $CCCMN04  = iconv("windows-874", "utf-8", $result_sopoccc["C#MN04"]);
  $CCCMN05  = iconv("windows-874", "utf-8", $result_sopoccc["C#MN05"]);
  $CCCMN06  = iconv("windows-874", "utf-8", $result_sopoccc["C#MN06"]);
  $CCCMN07  = iconv("windows-874", "utf-8", $result_sopoccc["C#MN07"]);
  $CCCMN08  = iconv("windows-874", "utf-8", $result_sopoccc["C#MN08"]);
  $CCCMN09  = iconv("windows-874", "utf-8", $result_sopoccc["C#MN09"]);
  $CCCMN10  = iconv("windows-874", "utf-8", $result_sopoccc["C#MN10"]);
  $CCCMN11  = iconv("windows-874", "utf-8", $result_sopoccc["C#MN11"]);
  $CCCMN12  = iconv("windows-874", "utf-8", $result_sopoccc["C#MN12"]);
  $CCCTTAL  = iconv("windows-874", "utf-8", $result_sopoccc["C#TTAL"]);



  $querystr_SOPCC1 = odbc_exec($conn,"select  *  from smcdta.SOPCC where  CCRFNO  = '".$DCNO."'  and CCTYPE = 'DSRM' and CCSEQN = '1' ");
  $result_sopocc1 = odbc_fetch_array($querystr_SOPCC1);
  $CCOCR1  = iconv("windows-874", "utf-8", $result_sopocc1["CCOCR1"]);
$CCOCR2  = iconv("windows-874", "utf-8", $result_sopocc1["CCOCR2"]);
$CCOCR3  = iconv("windows-874", "utf-8", $result_sopocc1["CCOCR3"]);
$CCOCR4  = iconv("windows-874", "utf-8", $result_sopocc1["CCOCR4"]);

$querystr_SOPCC3 = odbc_exec($conn,"select  *  from smcdta.SOPCC where  CCRFNO  = '".$DCNO."'  and CCTYPE = 'DSRM' and CCSEQN = '2' ");
$result_sopocc3 = odbc_fetch_array($querystr_SOPCC3);
$CCOCR13  = iconv("windows-874", "utf-8", $result_sopocc3["CCOCR1"]);
$CCOCR23  = iconv("windows-874", "utf-8", $result_sopocc3["CCOCR2"]);



$querystr_SOPEX = odbc_exec($conn,"select  EXEDES  from smcdta.SOPEX where  EXEXTP  = 'CNTY'  and EXEXCD = '".$CATSR1."' ");
$result_sopoex = odbc_fetch_array($querystr_SOPEX);
$EXEDES  = iconv("windows-874", "utf-8", $result_sopoex["EXEDES"]);

$querystr_SOPCC2 = odbc_exec($conn,"select  CCOCR1  from smcdta.SOPCC where  CCRFNO  = '".$DCNO."'  and CCTYPE = 'SLDS' and CCSEQN = '1' ");
$result_sopocc2 = odbc_fetch_array($querystr_SOPCC2);
$CCOCR12  = iconv("windows-874", "utf-8", $result_sopocc2["CCOCR1"]);


$querystr_SOPDG  = odbc_exec($conn,"select  *   from smcdta.SOPDG where  DGRFNO  = '".$DCNO."'   ");
$result_sopdg2 = odbc_fetch_array($querystr_SOPDG);
$DGPOEN  = iconv("windows-874", "utf-8", $result_sopdg2["DGPOEN"]);
$DGCENM  = iconv("windows-874", "utf-8", $result_sopdg2["DGCENM"]);
$DGTLNO  = iconv("windows-874", "utf-8", $result_sopdg2["DGTLNO"]);
$DGEMA1  = iconv("windows-874", "utf-8", $result_sopdg2["DGEMA1"]); 



$querystr_SOPHU  = odbc_exec($conn,"select  *   from smcdta.SOPHU where  HURFNO  = '".$DCNO."'   ");
$result_sophu2 = odbc_fetch_array($querystr_SOPHU);
$HUCCUN  = iconv("windows-874", "utf-8", $result_sophu2["HUCCUN"]);
 


$querystr_SOPHW  = odbc_exec($conn,"select  *   from smcdta.SOPHW where  HWRFNO  = '".$DCNO."'   ");
$result_sophw2 = odbc_fetch_array($querystr_SOPHW);
$HWCSCD  = iconv("windows-874", "utf-8", $result_sophw2["HWCSCD"]);
$HWCSDS  = iconv("windows-874", "utf-8", $result_sophw2["HWCSDS"]);
$HWREMK  = iconv("windows-874", "utf-8", $result_sophw2["HWREMK"]);
 $HWOPBY  = iconv("windows-874", "utf-8", $result_sophw2["HWOPBY"]);
 $trim_APB = trim($HWOPBY);

  $querystr_SOPO7_areacode_BTCODE = odbc_exec($conn,"select    BTDESC   from  smcdta.bgpbt where  BTSYSC = 'USID'  and BTCODE = '".$trim_APB."' "); 
    $querystr_code_request_SOPO7_BTCODE = odbc_fetch_array($querystr_SOPO7_areacode_BTCODE);
   
    $BTDESC_areacode_1 = iconv("windows-874", "utf-8", $querystr_code_request_SOPO7_BTCODE["BTDESC"]);  
 

?>
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
                                          
                                             

                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="index_mail.php">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Submit User Master Registration Data Entry</span>
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
                                <li class="active"><a  >Submit User Master Registration Data Entry</a></li>
 
                            </ul>


                            <form method="post" >

                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">
                                                    
                                                        <div class="row  form-group">



                                                             <div class="row form-group">
                                              

                            
                           

                              
                          </div>
   <?php   $STRQTY = "select  *   from [StockPrice].[dbo].[Username]  where [UserN]  ='".$_SESSION["USUSID"]."'  ";
$login_result = odbc_fetch_array(odbc_exec($con, $STRQTY));
$email = trim($login_result["email"]);
$Company = trim($login_result["Company"]);
 $this_date = date("Y/m/d");
 ?> 
                             
                      </div>


   <div class="row form-group">

                             <div class="col col-md-2"><label for="text-input" class=" form-control-label"> UMR No. : </label></div>
                            <div class="col-24 col-md-2"><input type="text"  readonly="" id="CARFNO" name="CARFNO" placeholder="UMR No."
                              value="<?php echo $CARFNO_trim; ?>"  class="form-control">

                            </div>

                             <div class="col col-md-2"><label for="text-input" class=" form-control-label"> Date :  </label></div>
                            <div class="col-24 col-md-2"><input type="text"  readonly="" id="date_umr" name="user_ref_date" placeholder="Date"
                              value="<?php echo $this_date ; ?>"  class="form-control">

  </div>

                          </div>
   <div class="row form-group">

                            <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Distributor Code:</label></div>
                            <div class="col-24 col-md-2"><input type="text"  readonly="" id="Distributor" placeholder="Distributor Code"   
                              name="Distributor" placeholder="Distributor Code"
                              value="<?php  echo  $Company  ;?>" class="form-control"></div>


     <?php  


$SOPO1_test = odbc_fetch_array( odbc_exec($conn, " select  O1ECNM,O1TCNM,O1CENM,O1CTNM  from  smcdta.sopo1
      where  O1CUSN = '".$CADSTC."'  ") );

$O1ECNM_COM  =   iconv("windows-874", "utf-8", $SOPO1_test["O1ECNM"]);

     ?>

                            <div class="col col-md-2"><label for="text-input" class=" form-control-label">Distributor Name   :</label></div>
                            <div class="col-24 col-md-4"><input type="text" id=" "  readonly="" name="Distributor_name" value="<?php  echo  $O1ECNM_COM  ;?>" placeholder="Sales Man(Dis)"  class="form-control">
                            </div>


                          </div>




                             <div class="row form-group">

                         


                           
 

                           <!--  <div class="col col-md-2"><label for="text-input" class=" form-control-label">SMC A/C No.  :</label></div>
                            <div class="col-24 col-md-2"><input type="text" readonly="" list="brow"  id="idemployee" name="User_No" placeholder="SMC A/C No."
                              value="<?php echo $_POST['idemployee3']  ?>"  class="form-control" >
                            </div>-->
  
                          </div>

                           <div class="row form-group">


                              <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">  Tax ID :</label></div>
                            <div class="col-24 col-md-2"> <input type="text" id="customer_cusn" readonly="" disabled=""  name="customer_cusn" value="<?php echo $OHCCTX ?>" placeholder="Search Tax ID  "   class="form-control"></div>


                             

                             <div class="col col-md-2"><label for="disabled-input" class=" form-control-label"> Tax  Branch  Code:</label></div>
                            <div class="col-24 col-md-2"> <input type="text" id="customer_cusn1" readonly="" disabled="" name="customer_cusn1" value="<?php echo $STRG ?>" placeholder="Search   Brach   Code "   class="form-control"></div>
                           
 

                           <!--  <div class="col col-md-2"><label for="text-input" class=" form-control-label">SMC A/C No.  :</label></div>
                            <div class="col-24 col-md-2"><input type="text" readonly="" list="brow"  id="idemployee" name="User_No" placeholder="SMC A/C No."
                              value="<?php echo $_POST['idemployee3']  ?>"  class="form-control" >
                            </div>-->
  
                          </div>
                            <!--   ssssssssssssssssssssssssssssssssssssssssssssssssssssssss -->

                              
 


                           








                          
               
                 
 

                          <div class="row form-group">
                               <div class="col col-md-2"><label for="password-input" class=" form-control-label">User Name      :</label></div>
                            <div class="col-24 col-md-5"><input type="text" id="O1ECNM" name="engname" readonly="" placeholder="User Name"  value="<?php echo $O1ECNM; ?>" class="form-control"></div>

                            
                               <div class="col-24 col-md-4"><input type="text" id="O1TCNM"  readonly="" name="O1TCNM" value="<?php echo $O1TCNM; ?>" placeholder="User Name"  class="form-control"></div>


                          </div>

                             <div class="row form-group">
                                  <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Distributor End User Code :</label></div>
                            <div class="col-24 col-md-2"> <input type="text" id="User_Code_Dist" readonly="" disabled="" name="User_Code_Dist" value="<?php echo $CFUSRC; ?>" placeholder="Distributor End User Code "    class="form-control"></div>


                            <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">SMC A/C No.  :</label></div>
                            <div class="col-24 col-md-4"> <input type="text" id="O1CUSN" readonly="" disabled=""  name="O1CUSN" value="<?php echo $CACUSN_trim; ?>" placeholder="Distributor End User Code "   class="form-control"></div>

                              </div>


                           
                          <div class="row form-group">
                           <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Address (Invoice)   :</label></div>
                           <div class="col-24 col-md-10"><input type="text" id="O1TAD1"  readonly="" name="O1TAD1" value="<?php echo $O1TAD1; ?>" placeholder="Address (Invoice)"  class="form-control"></div>

                             


                         </div>
                           <div class="row form-group">
                           <div class="col col-md-2"><label for="disabled-input" class=" form-control-label"></label></div>
                           <div class="col-24 col-md-10"><input type="text" id="O1TAD2"  readonly="" name="O1TAD2" value="<?php echo $O1TAD2; ?>"    class="form-control"></div>

                        

                         </div>
                          <div class="row form-group">
                           <div class="col col-md-2"><label for="disabled-input" class=" form-control-label"></label></div>
                           <div class="col-24 col-md-10"><input type="text" id="O1TAD3"  readonly="" name="O1TAD3" value="<?php echo $O1TAD3; ?>"    class="form-control"></div>

                           


                         </div>
                            <div class="row form-group">
                           <div class="col col-md-2"><label for="disabled-input" class=" form-control-label"></label></div>
                           <div class="col-24 col-md-10"><input type="text" id="O1TAD4"  readonly="" name="O1TAD4" value="<?php echo $O1TAD4; ?>"    class="form-control"></div>

                             

                         </div>

                       <div class="row form-group">
                            <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Contract Person    :</label></div>
                        <div class="col-24 col-md-4"><input type="text" id="O1CTNM"  readonly="" name="O1CTNM" value="<?php echo $O1CTNM; ?>" placeholder="Contract Person"  class="form-control"></div>

                             <div class="container">
  
                 <!--       <div class="container">
  
      
   <?php  echo " <a href='./Display_more.php?O1CUSN=".$_GET["O1CUSN"]."'   target='_blank'  class='btn btn-primary btn-sm ' > 

                        More Detail </a> ";  ?>
   
  
   
  
</div> -->

   
  
</div>


                          </div>

                    
 <div class="row form-group">
                            <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Remark    :</label></div>
                            <div class="col-24 col-md-10"><input type="text" id="O1CHQP"  readonly="" name="O1CHQP" value="<?php echo $O1CHQP ; ?>" placeholder="Remark"  class="form-control"></div>




                          </div>

                   <div class="row form-group">
                            <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Tel No.    :</label></div>
                            <div class="col-24 col-md-4"><input type="text" id="O1TLNO"  readonly="" name="O1TLNO" value="<?php echo $O1TLNO; ?>" placeholder="Tel No."  class="form-control"></div>

                               <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Fax No.    :</label></div>
                            <div class="col-24 col-md-4"><input type="text" id="O1FXNO"  readonly="" name="O1FXNO" value="<?php echo $O1FXNO; ?>" placeholder="Fax No."  class="form-control"></div>


                          </div>



                         












                         <div class="row form-group">
                         
<div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Project Code </label></div>
                            <div class="col-24 col-md-4"><input type="text" id="INDT"  readonly="" name="INDT" value="<?php echo $INDT; ?>" placeholder="Project Code"  class="form-control"></div>



                             <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Project code 10 digits: </label></div>
                            <div class="col-24 col-md-4"><input type="text" id="OWMIX"  readonly="" name="OWMIX" value="<?php echo $OWMIX; ?>" placeholder="Project code 10 digits"  class="form-control"></div>
                          </div>

                           

                         


                           <div class="row form-group">
                            
                              <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Industry  : </label></div>
                            <div class="col-24 col-md-4"><input type="text" id="INDT1"  readonly="" name="INDT1" value="<?php echo $INDT1; ?>" placeholder="Industry"  class="form-control"></div>

                               <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Country : </label></div>
                            <div class="col-24 col-md-4"><input type="text" id="O1TSR1"  readonly="" name="O1TSR1" value="<?php echo $O1TSR1; ?>" placeholder="Country"  class="form-control"></div>

                          
                          </div>
                           
                          <div class="row form-group">
                            

                               <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">SMC Salesman  : </label></div>
                            <div class="col-24 col-md-4"><input type="text" id="OBAMGR111"  readonly="" name="OBAMGR111" value="<?php echo $OBAMGR111; ?>" placeholder="Country"  class="form-control"></div>

                          <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">SMC  Branch    :</label></div>
                            <div class="col-24 col-md-4"><input type="text" id="O1RGEX"  readonly="" name="O1RGEX" value="<?php echo $O1RGEX; ?>" placeholder="SMC Branch"  class="form-control"></div>
                          </div>
               



                          <div class="row form-group">

                             <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">SMC ASM  :</label></div>
                            <div class="col-24 col-md-4"><input type="text" id="OBAMGR11"  readonly="" name="OBAMGR11" value="<?php echo $OBAMGR11; ?>" placeholder="SMC Area"  class="form-control"></div>
                                <div class="col col-md-2"><label for="disabled-input" class=" form-control-label"> Salesman Distributor :</label></div>
                            <div class="col-24 col-md-4"><input type="text" id="Sales_Man_Dis" readonly="" disabled=""   name="Sales_Man_Dis" value="<?php echo $CCOCR12; ?>" placeholder="Sales Man(Dis)"  class="form-control"></div>

                        </div>
                        

          
 
    <div class="row form-group">
                            <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Issued By :</label></div>
                            <div class="col-24 col-md-4"><input type="text" id="Contact_Name" readonly="" disabled=""  name="Contact_Name" value="<?php echo $DGCENM; ?>" placeholder="Contact Name"   class="form-control"></div>

                               <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Email :</label></div>
                            <div class="col-24 col-md-4"><input type="email" id="Email"  readonly=""  name="Email" value="<?php  echo $DGEMA1 ?>" placeholder="Email"  class="form-control"></div>


                          </div>
                          <div class="row form-group">
                            <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Position :</label></div>
                            <div class="col-24 col-md-4"><input type="text" id="Position"  readonly="" disabled=""  name="Position" value="<?php  echo $DGPOEN ?>" placeholder="Position"   class="form-control"></div>

                               <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Tel :</label></div>
                            <div class="col-24 col-md-4"><input type="text" id="Tel"  readonly="" disabled=""  name="Tel" value="<?php  echo $DGTLNO ?>" placeholder="Tel"  class="form-control"></div>


                          </div>




    <!-- MONTH  ========================================== -->


<script type="text/javascript">$(document).ready(function(){
$("input").click(function(){
        $(this).next().show();
        $(this).next().hide();
    });

});</script>

       <!--action="3.php -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                         <form    action="edit.php" method="post" class="form-horizontal"  onSubmit="JavaScript:return fncSubmit();"  enctype="multipart/form-data">

                           <script language="javascript">

                           var t1 = 0;
                           var t2 = 0;
                           var t3 = 0;
                           var t4 = 0;
                           var t5 = 0;
                           var t6 = 0;
                           var t7 = 0;
                           var t8 = 0;
                           var t9 = 0;
                           var t10 = 0;
                           var t11 = 0;
                           var t12 = 0;
                           var sum = 0;

                           function fnccheck(){

                             t1=parseFloat(document.getElementById('input1').value);
                             t2=parseFloat(document.getElementById('input2').value);
                             t3=parseFloat(document.getElementById('input3').value);
                             t4=parseFloat(document.getElementById('input4').value);
                             t5=parseFloat(document.getElementById('input5').value);
                             t6=parseFloat(document.getElementById('input6').value);
                             t7=parseFloat(document.getElementById('input7').value);
                             t8=parseFloat(document.getElementById('input8').value);
                             t9=parseFloat(document.getElementById('input9').value);
                             t10=parseFloat(document.getElementById('input10').value);
                             t11=parseFloat(document.getElementById('input11').value);
                             t12=parseFloat(document.getElementById('input12').value);
                           sum=t1+t2+t3+t4+t5+t6+t7+t8+t9+t10+t11+t12;

                            if (parseFloat(sum) == 0) {

                             alert("please insert your values");

                           }else {
                             document.getElementById('total').value = sum;
                           }

                           console.log(sum);



                           }
                           </script>
 <div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap drp-lst">
                      
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a  >Fisical  Year Budget</a> </li>
                             
                            </ul>
                                                    <div class="row form-group">
                            <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Fisical Year Budget :</label></div>
                            <div class="col-24 col-md-4"> <input type="text" id="Year"  maxlength="4" readonly="" disabled=""  pattern="[0-9]{4}"   name="Year" value="<?php echo $CCCYEAR; ?>" placeholder="Fiscal Year" class="form-control"></div>

                           


                          </div>
                            <div class="row form-group">

                            <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Apr :</label></div>
                            <div class="col-24 col-md-4"> <input type="number" id="input1" pattern="[0-9]"   readonly="" disabled=""  Onchange="JavaScript:return fnccheck();" name="Apr" value="<?php echo $CCCMN01; ?>" placeholder="April" class="form-control"> </div>

                              <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">May :</label></div>
                            <div class="col-24 col-md-4"><input type="number" id="input2"  pattern="[0-9]"  Onchange="JavaScript:return fnccheck();"  readonly="" disabled="" name="May" value="<?php echo $CCCMN02; ?>" placeholder="May"  class="form-control"></div>
                        </div>
                             <div class="row form-group">

                             <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Jun :</label></div>
                            <div class="col-24 col-md-4">  <input type="number" id="input3" pattern="[0-9]" readonly="" disabled=""  Onchange="JavaScript:return fnccheck();"   name="Junl" value="<?php echo $CCCMN03; ?>" placeholder="June"  class="form-control"></div>

                               <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Jul :</label></div>
                            <div class="col-24 col-md-4"><input type="number"  id="input4"  pattern="[0-9]"  readonly="" disabled="" Onchange="JavaScript:return fnccheck();"   name="Jul" value="<?php echo $CCCMN04; ?>" placeholder="July"  class="form-control"></div>
                        </div>
                             <div class="row form-group">

                             <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Aug :</label></div>
                            <div class="col-24 col-md-4"><input type="number"  id="input5" pattern="[0-9]"  readonly="" disabled=""  Onchange="JavaScript:return fnccheck();"    name="Aug" value="<?php echo $CCCMN05; ?>" placeholder="Auguest"  class="form-control"></div>

                               <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Sep :</label></div>
                            <div class="col-24 col-md-4"><input type="number"  id="input5" pattern="[0-9]"  readonly="" disabled=""  Onchange="JavaScript:return fnccheck();"    name="Sep" value="<?php echo $CCCMN06; ?>" placeholder="September"  class="form-control"></div>
                        </div>
                             <div class="row form-group">
                              <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Oct :</label></div>
                            <div class="col-24 col-md-4"><input type="number" id="input7"  pattern="[0-9]"  Onchange="JavaScript:return fnccheck();"  readonly="" disabled=""    name="Oct" value="<?php echo $CCCMN07; ?>" placeholder="Octorber"  class="form-control">  </div>

                                <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Nov :</label></div>
                            <div class="col-24 col-md-4">  <input type="number" id="input8"   pattern="[0-9]" readonly="" disabled="" Onchange="JavaScript:return fnccheck();"   name="Nov" value="<?php echo $CCCMN08; ?>" placeholder="November"  class="form-control">  </div>
                        </div>
                             <div class="row form-group">

                             <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Dec :</label></div>
                            <div class="col-24 col-md-4"><input type="number" id="input9"  pattern="[0-9]" readonly="" disabled=""  Onchange="JavaScript:return fnccheck();"    name="Dec" value="<?php echo $CCCMN09; ?>" placeholder="Dectember"  class="form-control"></div>

                               <div class="col col-md-2"><label for="disabled-input" class=" form-control-label"> Jan :</label></div>
                            <div class="col-24 col-md-4"><input type="number" id="input10"  pattern="[0-9]" readonly="" disabled=""  Onchange="JavaScript:return fnccheck();"    name="Jan" value="<?php echo $CCCMN10; ?>" placeholder="January"  class="form-control"> </div>
                        </div>
                             <div class="row form-group">

                            <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Sep :</label></div>
                            <div class="col-24 col-md-4"><input type="number"  id="input5" pattern="[0-9]"  readonly="" disabled=""  Onchange="JavaScript:return fnccheck();"    name="Sep" value="<?php echo $CCCMN06; ?>" placeholder="September"  class="form-control"></div>

                              <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Feb : </label></div>
                            <div class="col-24 col-md-4"><input type="number" id="input11" pattern="[0-9]" readonly="" disabled=""  Onchange="JavaScript:return fnccheck();"   name="Feb" value="<?php echo $CCCMN11; ?>" placeholder="February"  class="form-control"></div>
                        </div>
                         <div class="row form-group">

                            <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Total Budget  Amount :</label></div>
                            <div class="col-24 col-md-4"><input type="text"  required   maxlength="4" readonly="" disabled=""   name="total" id="total" value="<?php echo $CCCTTAL; ?>" placeholder="Total" class="form-control"> </div>

                              
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
                       
</form>
    <!-- MONTH  ========================================== -->
                        
                 


  <div class="row form-group">
                            <div class="col col-md-2"><label for="disabled-input" class=" form-control-label">Remark   :</label></div>
                            <div class="col-12 col-md-10"><input type="text" id="Remark"   name="Remark_1"  readonly="" value="<?php echo $CCOCR1; ?>"  pattern="^[a-zA-Z0-9\s]+$"   placeholder="Remark"  class="form-control"></div>

                          </div>

                       <div class="row form-group">

                            <div class="col-12 col-md-12"><input type="text" id="Remark1"   readonly="" name="Remark_2" value="<?php echo $CCOCR2; ?>" placeholder="Remark"  pattern="^[a-zA-Z0-9\s]+$" class="form-control"></div>

                          </div>

 <div class="row form-group">

                            <div class="col-12 col-md-12"><input type="text" id="Remark2"  readonly=""  name="Remark_3" value="<?php echo $CCOCR3; ?>" placeholder="Remark" pattern="^[a-zA-Z0-9\s]+$"  class="form-control"></div>

                          </div>
                    <div class="row form-group">

                            <div class="col-12 col-md-12"><input type="text" id="Remark3"   readonly="" name="Remark_4" value="<?php echo $CCOCR4; ?>" placeholder="Remark" pattern="^[a-zA-Z0-9\s]+$"  class="form-control"></div>

                          </div>
                          <div class="row form-group">

                                  <div class="col-12 col-md-12"><input type="text" id="Remark4"  readonly=""  name="Remark_5" value="<?php echo $CCOCR13; ?>" placeholder="Remark"  pattern="^[a-zA-Z0-9\s]+$"  class="form-control"></div>

                                </div>
                                <div class="row form-group">

                                        <div class="col-12 col-md-12"><input type="text" id="Remark5"  readonly=""  name="Remark_6" value="<?php echo $CCOCR23; ?>" placeholder="Remark" pattern="^[a-zA-Z0-9\s]+$"   class="form-control"></div>

                                      </div>

                   <div class="row form-group">
                                                      <div class="col col-md-2"><label for="disabled-input"    class=" form-control-label">Reason Cancle  :</label></div>
                                                                      <div class="col-12 col-md-10"><input type="text"  readonly=""  list=" brow_cancle"  required  id="cancle1" name="cancle1" placeholder="Reason  Cancle"
                                                                        value="<?php echo $HUCCUN; ?>"  class="form-control" >


                                         



                                                                      </div>

                     



                                                    </div>   
                                                                       <div class="row form-group">
                                                      <div class="col col-md-2"><label for="disabled-input"    class=" form-control-label"> Reason Cancle By  :</label></div>
                                                                      <div class="col-12 col-md-10"><input type="text"  readonly=""  list=" brow_cancle"  required  id="cancle1" name="cancle1" placeholder="Reason Cancle By "
                                                                        value="<?php echo $BTDESC_areacode_1; ?>"  class="form-control" >


                                         



                                                                      </div>

                     



                                                    </div>         
 
 
 
                        <div class="row form-group">
                         

                                 <div class="col col-md-2"><label for="disabled-input"    class=" form-control-label">Reason Cancle Approve  :</label></div>
                                                                      <div class="col-12 col-md-10"><input type="text"  readonly=""  list=" brow_cancle"  required  id="cancle1" name="cancle1" placeholder="Reason Cancle Approve "
                                                                        value="<?php echo $HWREMK; ?>"  class="form-control" >
                          </div>




                      </div>
                         <div class="row form-group">
                       <div class="card-footer" align="center">
                        
                     <?php echo   "<a class='btn btn-primary btn-sm' href =  http://mail.smcthai.co.th:8082/PJ_MAIL/M_UMR/web/update_submit.php?num=".$_POST['num']."> Confirmed
                        </a>  "; ?>
                     <a class="btn btn-danger btn-sm" href = http://mail.smcthai.co.th:8082/pj_mail/M_UMR/web/index_mail.php>  Back
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



  document.getElementById("customer_cusn").addEventListener("keyup", function(event) {
      if (event.keyCode === 13) {
       event.preventDefault();
       //alert("test");

       var valuea = document.getElementById("customer_cusn").value;

       $.post("query.php", { name_customer: valuea } , function(return_value, status_a){

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

 

 O1RGEX
      }); 


      }
  });


</script>

      
