<?php 
include "connect.php";
  
  $is_checked = 0;



  if ( isset( $_POST["taxid"] ) ) {
   


      $check_tax = odbc_fetch_array( odbc_exec($conn, "  select OHCCTX  from smcdta.SOPOH  where  OHCCTX = '".$_POST["taxid"]."'   limit 1 ") );


      if ( trim($check_tax["OHCCTX"]) == $_POST["taxid"]) {

        $is_checked = 1;

      }


  }


    if ( isset( $_POST["brachid"] ) ) {
   


      $check_tax = odbc_fetch_array( odbc_exec($conn, "    select OHSTRG from smcdta.SOPOH  where  OHSTRG = '".substr($_POST["brachid"], 2,3)."'   limit 1  ") );


      if ( trim($check_tax["OHSTRG"]) == $_POST["brachid"]) {

        $is_checked = 1;

      }


  }




    if ( isset( $_POST["Usercode"] ) ) {
   

    $check_disendcode = odbc_fetch_array( odbc_exec($conn, " select a.CFUSRC  from  smcdta.SOPCF   a join  smcdta.sopca b  on  a.CFDSTC  = b.CADSTC
      where  a.CFDSTC = '".$_POST["Districode"]."'  and  b.CACUSN = '".$_POST["Smccode"]."'  and  a.CFUSRC   = '".$_POST["Usercode"]."'   ORDER BY  a.CFOPDT DESC   ") );

    if ( trim($check_disendcode["CFUSRC"])  == $_POST["Usercode"] ) {
         
         $is_checked = 1;
    }

        

  }

    echo $is_checked;


?>