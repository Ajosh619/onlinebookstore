<?php 

include('connect.php');
//print_r($_POST);
$Name = $_POST['name'];
$Email = $_POST['email'];
$Phone= $_POST['phone'];
$Subject= $_POST['subject'];
$Message= $_POST['message'];
echo $sql = "INSERT INTO contact (name,email,phone,subject,message)VALUES ('$Name','$Email','$Phone','$Subject','$Message')";

 $result = mysqli_query($connection,$sql);
 if($result){ 
	header("Location: index.php");
 }else{
	
	 echo "error";
 }


?>