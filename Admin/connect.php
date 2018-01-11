<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "online book store";

$connection = new mysqli($server,$user,$password,$dbname);

if($connection->connect_error){
	echo "sorry,error";
}else{
	//echo "success";
}


?>