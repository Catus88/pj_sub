<?php
 spl_autoload_extensions('.php');
    spl_autoload_register();

   use classes\sql;
 print_r($_FILES);

   $SQL = new sql("SQL","10.0.0.12","sa","smcadmin","PJ_mail");
   $SQL->connect();

   

date_default_timezone_set('Asia/Bangkok');
include "conf.inc.php";
error_reporting(0);
session_start();
if ($_SESSION["USUSID"] == "") {
header("location:./index.php");
}



 $US = trim($_SESSION["USUSID"]);
 $Distri = trim($_POST['Distributor']);
   $YEAR =  date("Ymd");
   $Year_trim = substr($YEAR,2,2);
   $Year_1  = substr($YEAR,0,4);


/*
 

 

       $querystr_SOPSQ1 = odbc_exec($conn,"select  *  from smcdta.UMRSEQN     where  SQYEAR = '".$Year_1."' and SQTYPE = 'U'    ");
        $result_sopsq1 = odbc_fetch_array($querystr_SOPSQ1);
        $SQSEQN1 = iconv("windows-874", "utf-8", $result_sopsq1["SQSEQN"]);
        $SQPFIX1 = iconv("windows-874", "utf-8", $result_sopsq1["SQPFIX"]);
        $SQPFIX_T1 = substr($SQPFIX1,0,1);
         
                      
        $NULL = "00";
        $SQSEQN_total1 =  $SQSEQN1+1;
        $total = trim($SQSEQN_total1);
        $var = str_pad($total,5,"0",STR_PAD_LEFT);
        $result_total = $SQPFIX_T1.$Year_trim.$var;
        $result_total_trim = trim($result_total);


        $usid = trim($_SESSION["USUSID"]);
        $user_no = trim($_POST['O1CUSN']);
 
  */

  


 /*

        $user_no1 = $_POST['ref_date'].$user_no." ".$Distri;
        $PARM_CODE =  '6'.$result_total_trim.$user_no1;
          
        $querySOE50460 = "CALL   SMCPGM.SOE13592EE  ('".$PARM_CODE."')  " ;  
        $resultsCall = odbc_exec($conn, $querySOE50460);
 
 
  

 

*/


                                      $querystr_SOPCA11 = odbc_exec($conn,"select *  from smcdta.sopo1 where  O1CUSN = '".$_POST['User_No']."' ");
                                        $result_approve11 = odbc_fetch_array($querystr_SOPCA11);
                                        $O1CUSN = iconv("windows-874", "utf-8", $result_approve11["O1CUSN"]);
                                        $O1EFDT = iconv("windows-874", "utf-8", $result_approve11["O1EFDT"]);



 




 









$Trim_Apr = trim($_POST['Apr']);
$Trim_May = trim($_POST['May']);
$Trim_Jun = trim($_POST['Junl']);
$Trim_Jul = trim($_POST['Jul']);
$Trim_Aug = trim($_POST['Aug']);
$Trim_Sep = trim($_POST['Sep']);
$Trim_Oct = trim($_POST['Oct']);
$Trim_Nov = trim($_POST['Nov']);
$Trim_Dec = trim($_POST['Dec']);
$Trim_Jan = trim($_POST['Jan']);
$Trim_Feb = trim($_POST['Feb']);
$Trim_Mar = trim($_POST['Mar']);
$Trim_total = trim($_POST['total']);
$trim_efdt = trim($result_approve11["O1EFDT"]);
#########################
  if ($Trim_Apr != 0 or $Trim_Apr != "" ) {
     
      $EFDT_APR = $Trim_Apr;
 } else {
      $EFDT_APR = 0 ;
 }

#######################
  if ($Trim_May != 0 or $Trim_May != "") {
   
     $EFDT_MAY = $Trim_May;
 } else {
      
     $EFDT_MAY = 0 ;
 }

##########################

  if ($Trim_Jun != 0 or $Trim_Jun != "") {
   $EFDT_JUN  = $Trim_Jun;
     
 } else {
     $EFDT_JUN =  0 ;
      
 }
 ##########################

  if ($Trim_Jul != 0 or $Trim_Jul != "") {
    $EFDT_JUL = $Trim_Jul;
     
 } else {
  $EFDT_JUL = 0 ;
     
 }
 ##############################
  if ($Trim_Aug != 0 or $Trim_Aug != "" ) {
  
     $EFDT_AUG = $Trim_Aug;
 } else {
      
      $EFDT_AUG = 0 ;
 }
 ######################
  if ($Trim_Sep != 0 or $Trim_Sep != "") {
    $EFDT_SEP = $Trim_Sep;
     
 } else {
      
     $EFDT_SEP = 0 ;
 }
 #########################
  if ($Trim_Oct != 0  or $Trim_Oct != "") {
  
      $EFDT_OCT = $Trim_Oct;
 } else {
   $EFDT_OCT = 0 ;
     
 }
 ######################
  if ($Trim_Nov != 0 or $Trim_Nov != "") {
   
     $EFDT_NOV = $Trim_Nov;
 } else {
      $EFDT_NOV = 0 ;
 }
 ########################
  if ($Trim_Dec != 0 or $Trim_Dec != "") {
   
      $EFDT_DEC = $Trim_Dec;
 } else {
     $EFDT_DEC = 0 ;
 }
 ##########################
  if ($Trim_Jan != 0 or  $Trim_Jan != "") {
   $EFDT_JAN = $Trim_Jan;
     
 } else {
  $EFDT_JAN = 0 ;
     
 }
 ############################

  if ($Trim_Feb != 0 or  $Trim_Feb != "") {
   
   $EFDT_FEB = $Trim_Feb;
     
 } else {
     $EFDT_FEB = 0 ;
 }
 #########################

  if ($Trim_Mar != 0 or $Trim_Mar != "") {
   $EFDT_MAR = $Trim_Mar;
     
 } else {
   $EFDT_MAR = 0 ;
     
 }
