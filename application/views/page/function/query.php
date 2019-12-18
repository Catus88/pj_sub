<?php 
include "connect.php";



  
  /*	$SOPCA = odbc_fetch_array( odbc_exec($conn, " select CACENM,CACTNM,CAEAD1,CAEAD2,CAEAD3,CAEAD4,CATAD1,CATAD2,CATAD3,CATAD4,CAPSTC,CATLNO,CAFXNO,CATCNM ,CAECNM,CACUSN,CARFDT,CARFNO,CAEFDT,CACHQP,CARGEX,CADSTC,CATSR1,OHCCTX,OHSTRG   from smcdta.SOPCA a  join smcdta.SOPOH b on a.CACUSN = b.OHCUSN

 where  OHCCTX = '".$_POST["name_customer"]."' or OHCUSN = '".$_POST["name_customer"]."'   limit 1  ") ); */






/*  	$SOPO1 = odbc_fetch_array( odbc_exec($conn, " select O1RGEX,O1CUSN,O1ECNM,O1TCNM,O1CENM,O1CTNM,O1EAD1,O1EAD2,O1EAD3,O1EAD4,O1TAD1,O1TAD2,O1TAD3,O1TAD4,O1PSTC,O1TLNO,O1FXNO,O1EFDT,O1CHQP,O1TSR1  from smcdta.sopo1  a  join smcdta.SOPOH b on a.O1CUSN = b.OHCUSN
        where  OHCCTX = '".$_POST["name_customer"]."'   limit 1   ") );
*/

            $SOPO1 = odbc_fetch_array( odbc_exec($conn, " select O1RGEX,O1CUSN,O1ECNM,O1TCNM,O1CENM,O1CTNM,O1EAD1,O1EAD2,O1EAD3,O1EAD4,O1TAD1,O1TAD2,O1TAD3,O1TAD4,O1PSTC,O1TLNO,O1FXNO,O1EFDT,O1CHQP,O1TSR1,O1TRRY,OHCCTX  from smcdta.sopo1  a  join smcdta.SOPOH b on a.O1CUSN = b.OHCUSN
        where  OHCCTX = '".$_POST["taxid"]."' and OHSTRG = '". substr($_POST["brachid"], 2,3) ."'  or OHCUSN = '".trim($_POST["cacusnid"])."' limit 1  ") );

//or OHCUSN = '".$_POST["name_customer"]."'

    $O1TAD1 = iconv("windows-874", "utf-8", $SOPO1["O1TAD1"]);
    $O1TAD2 = iconv("windows-874", "utf-8", $SOPO1["O1TAD2"]);
    $O1TAD3 = iconv("windows-874", "utf-8", $SOPO1["O1TAD3"]);
    $O1TAD4 = iconv("windows-874", "utf-8", $SOPO1["O1TAD4"]);
    $O1CHQP = iconv("windows-874", "utf-8", $SOPO1["O1CHQP"]);
    $O1TSR1 = iconv("windows-874", "utf-8", $SOPO1["O1TSR1"]); 
    $O1TCNM = iconv("windows-874", "utf-8", $SOPO1["O1TCNM"]); 
    $O1CTNM = iconv("windows-874", "utf-8", $SOPO1["O1CTNM"]); 
    $O1ECNM = iconv("windows-874", "utf-8", $SOPO1["O1ECNM"]); 
    $O1EAD1 = iconv("windows-874", "utf-8", $SOPO1["O1EAD1"]); 
    $O1EAD2 = iconv("windows-874", "utf-8", $SOPO1["O1EAD2"]); 
    $O1EAD3 = iconv("windows-874", "utf-8", $SOPO1["O1EAD3"]); 
    $O1EAD4 = iconv("windows-874", "utf-8", $SOPO1["O1EAD4"]);   
    $O1FXNO = iconv("windows-874", "utf-8", $SOPO1["O1FXNO"]); 
    $O1TLNO = iconv("windows-874", "utf-8", $SOPO1["O1TLNO"]); 
    $O1PSTC = iconv("windows-874", "utf-8", $SOPO1["O1PSTC"]); 
    $O1CENM = iconv("windows-874", "utf-8", $SOPO1["O1CENM"]); 
    $O1CUSN = iconv("windows-874", "utf-8", $SOPO1["O1CUSN"]);   
    $O1RGEX = iconv("windows-874", "utf-8", $SOPO1["O1RGEX"]);
    $O1TSR1 = iconv("windows-874", "utf-8", $SOPO1["O1TSR1"]);   
    $OHCCTX = iconv("windows-874", "utf-8", $SOPO1["OHCCTX"]); 
    $OHSTRG = iconv("windows-874", "utf-8", $SOPO1["OHSTRG"]);    

  	$SOPO8 = odbc_fetch_array( odbc_exec($conn, " select O8CENM,O8CTNM,O8TAD1,O8EAD1,O8EAD2,O8EAD3,O8TLNO,O8FXNO,O8PSTC,O8TAD2,O8TAD3  from smcdta.SOPO8 where  O8CUSN = '". trim($SOPO1['O1CUSN']) ."'  limit 1  ") );
    $O8TAD1 = iconv("windows-874", "utf-8", $SOPO8["O8TAD1"]);
    $O8TAD2 = iconv("windows-874", "utf-8", $SOPO8["O8TAD2"]);
    $O8TAD3 = iconv("windows-874", "utf-8", $SOPO8["O8TAD3"]);
    $O8CENM = iconv("windows-874", "utf-8", $SOPO8["O8CENM"]);
    $O8EAD1 = iconv("windows-874", "utf-8", $SOPO8["O8EAD1"]);
    $O8EAD2 = iconv("windows-874", "utf-8", $SOPO8["O8EAD2"]);
    $O8EAD3 = iconv("windows-874", "utf-8", $SOPO8["O8EAD3"]);
    $O8FXNO = iconv("windows-874", "utf-8", $SOPO8["O8FXNO"]);
    $O8PSTC = iconv("windows-874", "utf-8", $SOPO8["O8PSTC"]);
    $O8TLNO = iconv("windows-874", "utf-8", $SOPO8["O8TLNO"]);
    $O8CTNM = iconv("windows-874", "utf-8", $SOPO8["O8CTNM"]);

  	$SOPOH = odbc_fetch_array( odbc_exec($conn, " select  OHCCTX,OHSTRG,OHGRP1,OHGRP2  from smcdta.SOPOH where  OHCUSN = '".$SOPO1['O1CUSN']."' limit 1  ") );
    $OHCCTX = iconv("windows-874", "utf-8", $SOPOH["OHCCTX"]);
    $OHGRP1 = iconv("windows-874", "utf-8", $SOPOH["OHGRP1"]);
    $OHGRP2 = iconv("windows-874", "utf-8", $SOPOH["OHGRP2"]);
     $INDT = $OHGRP1;
     $INDT1 = $OHGRP2;
  	$SOPOW = odbc_fetch_array( odbc_exec($conn, " select  OWINDC ,OWGLEM ,OWGLEU,OWPRJP  from smcdta.SOPOW where  OWCUSN = '". trim($SOPO1['O1CUSN']) ."' limit 1  "));
     #  $INDT = substr($SOPOW['OWINDC'],0,2);

    $OWPRJP = iconv("windows-874", "utf-8", $SOPOW["OWPRJP"]);
    $OWGLEM = iconv("windows-874", "utf-8", $SOPOW["OWGLEM"]);    
    $OWGLEU = iconv("windows-874", "utf-8", $SOPOW["OWGLEU"]); 
    $OWINDC = iconv("windows-874", "utf-8", $SOPOW["OWINDC"]); 
    $OWGLEM = iconv("windows-874", "utf-8", $SOPOW["OWGLEM"]); 
    $OWGLEU = iconv("windows-874", "utf-8", $SOPOW["OWGLEU"]);   
    $OWPRJP = iconv("windows-874", "utf-8", $SOPOW["OWPRJP"]);           
  
//////

  	$SOPLE = odbc_fetch_array( odbc_exec($conn, " select  LETRRY  from smcdta.SOPLE where  LECUSN = '". trim($SOPO1['O1CUSN'])."' ORDER BY     LEEFDT desc   limit 1   "));

        $LETRRY = iconv("windows-874", "utf-8", $SOPLE["LETRRY"]);

     
///


  	


   	$SOPDG = odbc_fetch_array( odbc_exec($conn, " select  DGPOEN,DGCENM,DGTLNO,DGEMA1   from smcdta.SOPDG where  DGCUSN  = '".trim($SOPO1['O1CUSN'])."'  limit 1   "));
            $DGPOEN = iconv("windows-874", "utf-8", $SOPDG["DGPOEN"]);
            $DGCENM = iconv("windows-874", "utf-8", $SOPDG["DGCENM"]);
             $DGTLNO = iconv("windows-874", "utf-8", $SOPDG["DGTLNO"]);
            $DGEMA1 = iconv("windows-874", "utf-8", $SOPDG["DGEMA1"]);            

 

    $SOPHU = odbc_fetch_array( odbc_exec($conn, " select HUCCUN  from smcdta.SOPHU where  HUCUSN  = '".trim($SOPO1['O1CUSN'])."'   limit 1    "));
 
  
            $HUCCUN = iconv("windows-874", "utf-8", $SOPHU["HUCCUN"]);  
 
  


    $SOPOA = odbc_fetch_array( odbc_exec($conn, "  select  OASLMN  from smcdta.SALETRR3 where  OATRRY = '".$SOPO1['O1TRRY']."'  ORDER BY OAEFDT desc limit 1   "));
             $OASLMN = iconv("windows-874", "utf-8", $SOPOA["OASLMN"]);  
          
    $SOPOB = odbc_fetch_array( odbc_exec($conn, "  select  OBAMGR  from smcdta.SOPOB where  OBSLMN = '".$SOPOA['OASLMN']."' limit 1   "));
 
  $OBAMGR = iconv("windows-874", "utf-8", $SOPOB["OBAMGR"]);  

    $SOPOB2 = odbc_fetch_array( odbc_exec($conn, "  select  O7ESNM  from smcdta.SOPO7 where  O7SLMN = '".$SOPOA['OASLMN']."' limit 1   "));
$O7ESNM = iconv("windows-874", "utf-8", $SOPOB2["O7ESNM"]);  
 
    $SOPO71 = odbc_fetch_array( odbc_exec($conn, "  select  O7ESNM  from smcdta.SOPO7 where  O7SLMN = '".$SOPOB['OBAMGR']."' limit 1   "));
      
    $O7ESNM1 = iconv("windows-874", "utf-8", $SOPO71["O7ESNM"]);  
    $SOPEX = odbc_fetch_array( odbc_exec($conn, "  select  EXEDES  from smcdta.SOPEX where  EXEXTP  = 'CNTY'  and EXEXCD =  '".$SOPO1['O1TSR1']."'   limit 1   "));
 
  $EXEDES = iconv("windows-874", "utf-8", $SOPEX["EXEDES"]); 
      $OHSTRG1_1 = "00".$SOPOH["OHSTRG"];

   		$array_all = array( "O1TSR1" => $O1TSR1, "OHCCTX" => $OHCCTX,"OHSTRG" => $OHSTRG,"O1RGEX" => $O1RGEX,  

			"O1CUSN" => $O1CUSN,"O1ECNM" => $O1ECNM,"O1TCNM" => $O1TCNM,"O1CENM" => $O1CENM,"O1CTNM" => $O1CTNM,
      "O1EAD1" => $O1EAD1,"O1EAD2" => $O1EAD2,"O1EAD3" => $O1EAD3,"O1EAD4" => $O1EAD4,"O1TAD1" => $O1TAD1,
      "O1TAD2" => $O1TAD2,"O1TAD3" => $O1TAD3,"O1TAD4" => $O1TAD4,"O1PSTC" => $O1PSTC,"O1TLNO" => $O1TLNO,"O1FXNO" => $O1FXNO,
      "O1EFDT" => $SOPO1["O1EFDT"],"OBAMGR11" => $OBAMGR.$O7ESNM1,"O1CHQP" => $O1CHQP,"OBAMGR111" => $OASLMN.$O7ESNM,

  


 
 
			 "O8CENM" => $O8CENM,"O8CTNM" => $O8CTNM,"O8TAD1" => $O8TAD1,"O8EAD1" => $O8EAD1,"O8EAD2" => $O8EAD2,"O8EAD3" => $O8EAD3,"O8TLNO" => $O8TLNO,"O8FXNO" => $O8FXNO,"O8PSTC" => $O8PSTC,"O8TAD2" => $O8TAD2,"O8TAD3" => $O8TAD3,

        "OHCCTX1" => $OHCCTX,"OHSTRG1" => $OHSTRG1_1, 

			"OWINDC" => $OWINDC,"OWGLEM" => $OWGLEM,"OWGLEU" => $OWGLEU,"OWPRJP" => $OWPRJP,"OWMIX" => $OWINDC.$OWGLEM.$OWGLEU.$OWPRJP,"INDT" => $INDT, 
      "INDT1"=>$INDT1,    

 

			"LETRRY" => $LETRRY,


   		"DGPOEN" => $DGPOEN,"DGCENM" => $DGCENM,"DGTLNO" => $DGTLNO,"DGEMA1" => $DGEMA1,

   		"HUCCUN" => $HUCCUN,


   	 

  	 
  		"OASLMN" => $OASLMN, 
   		"OBAMGR" => $OBAMGR,   
   		"EXEDES" => $EXEDES,  
   		"O7ESNM" => $O7ESNM1,  
   		"O7ESNM_N" => $O7ESNM );

 
 


        echo json_encode($array_all);
   	//	 print_r($SOPCA);

?>