<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "phpweb1";

$con = mysqli_connect($server,$user,$password,$db);

if($con){
	// echo "Connection successfull";
}else{
	echo "No connection";
}

?>