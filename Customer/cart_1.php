<?php

include('connect.php');
session_start();
$Book_Id=$_GET['Book_Id'];
$Cust_Id=$_GET['Cust_Id'];
	$sql_query = mysqli_query($connection,"SELECT * from books where Book_Id = $Book_Id"); 	
	$row = mysqli_fetch_row($sql_query);
//print_r($row);
		 if($_SESSION == true){
           $login_userid = $_SESSION['login_user'];
if($login_userid){
	$sql="select * from customer where Cust_Id=$login_userid";
	 $result = mysqli_query($connection,$sql);
	 $rowdata = mysqli_fetch_row($result);
	 $name  = $rowdata[1];
	 print_r($rowdata);
	 }
		 }
$Cust_Id = $rowdata[0];
$Cust_Name = $rowdata[1];
$Book_Id = $row[0];
$Book_Name = $row[1];
$Book_Price = $row[4];


$target_file = $row[2];
$sql = "INSERT INTO cart (Book_Id,Book_Name,Book_price,Book_Image,Cust_Name,Cust_Id) VALUES ('$Book_Id','$Book_Name','$Book_Price','$target_file','$Cust_Name','$Cust_Id')";

$result =  mysqli_query($connection,$sql);
if($result){
	//echo "succes";
	header("Location:cart.php?Cust_Id=$Cust_Id");
}else{
	echo "OOps wrong";
}

?>