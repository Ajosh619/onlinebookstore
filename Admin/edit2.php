<?php
include('connect.php');
echo $Book_Id = $_GET['Book_Id'];
$Book_name = $_POST['Book_Name'];
	//print_r($_POST);     
$Author_name = $_POST['Author_Name'];
$Book_price = $_POST['Book_Rate'];
$Category_name = $_POST['Cathegory'];
$Description = $_POST['description'];
$format = $_POST['format'];
$language = $_POST['language'];
$released = $_POST['released'];
$pages = $_POST['pages'];
$Stock = $_POST['Stock'];
//print_r($_FILES);  
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


if (move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["imageUpload"]["name"]). " has been uploaded.";
} else {
    echo "Sorry, there was an error uploading your file.";}

echo $sql = "UPDATE books SET  Book_Name = '$Book_name', Author_Name = '$Author_name',Book_Image='$target_file',Book_Rate = '$Book_price',
Format = '$format',Language = '$language',Released = '$released',Pages = '$pages',
Cathegory = '$Category_name',Description = '$Description',Available_Books = '$Stock' WHERE Book_Id = $Book_Id";
 $result = mysqli_query($connection,$sql);
 //print_r($result);
 if($result){
	Header("Location: Booklist.php");
 }


?>