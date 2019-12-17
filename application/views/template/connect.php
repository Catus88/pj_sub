<?php
//$servername="hs4oki";//servername
date_default_timezone_set("Asia/Bangkok");
$servername="10.0.0.12";//servername
//$servername="edpc04";//servername
$database="Test";//database name
$user="sa";//user
$pass="smcadmin";//password

$connection="DRIVER={SQL Server};SERVER=$servername;DATABASE=$database;AutoTranslate=no;";

//$connection= "Driver={SQLServer};Server=$servername;Database=$database;Uid=$user;Pwd=$pass;" ;

$con= odbc_connect($connection,$user,$pass) or Die("notconnect DB");//ODBC Connct
	if (!$con) {
	echo "<h3>ERROR :Connection</h3>";
	exit();
	}//else{echo "<h3>OK :Connection</h3>";}


date_default_timezone_set('Asia/Bangkok');
$user1="DBCONPHP"; #a valid username that will connect to the DB
$pass2="DBCONPHP"; #a password for the username


//CCSID=01208 for set utf8 query   /*  
//$server="Driver={Client Access ODBC Driver (32-bit)};System=as400.smcth.co.th;CCSID=01208; Uid=user;Pwd=password;";  
$server1="Driver={Client Access ODBC Driver (32-bit)};System=as400.smcth.co.th;Uid=user;Pwd=password;"; #the name of the iSeries
$conn=odbc_connect($server1,$user1,$pass2); #you may have to remove quotes
?>
