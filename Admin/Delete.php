<?php
include('connect.php');
$Book_Id = $_GET['Book_Id'];

$sql = "DELETE FROM books WHERE Book_Id=".$Book_Id;
$result=mysqli_query($connection,$sql);
	if($result){
	header("Location: Booklist.php");
}else{
	echo "Sorry error";
}

?>