##########################


  if ($Trim_TOTAL != 0 or $Trim_TOTAL != "") {
 $EFDT_TOTAL = $Trim_TOTAL;
     
 } else {
     
     $EFDT_TOTAL = 0 ;
 }
##########################


 if ($trim_efdt == "") {
  $EFDT = '00000000';
     
 } else {
     $EFDT = $trim_efdt;
 }
   
  $SOPOH = odbc_fetch_array( odbc_exec($conn, " select  OHCCTX,OHSTRG  from smcdta.SOPOH where  OHCUSN = '".trim($_POST['O1CUSN'])."' limit 1  ") );
    $OHCCTX = iconv("windows-874", "utf-8", $SOPOH["OHCCTX"]);
    $OHSTRG = iconv("windows-874", "utf-8", $SOPOH["OHSTRG"]);
  
    $OHCCTX_T  = trim($OHCCTX);
      $OHSTRG_T  = trim($OHSTRG);
   


    

  
$SOPO1_test12 = odbc_fetch_array( odbc_exec($conn, " select  *   from  smcdta.sopo1
      where  O1CUSN = '".trim($_POST['O1CUSN'])."'   ") );

 
$O1TAD1  =   iconv("windows-874", "utf-8", $SOPO1_test12["O1TAD1"]);
$O1TAD2  =   iconv("windows-874", "utf-8", $SOPO1_test12["O1TAD2"]);
$O1TAD3  =   iconv("windows-874", "utf-8", $SOPO1_test12["O1TAD3"]);
$O1TAD4  =   iconv("windows-874", "utf-8", $SOPO1_test12["O1TAD4"]);
$O1CTNM  =   iconv("windows-874", "utf-8", $SOPO1_test12["O1CTNM"]);
$O1CHQP  =   iconv("windows-874", "utf-8", $SOPO1_test12["O1CHQP"]);
$O1TLNO  =   iconv("windows-874", "utf-8", $SOPO1_test12["O1TLNO"]);
$O1FXNO  =   iconv("windows-874", "utf-8", $SOPO1_test12["O1FXNO"]);
$O1RGEX  =   iconv("windows-874", "utf-8", $SOPO1_test12["O1RGEX"]);
$O1TSR1  =   iconv("windows-874", "utf-8", $SOPO1_test12["O1TSR1"]);
$O1ECNM  =   iconv("windows-874", "utf-8", $SOPO1_test12["O1ECNM"]);


if (trim($_POST['Sales_Man_Dis']) != " ") {
      $sales_valid = trim($_POST['Sales_Man_Dis']);
} else {
    $sales_valid = ".";
}

   $statement =  "insert into smcdta.SOPDG
                                     (DGCOCD,DGRFNO,
                                      DGYEAR,DGMN01,
                                      DGMN02,DGMN03,
                                      DGMN04,DGMN05,
                                      DGMN06,DGMN07,
                                      DGMN08,DGMN09,
                                      DGMN10,DGMN11,
                                      DGMN12,DGTTAL,
                                      DGAMGR,DGRGEX,
                                      DGAMG1,DGOCR1,
                                      DGCENM,DGGRP2,
                                      DGINDT,DGWMIX,
                                      
                                      DGCUSN,DGENUC,                  
                                      DGCCTX,DGSTRG,
                                      DGECNM,DGURIS,
                                      DGOPDT,DGOPTM,
                                      DGUSSQ,DGURID,
                                      DGEMA1,DGTLNO,
                                      DGPOEN,DGOCW1,
                                      DGOCW2,DGOCW3,
                                      DGOCW4,DGOCW5,
                                      DGOCW6, 
                                      DGESR1
                                        
                                                                       
                                        
                                            )
                                      values('02','',
                                      '".trim($Year_1)."','".$EFDT_APR."',
                                      '".$EFDT_MAY."','".$EFDT_JUN."',
                                      '".$EFDT_JUL."','".$EFDT_AUG."',
                                      '".$EFDT_SEP."','".$EFDT_OCT."',
                                      '".$EFDT_NOV."','".$EFDT_DEC."',
                                      '".$EFDT_JAN."','".$EFDT_FEB."',
                                      '".$EFDT_MAR."','".trim($_POST['total'])."',
                                       '".trim($_POST['OBAMGR111'])."','".trim($_POST['O1RGEX'])."',
                                      '".trim($_POST['OBAMGR11'])."','".$sales_valid."',
                                      '".trim($_POST['Contact_Name'])."','".trim($_POST['INDT1'])."',
                                      '".trim($_POST['INDT'])."','".trim($_POST['OWMIX'])."',
                                       
                                       '".trim($_POST['O1CUSN'])."','".trim($_POST['User_Code_Dist'])."',                        
                                       '".$OHCCTX_T."','".$OHSTRG_T."',
                                      '".trim($_POST['Distributor_name'])."','".trim($_POST['Distributor'])."',
                                      '".date("Ymd")."','".date("His")."',
                                      '".$_SESSION["USUSID"]."','".trim($_POST['Distributor'])."',
                                      '".trim($_POST['Email'])."','".trim($_POST['Tel'])."',
                                      '".trim($_POST['Position'])."','".trim($_POST['Remark_1'])."', 
                                      '".trim($_POST['Remark_2'])."','".trim($_POST['Remark_3'])."',
                                      '".trim($_POST['Remark_4'])."','".trim($_POST['Remark_5'])."',
                                      '".trim($_POST['Remark_6'])."' , 
                                      '".trim($_POST['O1TSR1'])."'
                                                                                     )";
                                               
 

#echo $statement;
   $insert_sopdg  = odbc_exec($conn, $statement);
  
  //echo $statement;
    $user_no = trim($_POST['O1CUSN']);

        $user_no1 =   $user_no." ".$Distri;
        $PARM_CODE =  '6'.$user_no1;
          
        $querySOE50460 = "CALL   SMCPGM.SOE13592E1  ('".$PARM_CODE."')  " ;  
        $resultsCall = odbc_exec($conn, $querySOE50460);






  ################## upload file and sql insert ####################
        if( $_FILES["imagefile"]["error"] == 1 ){

          echo "<script> alert('Attachment error please check  type of file '); window.history.back();</script>";

        }

        //// 2mb = 2048000
        if( $_FILES["imagefile"]["size"] > 2048000  ){
              
          echo "<script> alert('Attachment error please check limit of file '); window.history.back();</script>";


        }else{

        ### remove // for enable function ###
          

        // Name path builder
        //
        //  $? Get Statementnumber in Query 
        //  
        //  $file_name = $?;
  

       $querystr_SOPDG = odbc_exec($conn,"select  DGRFNO  from smcdta.SOPDG     where  DGURID  = '".trim($_POST['Distributor'])."'  and   DGCUSN    = '".trim($_POST['O1CUSN'])."' and   DGOPDT = '".date("Ymd")."'  and DGENUC   = '".$_POST['User_Code_Dist']."'    limit 1   ");
        $result_sopdg = odbc_fetch_array($querystr_SOPDG);
       $DGRFNO1 = iconv("windows-874", "utf-8", $result_sopdg["DGRFNO"]);
 
      $result_total_trim  = $DGRFNO1;
 

   $update_sopca  = odbc_exec($conn, "update smcdta.CUSTREFJ1 set   CADSTC = '".trim($_POST["Distributor"])."'  
      where  CARFNO   = '".$result_total_trim."'  ");


  /* $update_sopcf  = odbc_exec($conn, "update smcdta.DSTBMSRF set   CFDSTC  = '".trim($_POST["Distributor"])."'  
      where  CFRFNO   = '".$result_total_trim."'  ");*/

 

          $type_file = substr($_FILES["imagefile"]["name"],strpos($_FILES["imagefile"]["name"],"."));


           $new_name = "//10.0.0.30/UMR/".$result_total_trim.$type_file;
        // Name path builder

         $move2path = move_uploaded_file($_FILES["imagefile"]["tmp_name"],$new_name );
       

  $SQL->query($insert_sql);
          }


         if( $move2path == true ){

              // SQL Insert
              //  Statement query
              // SQL Insert


    $insert_sql .= "INSERT INTO [PJ_mail].[dbo].[Umr_File]
           ([Umrno]  
           ,[Status]
           ,[Linkfile]
           ,[Date_add]
           ,[Time_add])
     VALUES
           ('".$result_total_trim."'  
           ,'1'
           ,'".$new_name."'
           ,'".date("Y-m-d")."'
           ,'".date("h:i:sa")."')";

  $SQL->query($insert_sql);
          }
           else{

            echo "<script> alert(' ERROR Cannot Write New file to path '); window.history.back();</script>";

        }


   ################## upload file and sql insert ####################



#echo $_POST['O1CUSN']." ".$_POST['Distributor'];
 

  
     header("location:http://mail.smcthai.co.th:8082/pj_mail/M_UMR/web/index_mail.PHP");
     odbc_close($conn);
        ob_end_flush();  

        



?>
