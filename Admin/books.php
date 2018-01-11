<?php
include('connect.php');
//print_r($_POST);
$Book_name = $_POST['Book_Name'];
$Author_name = $_POST['Author_Name'];
//$Book_image = $_POST['imageUpload'];
$Book_price = $_POST['Book_Rate'];
$Cathegory = $_POST['Cathegory'];
$Description = $_POST['description'];
$format = $_POST['format'];
$language = $_POST['language'];
$released = $_POST['released'];
$pages = $_POST['pages'];
$Stock = $_POST['Stock'];

$target_dir = "../uploadss/";
$target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if (move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $target_file)) {
    //echo "The file ". basename( $_FILES["imageUpload"]["name"]). " has been uploaded.";
} else {
    echo "Sorry, there was an error uploading your file.";}


 $sql = "INSERT INTO books (Book_Name,Book_Image,Author_Name,Book_Rate,Format,Language,Released,Pages,Cathegory,Description,Available_Books) VALUES 
 ('$Book_name','$target_file','$Author_name','$Book_price',
 '$format','$language','$released','$pages','$Cathegory','$Description','$Stock')"; 

 $result =  mysqli_query($connection,$sql);
 //print_r($result);
 if($result){
	 //echo "data inserted successfully";
	  header("Location: Booklist.php");
 }else{
	 echo "error";
 }


?>


