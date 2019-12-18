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


#print_r( $_POST);

 
$REFNO_RESULT = $_POST['CARFNO'];
$REFNO_RESULT_trim = trim($REFNO_RESULT);



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

          $type_file = substr($_FILES["imagefile"]["name"],strpos($_FILES["imagefile"]["name"],"."));


           $new_name = "//10.0.0.30/UMR/".$REFNO_RESULT_trim.$type_file;
        // Name path builder

         $move2path = move_uploaded_file($_FILES["imagefile"]["tmp_name"],$new_name );
       

  $SQL->query($insert_sql);
          }


         if( $move2path == true ){

              // SQL Insert
              //  Statement query
              // SQL Insert
  

          $insert_sql .= "UPDATE [PJ_mail].[dbo].[Umr_File]
         SET 
             [Linkfile] = '".$new_name."'
            ,[Date_add] = '".date("Y-m-d")."'
            ,[Time_add] = '".date("h:i:sa")."'
            WHERE [Umrno] = '".$REFNO_RESULT_trim."' ";

        $SQL->query($insert_sql);
                }
                 else{

                  echo "<script> alert(' ERROR Cannot Write New file to path '); window.history.back();</script>";

              }


   ################## upload file and sql insert ####################


$User_name  = "";
$remark1 = trim($_POST['Remark_1']);
$remark2 = trim($_POST['Remark_2']);
$remark3 = trim($_POST['Remark_3']);
$remark4 = trim($_POST['Remark_4']);
$remark5 = trim($_POST['Remark_5']);
$remark6 = trim($_POST['Remark_6']);

 $querystr_SOPCA = odbc_exec($conn,"select *  from smcdta.SOPCA where  CARFNO = '".$REFNO_RESULT_trim."' ");
    $result_sopca = odbc_fetch_array($querystr_SOPCA);
    $CASTAT = iconv("windows-874", "utf-8", $result_sopca["CASTAT"]);
    $CACTNM = iconv("windows-874", "utf-8", $result_sopca["CACTNM"]);
    $CABRCD  = iconv("windows-874", "utf-8", $result_sopca["CABRCD"]);
    $CARFDT = iconv("windows-874", "utf-8", $result_sopca["CARFDT"]);
    $CARFDT = iconv("windows-874", "utf-8", $result_sopca["CARFDT"]);
    $CACUSN = iconv("windows-874", "utf-8", $result_sopca["CACUSN"]);
$CASTAT_trim = trim($CASTAT);

 #$Distri = trim($_POST['Distributor']);

 

 $usid = trim($_SESSION["USUSID"]);
 $DATC = trim($_POST['Distributor']);
        $AA = '2'.$REFNO_RESULT_trim.$_POST['O1CUSN']." ".$DATC ;

 
       
      $querySOE50460 = "CALL   SMCPGM.SOE13592EA  ('$AA')  " ;  
      $resultsCall = odbc_exec($conn, $querySOE50460);
