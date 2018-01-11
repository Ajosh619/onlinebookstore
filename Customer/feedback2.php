<?php
include('connect.php');
//print_r($_POST);

$Feedback = $_POST['Feedback_id'];
$Email = $_POST['Email'];
$Rate = $_POST['7'];

$sql = "INSERT INTO feedback (Email,feedback_Rate,Comment) VALUES ('$Email','$Rate','$Feedback')";

$Result = mysqli_query($connection,$sql);
if($Result){
	echo "<center><h1>Data inserted succesfully</h1></center>";
}else{
	echo " something error";
}
?>

