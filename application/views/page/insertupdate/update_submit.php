<?php
date_default_timezone_set('Asia/Bangkok');
include "conf.inc.php";
error_reporting(0);
session_start();
if ($_SESSION["USUSID"] == "") {
header("location:./index.php");
}

 
$REFNO_RESULT = $_GET['num'];
$REFNO_RESULT_trim = trim($REFNO_RESULT);
$User_name  = "";

 
 
 $querystr_SOPCA = odbc_exec($conn,"select *  from smcdta.SOPCA where  CARFNO = '".$REFNO_RESULT_trim."'  ");
    $result_sopca = odbc_fetch_array($querystr_SOPCA);
    $CASTAT = iconv("windows-874", "utf-8", $result_sopca["CASTAT"]);
    $CACTNM = iconv("windows-874", "utf-8", $result_sopca["CACTNM"]);
    $CACUSN = iconv("windows-874", "utf-8", $result_sopca["CACUSN"]);
    $CADSTC = iconv("windows-874", "utf-8", $result_sopca["CADSTC"]);
    $CAURID = iconv("windows-874", "utf-8", $result_sopca["CAURID"]);
    $CASTAT = iconv("windows-874", "utf-8", $result_sopca["CASTAT"]);
    $CACTNM = iconv("windows-874", "utf-8", $result_sopca["CACTNM"]);
    $CABRCD  = iconv("windows-874", "utf-8", $result_sopca["CABRCD"]);
    $CARFDT = iconv("windows-874", "utf-8", $result_sopca["CARFDT"]);
    $CARFNO = iconv("windows-874", "utf-8", $result_sopca["CARFNO"]);
   $CASTAT_trim1 = trim($CASTAT); 
  


    $querystr_SOPCF = odbc_exec($conn," select  CFUSRC from smcdta.sopcf where CFRFNO = '".$REFNO_RESULT_trim."'  ");
       $result_sopcf = odbc_fetch_array($querystr_SOPCF);
       $CFUSRC = iconv("windows-874", "utf-8", $result_sopcf["CFUSRC"]);

 

         $str_sophu = odbc_exec($conn, "select HURFNO  from smcdta.sophu where HURFNO  = '".$REFNO_RESULT_trim."'  and HUCUSN ='".$CACUSN ."' and HUUSRC = '".$CFUSRC."'  ");
            $result_sophu = odbc_fetch_array($str_sophu);
            $HURFNO = iconv("windows-874", "utf-8", $result_sophu["HURFNO"]);


 
  
    $usid = trim($CADSTC);
     $opt  = '9';
      

      #  $A1 = $opt.$REFNO_RESULT_trim.$_GET['cusn']." ".$usid;

    #   $querySOE50460 = "CALL   smcdta.SOE13590 ('$A1')  " ; //   REQ000000007 ?????? Q5REQNO
    #   $resultsCall = odbc_exec($conn, $querySOE50460);


//////////////////////////////



  $insert_sophu  = odbc_exec($conn, "insert into smcdta.SOPCAO
                                     (COCOCD,COCSM0,
                                       COOPDT,
                                      COOPTM,COURID,CORFNO)
                                      values('02','0',
                                       '".date("Ymd")."',
                                      '".date("His")."','".$CADSTC."','".$REFNO_RESULT_trim."'  ) ");
 


     

         $update_sopica_update   = odbc_exec($conn, "update smcdta.CUSTREFJ1 set   CASTAT  = 'M'   where  CARFNO    = '".$REFNO_RESULT_trim."'  ");

 
   $TEXT = "Summit Rererence No.".$REFNO_RESULT_trim." ";
      $update_sophp_update   = odbc_exec($conn, "update smcdta.SOPHP set
    HPCUSN  = '".$CACUSN."',HPEVNC ='22',HPEVN1 = '".$TEXT."' ,HPSTAT = 'M', HPOPBY  = '".$CADSTC."',HPPGID = 'Mail'    where  HPRFNO     = '".$REFNO_RESULT_trim."'  ");




       header("location:http://mail.smcthai.co.th:8082/PJ_MAIL/M_UMR/send_mail.PHP?REFO=".$REFNO_RESULT_trim." ");
 
 

    odbc_close($conn);
        ob_end_flush();

       
 ?>
