<?php
include('connect.php');
$Book_Id=$_GET['Book_Id'];
//print_r($_POST);
$Customer_name = $_POST['name_id'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$Confirm_password = $_POST['Confirm_Password'];
$Contact_num = $_POST['phone_num'];


$sql = "INSERT INTO customer (Name,Email,Password,Confirm_Password,Contact_Num) VALUES ('$Customer_name','$Email','$Password','$Confirm_password',
'$Contact_num')";

$result =  mysqli_query($connection,$sql);
if($result){
	header("Location:login_index.php");
}else{
	echo "OOps wrong";
}

?>
