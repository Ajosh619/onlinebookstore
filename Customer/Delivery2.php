<?php
include('connect.php');
include('Index_header.php');
$Book_Id=$_GET['Book_Id'];
$Book_Price=$_GET['Book_Price'];

$sql_query2 = mysqli_query($connection,"select * from books where Book_Id = $Book_Id");
$row = mysqli_fetch_row($sql_query2);
//while($row = mysqli_fetch_row($sql_query2)){
//print_r($row);
$quantity = $_POST['Quantity'];
$Name = $_POST['name'];
$Email = $_POST['email'];
$Address = $_POST['Address_id'];
$Pincode = $_POST['Pincode_id'];
$City = $_POST['City_Id'];
$Landmark = $_POST['Landmark_Id'];
$State = $_POST['State_Id'];
$Country = $_POST['Country_Id'];
$Payment = $_POST['COD'];

$sql = "INSERT INTO delivery (Name,Email,Address,Pincode,City,State,Country,Landmark,Payment) VALUES ('$Name','$Email','$Address','$Pincode','$City','$State','$Country','$Landmark','$Payment')";
$result = mysqli_query($connection,$sql);
 if($result){?>
 
 
 <div class="col-sm-9 col-md-9 col-lg-9">
  
<div class="container" style="padding-left:100px">
 
  <div class="container">
<div class="row">

	<div class="col-sm-3 col-md-3 col-lg-3" > 
    <label class="control-label" >Customer Name:</label>
	</div>
    <div class="col-sm-3  col-md-3 col-lg-3" > 
      <label class="control-label" ><?php echo $Name;  ?></label> 
    </div>

	</div> 
</div>	<br>

 <div class="container">
<div class="row">

	<div class="col-sm-3 col-md-3 col-lg-3" > 
    <label class="control-label" >Email:</label>
	</div>
    <div class="col-sm-3  col-md-3 col-lg-3" > 
      <label class="control-label" ><?php echo $Email;  ?></label> 
    </div>

	</div> 
</div>	<br>
 
 <div class="container">
<div class="row">

	<div class="col-sm-3 col-md-3 col-lg-3" > 
    <label class="control-label" >Book Name:</label>
	</div>
    <div class="col-sm-3  col-md-3 col-lg-3" > 
      <label class="control-label" ><?php echo $row[1];  ?></label> 
    </div>

	</div> 
</div>	<br>
 
 <div class="container">
<div class="row">

	<div class="col-sm-3 col-md-3 col-lg-3" > 
    <label class="control-label" >Address:</label>
	</div>
    <div class="col-sm-3  col-md-3 col-lg-3" > 
    <label class="control-label" ><?php echo $Address; ?></label> 
    </div>
	<div class="col-sm-6 col-md-6 col-lg-6" > 
</div>
</div> 
	</div> 
	<br>
<div class="container">
<div class="row">

	<div class="col-sm-3 col-md-3 col-lg-3" > 
    <label class="control-label" >Pincode:</label>
	</div>
    <div class="col-sm-3  col-md-3 col-lg-3" > 
      <label class="control-label" ><?php echo $Pincode; ?></label> 
    </div>
	<div class="col-sm-6 col-md-6 col-lg-6" > 
</div>

	</div> 
</div>	<br>
<div class="container">
<div class="row">

	<div class="col-sm-3 col-md-3 col-lg-3" > 
    <label class="control-label" >City:</label>
	</div>
    <div class="col-sm-3  col-md-3 col-lg-3" > 
     <label class="control-label" ><?php echo $City; ?></label> 
    </div>
	<div class="col-sm-6 col-md-6 col-lg-6" > 
</div>

	</div> 
</div>	<br>
<div class="container">
<div class="row">

	<div class="col-sm-3 col-md-3 col-lg-3" > 
    <label class="control-label" >Landmark:</label>
	</div>
    <div class="col-sm-3  col-md-3 col-lg-3" > 
      <label class="control-label" ><?php echo $Landmark; ?></label> 
    </div>
	<div class="col-sm-6 col-md-6 col-lg-6" > 
</div>

	</div> 
</div>	<br>
<div class="container">
<div class="row">

	<div class="col-sm-3 col-md-3 col-lg-3" > 
    <label class="control-label" >State:</label>
	</div>
    <div class="col-sm-3  col-md-3 col-lg-3" > 
      <label class="control-label" ><?php echo $State; ?></label> 
    </div>
	<div class="col-sm-6 col-md-6 col-lg-6" > 
</div>

	</div> 
</div>	<br>
<div class="container">
<div class="row">

	<div class="col-sm-3 col-md-3 col-lg-3" > 
    <label class="control-label" >Country:</label>
	</div>
    <div class="col-sm-3  col-md-3 col-lg-3" > 
      <label class="control-label" ><?php echo $Country; ?></label> 
    </div>
	<div class="col-sm-6 col-md-6 col-lg-6" > 
</div>

	</div> 
</div>	<br>

<div class="container">
<div class="row">

	<div class="col-sm-3 col-md-3 col-lg-3" > 
    <label class="control-label" >Payment:</label>
	</div>
    <div class="col-sm-3  col-md-3 col-lg-3" > 
     <label class="control-label" ><?php echo $Payment; ?></label> 
    </div>
	<div class="col-sm-6 col-md-6 col-lg-6" > 
</div>

	</div> 
</div>	
<br>
<div class="container">
<div class="row">

	<div class="col-sm-3 col-md-3 col-lg-3" > 
    <label class="control-label" >Book price:</label>
	</div>
    <div class="col-sm-3  col-md-3 col-lg-3" > 
     <label class="control-label" >Rs <?php echo $Book_Price; ?></label> 
    </div>
	<div class="col-sm-6 col-md-6 col-lg-6" > 
</div>

	</div> 
</div>

<br>

<div class="container">
<div class="row">

	<div class="col-sm-3 col-md-3 col-lg-3" > 
    <label class="control-label" >Quantity:</label>
	</div>
    <div class="col-sm-3  col-md-3 col-lg-3" > 
      <label class="control-label" ><?php echo $quantity;  ?></label> 
    </div>

	</div> 
</div>	<br>

<?php 
$total=$quantity*$row[4];
//print_r($total);
?>
<div class="container">
<div class="row">

	<div class="col-sm-3 col-md-3 col-lg-3" > 
    <label class="control-label" >Total Amount:</label>
	</div>
    <div class="col-sm-3  col-md-3 col-lg-3" > 
     <label class="control-label" >Rs. <?php echo $total;  ?></label> 
    </div>
<div class="col-sm-6 col-md-6 col-lg-6" > 
</div>
	</div> 
</div>

<br>

 </div>
 
  </div>


 
 <?php  
}
else{
	echo " something error";
}
//}
?>
<div class="row">
<div class="col-sm-6 col-md-6 col-lg-6" > 

 <div style="float:right">
<button onclick="myFunction()">Print this page</button>
<script>
function myFunction() {
    window.print();
}
</script>
</div>
</div>
</div>
