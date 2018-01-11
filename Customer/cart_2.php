<?php
include('connect.php');
$Book_Id = $_GET['Book_Id'];
$Cust_Id=$_GET['Cust_Id'];
$quantity = $_POST['quantity'];

//$quantity3 = $_POST['quantity3'];
//print_r($Book_Id);



$sql = "UPDATE cart SET  Quantity ='$quantity' WHERE Cart_Id= $Book_Id";

$result =  mysqli_query($connection,$sql);
if($result){
	//echo "succes";
	header("Location:cart.php?Cart_Id=$Cart_Id&Cust_Id=$Cust_Id");
//header("Location:final_carts.php?Cart_Id=$Cart_Id&Cust_Id=$Cust_Id&quantity=$quantity");
}else{
	echo "OOps wrong";
}

?>
