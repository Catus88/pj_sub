<?php ob_start(); ?>
<meta charset="utf-8">
<?php
date_default_timezone_set('Asia/Bangkok');
include "conf.inc.php";  // import file conf
session_start();




$user_login = $_POST["member_code"];
$pass_login = $_POST["member_pass"];
$STRQTY = "select  *  from [StockPrice].[dbo].[Username]  where [UserN]  ='".$user_login."' and [Passwd] = '".$pass_login."' 
 ";


$login_result = odbc_fetch_array(odbc_exec($con, $STRQTY));
	if (trim($login_result["UserN"])) {
	//if (trim($login_result["USUSID"]) == "SALDRRT") {
		//if ($login_result){
		try {

		
		$_SESSION["USUSID"] = $login_result["UserN"]; 
		session_write_close();	
		} catch (Exception $e) {
			header("location:./index.php");
		}
		header("location:./index_mail.php");

	}

		else

		{
					header("location:./index.php?fail=1");

			}
?>
<?php  ob_end_flush(); ?>