<?php
include('connect.php');
include('Index_header.php');
$Cust_Id=$_GET['Cust_Id'];
//$Book_Price=$_GET['Book_Price'];


//$quantity = $_POST['Quantity'];
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
 if($result){
 $sql_query2 = mysqli_query($connection,"select * from cart where Cust_Id = $Cust_Id");
$row = mysqli_fetch_row($sql_query2);

//print_r($row);
 ?>
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
<!-- 
 <div class="container">
<div class="row">

	<div class="col-sm-3 col-md-3 col-lg-3" > 
    <label class="control-label" >Book Name:</label>
	</div>
    <div class="col-sm-3  col-md-3 col-lg-3" > 
      <label class="control-label" ><?php //echo $row[4];  ?></label> 
    </div>

	</div> 
</div>	<br> -->
 
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
    <label class="control-label" >Book Name:</label>
	</div>
			<div class="col-sm-3 col-md-3 col-lg-3" > 
    <label class="control-label" >Book price:</label>
	</div>
			<div class="col-sm-3 col-md-3 col-lg-3" > 
    <label class="control-label" >Quantity:</label>
	</div>
			<div class="col-sm-3 col-md-3 col-lg-3" > 
    <label class="control-label" >Total:</label>
	</div>
		</div> 
</div><br>

<div class="container">
<?php 

$totaloftotal = 0;
while($row = mysqli_fetch_row($sql_query2)){ ?>
<div class="row">
			<div class="col-sm-3 col-md-3 col-lg-3" > 
	<?php		
    echo '<label class="control-label" >';
	echo  $row[4];	
	echo '</label><br><br>'; ?>
	</div>


			<div class="col-sm-3 col-md-3 col-lg-3" > 
			<?php 
			 
				$total = $row[6]*$row[7];
    echo '<label class="control-label" >';
	echo  $row[6];
		$val1 = $row[6];
	echo '</label><br><br>'; ?>
	</div>
				<div class="col-sm-3 col-md-3 col-lg-3" > 
			<?php 
			
				//print_r($row1);
    echo '<label class="control-label" >';
	echo  $row[7];	
	$val2 = $row[7];
	//print_r($row1[7]);
	echo '</label><br><br>'; ?>
	</div>
				<div class="col-sm-3 col-md-3 col-lg-3" > 
			<?php 
			 
			//$res = $val1 * $val2;
			//while($row1){
				//print_r($row1);
			//}	
				//print_r($row1[7]);
    echo '<label class="control-label" >';
	echo  $total;	
	echo '</label><br><br>'; // ?>
	
	</div>
</div>
<?php

$totaloftotal = $totaloftotal + $total;
 }?>
</div>


<?php 



//print_r($total);
?>
<div class="container">
<div class="row">
	<div class="col-sm-6 col-md-6 col-lg-6" > 
	</div>
	<div class="col-sm-3 col-md-3 col-lg-3" > 
    <label class="control-label" >Total Amount:</label>
	</div>
    <div class="col-sm-3  col-md-3 col-lg-3" > 
     <label class="control-label" >Rs. <?php echo $totaloftotal;  ?></label> 
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
