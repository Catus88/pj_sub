<?php
session_start();
session_destroy();
try {
		header("location:./index.php");
} catch (Exception $e) {
	echo "error".$e;
}

?>