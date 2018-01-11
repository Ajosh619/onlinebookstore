<?php 

include('connect.php');
//print_r($_POST);
$contact_id=$_GET['contact_id'];
$Name = $_POST['name'];
$Email = $_POST['email'];
$Phone= $_POST['phone'];
$Subject= $_POST['subject'];
$Message= $_POST['message'];

echo $sql = "UPDATE contact SET name='$Name',email='$Email',phone='$Phone',subject='$Subject',message='$Message' where contact_id=$contact_id";
 $result = mysqli_query($connection,$sql);
 if($result){
	header("Location: contactlist.php");
 }


?>