#CADSTC  = '".$Distri."' 
 $update_sopca1  = odbc_exec($conn, "update smcdta.CUSTREFJ1 set CACUSN = '".$_POST['O1CUSN']."' , CADSTC = '".trim($_POST['Distributor'])."'
      where  CARFNO   = '".$REFNO_RESULT_trim."'  ");
  
   /*$update_sopccc  = odbc_exec($conn, "update smcdta.CUSTREBG set
     C#YEAR = '".$_POST['Fiscal_Year']."',C#MN01 = '".$_POST['Apr']."',
     C#MN02 = '".$_POST['May']."',C#MN03 = '".$_POST['Jun']."',
     C#MN04 = '".$_POST['Jul']."',C#MN05 = '".$_POST['Aug']."',
     C#MN06 = '".$_POST['Sep']."',C#MN07 = '".$_POST['Oct']."',
     C#MN08 = '".$_POST['Nov']."',C#MN09 = '".$_POST['Dec']."',
     C#MN10 = '".$_POST['Jan']."',C#MN11 = '".$_POST['Feb']."',
     C#MN12 = '".$_POST['Mar']."',C#TTAL = '".$_POST['total']."' ,
     C#OPBY = '".$_SESSION["USUSID"]."',C#OPDT= '".date("Ymd")."',   
     C#OPTM = '".date("His")."',  C#PGID= 'mail',  C#DSID= 'mail', C#USRC  = '".trim($_POST['User_Code_Dist'])."'
     where   C#RFNO = '".$REFNO_RESULT_trim."'  "); */


$update_sopcc1  = odbc_exec($conn, "update smcdta.SOPCC set
   CCOCR1  = '".$remark1."',CCOCR2 ='".$remark2."',CCOCR3 ='".$remark3."',CCOCR4  ='".$remark4."'
   where  CCTYPE = 'DSRM' and CCRFNO = '".$REFNO_RESULT_trim."'  and CCSEQN  = '1'  ");



$update_sopcc2  = odbc_exec($conn, "update smcdta.SOPCC set
     CCOCR1  = '".$remark5."',CCOCR2 ='".$remark6."'
     where  CCTYPE = 'DSRM' and CCRFNO = '".$REFNO_RESULT_trim."'  and CCSEQN  = '2'  ");
 
 
 

$update_sopcc3  = odbc_exec($conn, "update smcdta.SOPCC set
     CCOCR1  = '".$_POST['Sales_Man_Dis']."' 
     where  CCTYPE = 'SLDS' and CCRFNO = '".$REFNO_RESULT_trim."'  and CCSEQN  = '1'  ");
 


$update_sopdg  = odbc_exec($conn, "update smcdta.sopdg set
     DGPOEN  = '".$_POST['Position']."',  DGCENM  = '".$_POST['Contact_Name']."',  DGTLNO  = '".$_POST['Tel']."',
     DGEMA1  = '".$_POST['Email']."' ,DGOPDT = '".date("Ymd")."' ,DGOPTM  =  '".date("His")."' ,DGURID = '".$DATC."',DGUSSQ = '".$usid."',DGURIS = '".$DATC."'
     where   DGRFNO   = '".$REFNO_RESULT_trim."'    ");

  
 
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
 $EFDT_TOTAL = $_POST['total'];
     
 } else {
     
     $EFDT_TOTAL = 0 ;
 }
##########################




   $update_sopccc  =  "update smcdta.CUSTREBG set
     C#YEAR = '".$_POST['Year']."',C#MN01 = '".$EFDT_APR."',
     C#MN02 = '".$EFDT_MAY."',C#MN03 = '".$EFDT_JUN."',
     C#MN04 = '".$EFDT_JUL."',C#MN05 = '".$EFDT_AUG."',
     C#MN06 = '".$EFDT_SEP."',C#MN07 = '".$EFDT_OCT."',
     C#MN08 = '".$EFDT_NOV."',C#MN09 = '".$EFDT_DEC."',
     C#MN10 = '".$EFDT_JAN."',C#MN11 = '".$EFDT_FEB."',
     C#MN12 = '".$EFDT_MAR."',C#TTAL = '".$_POST['total']."' ,
     C#OPBY = '".$DATC."',C#OPDT= '".date("Ymd")."',   
     C#OPTM = '".date("His")."',  C#PGID= 'mail',  C#DSID= 'mail', C#USRC  = '".trim($_POST['User_Code_Dist'])."'
     where   C#RFNO = '".$REFNO_RESULT_trim."'  " ;

   $insert_sopccc  = odbc_exec($conn, $update_sopccc);

 


$update_sopcf  =   "update smcdta.SOPCf set
     CFUSRC  = '".trim($_POST['User_Code_Dist'])."' 
     where  CFRFNO = '".$REFNO_RESULT_trim."'  " ;


  $insert_sopcf  = odbc_exec($conn, $update_sopcf);


 
     
 
 
 
  header("location:http://mail.smcthai.co.th:8082/PJ_MAIL/M_UMR/web/update_submit.PHP?num=".$REFNO_RESULT_trim."");

 
    odbc_close($conn);
        ob_end_flush();
 ?>
