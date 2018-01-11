<?php 

include('connect.php');
//print_r($_POST);
$contact_id=$_GET['contact_id'];
$sql = "DELETE FROM contact where contact_id=".$contact_id;
if (mysqli_query($connection, $sql)) {
	Header("Location:contactlist.php");
} else {
    echo "Error deleting record: " . mysqli_error($connection);
}
?>

