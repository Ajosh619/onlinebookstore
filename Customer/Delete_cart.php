<?php
include('connect.php');
$Cart_Id = $_GET['Cart_Id'];
$Cust_Id = $_GET['Cust_Id'];
//print_r($Cust_Id);
$sql = "DELETE FROM cart WHERE Cart_Id=$Cart_Id";
$result=mysqli_query($connection,$sql);
	if($result){
	header("Location: cart.php?Cart_Id=$Cart_Id&Cust_Id=$Cust_Id");
	//header("Location:index.php?variable_1='true'&amp;variable_2='false'");


}else{
	echo "Sorry error";
}

?>
