<?php 
include('connect.php');
session_start();
?>



 


<?php
//print_r($_POST);
$email = $_POST['email'];
$Password = $_POST['Password'];
$sql = "select * from users where Email='$email' and Password='$Password'";



$result = mysqli_query($connection,$sql);
$data = mysqli_fetch_row($result);
print_r($data);
//exit;
   if($result-> num_rows){
	  //echo "<p style='align:center'>Welcome to our book store...</p>";
	  //echo '<a href="index.php" class="btn btn-primary" type="button" style="align:center">Continue to Shopping</a>';
	    $_SESSION['login_user'] = $data[0];
	//print_r($_SESSION);
	 header("Location:Add.php");
   }else{
	   echo "Please Enter correct User Name and Password";
   }
	   ?>