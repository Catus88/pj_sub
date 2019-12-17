<?php
date_default_timezone_set('Asia/Bangkok');
include "conf.inc.php";
error_reporting(0);
session_start();
if ($_SESSION["USUSID"] == "") {
header("location:./index.php");
}

 $LOGIN =  trim($_SESSION["USUSID"]);


 
$REFNO_RESULT = $_POST['CARFNO'];
$REFNO_RESULT_trim = trim($REFNO_RESULT);
$User_name  = "";

 $querystr_SOPCA = odbc_exec($conn,"select *  from smcdta.SOPCA where  CARFNO = '".$REFNO_RESULT_trim."' ");
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
 $CASTAT_trim1 = trim($result_sopca["CASTAT"]);
    $querystr_SOPCAA = odbc_exec($conn,"select CASTAT  from smcdta.SOPCA where  CARFNO = '".$REFNO_RESULT_trim."' ");
       $result_sopcaa = odbc_fetch_array($querystr_SOPCAA);
       $CASTAT1 = iconv("windows-874", "utf-8", $result_sopcaa["CASTAT"]);
       $CASTAT_trim = trim($result_sopcaa["CASTAT"]);


    $querystr_SOPCF = odbc_exec($conn," select  CFUSRC from smcdta.sopcf where CFRFNO = '".$REFNO_RESULT_trim."'  ");
       $result_sopcf = odbc_fetch_array($querystr_SOPCF);
       $CFUSRC = iconv("windows-874", "utf-8", $result_sopcf["CFUSRC"]);


         $des_cancle =  trim($_POST['cancle1']);
           $str_comment = odbc_exec($conn, "select EXEXCD,EXEDES from smcdta.sopex where EXEXTP  = 'CCUR' and EXEDES = '".$des_cancle."'  ");
              $result_sopex = odbc_fetch_array($str_comment);
              $EXEXCD = iconv("windows-874", "utf-8", $result_sopex["EXEXCD"]);
         $EXEDES = iconv("windows-874", "utf-8", $result_sopex["EXEDES"]);

         $str_sophu = odbc_exec($conn, "select HURFNO  from smcdta.sophu where HURFNO  = '".$REFNO_RESULT_trim."'  and HUCUSN ='".$CACUSN ."' and HUUSRC = '".$CFUSRC."'  ");
            $result_sophu = odbc_fetch_array($str_sophu);
            $HURFNO = iconv("windows-874", "utf-8", $result_sophu["HURFNO"]);
 

           
  
 $usid = trim($_SESSION["USUSID"]);

  $DATC = trim($_POST['Distributor']);

      $AA = '4'.$REFNO_RESULT_trim.trim($CACUSN)." ".$DATC;
          $querySOE50460 = "CALL   SMCPGM.SOE13590  ('$AA')  " ;  
       $resultsCall = odbc_exec($conn, $querySOE50460);



  $update_sopca1  = odbc_exec($conn, "update smcdta.sopcf  set  CFACTF  = 'D'    where  CFRFNO   = '".$REFNO_RESULT_trim."'  ");


  $update_sopca  = odbc_exec($conn, "update smcdta.CUSTREFJ1 set   CASTAT = 'D'  
      where  CARFNO   = '".$REFNO_RESULT_trim."'  ");
 
  
  $update_sopca11  = odbc_exec($conn, "update smcdta.CUSTREFJ1 set   CAURID  = '".$LOGIN."'  
      where  CARFNO   = '".$REFNO_RESULT_trim."'  ");


  $update_sopcaHP  = odbc_exec($conn, "update smcdta.sophp set   HPCUSN  = '".trim($CACUSN)."'  
      where  HPRFNO    = '".$REFNO_RESULT_trim."'  and  HPEVNC  =    '03'   ");

if ($HURFNO == $REFNO_RESULT_trim) {
     $update_sophu  = odbc_exec($conn, "update smcdta.SOPHU set
                                  HUCCUR = '".$EXEXCD."',HUCCUN ='".$EXEDES."',
                                  HUOPBY ='".$DATC."',HUOPDT ='".date("Ymd")."',
                                  HUOPTM ='".date("His")."',HUPGID ='mail',
                                  HUWSID ='mail',HUUSID ='mail',HUDSTC = '".$DATC."'  
                                   where  HURFNO = '".$REFNO_RESULT_trim."' and HUCUSN ='".$_POST['CFUSRC']."' and HUUSRC = '".$CFUSRC."'  ");
}else {


  $insert_sophu  = odbc_exec($conn, "insert into smcdta.SOPHU
                                     (HUCOCD,HURFNO,
                                       HUCUSN,
                                      HUUSRC,HUCCUR,
                                      HUCCUN,HUOPBY,
                                      HUOPDT,HUOPTM,
                                      HUPGID,HUDSTC,
                                      HUUSID,HUSTAT,
                                      HUWSID  )
                                      values('02','".$REFNO_RESULT_trim."',
                                       '".trim($CACUSN)."',
                                      '".$CFUSRC."','".$EXEXCD."',
                                      '".$EXEDES."','".$DATC."',
                                      '".date("Ymd")."','".date("His")."',
                                      'mail','".$DATC."',
                                      '".$DATC."','D',
                                       'mail') ");
}




   header("location:http://mail.smcthai.co.th:8082/pj_mail/M_UMR/web/index_mail.PHP ");
 
 

    odbc_close($conn);
        ob_end_flush();
 
?>
