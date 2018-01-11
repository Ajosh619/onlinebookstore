<?php


include('connect.php');
//print_r($_POST);
$User_name = $_POST['User_Name'];
$Email = $_POST['Email_Id'];
$Password = $_POST['Password'];
$Role = $_POST['Cathegory'];
$Phone_Num = $_POST['Phone_id'];

$sql = "INSERT INTO users (User_Name,Email,Password,Role,Phone_Number) VALUES ('$User_name','$Email','$Password','$Role','$Phone_Num')";

 $result = mysqli_query($connection,$sql);
 if($result){
	 Header("Location:login.php");
	//echo "<center><h1>Data inserted succesfully</h1></center>";
 }else{
	
	 echo "error";
 }







?>