<?php
include('connect.php');
//print_r($_POST);
//$Cust_Id = $_POST['1'];
$Payment = $_POST['cod'];
$Tax = $_POST['Tax_Id'];
$Delivery_Charge = $_POST['Charge_id'];
$Total_Amount = $_POST['Total_id'];

$sql = "INSERT INTO purchase_details (Payment,Tax,Delivery_Charge,Total_Amount) VALUES ('$Payment','$Tax','$Delivery_Charge','$Total_Amount')";

$Result = mysqli_query($connection,$sql);
if($Result){
	echo "<center><h1>Data inserted succesfully</h1></center>";
}else{
	echo " something error";
}
?>