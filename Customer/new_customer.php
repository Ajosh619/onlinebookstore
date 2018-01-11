<?php
include('index_header.php');
include('connect.php');
//$Book_Id=$_GET['Book_Id'];
?>

<html>
<head>
<title>Customer details</title>
</head>
<body>
<form method="POST" action="customer.php" >
<div class="container">
<div class="container">
<div class="row">
	<div class="col-sm-12"> 
	<h2>Customer Details :</h2><br>
	</div>
	<div class="col-sm-3 col-md-3 col-lg-3"> 
    <label class="control-label" >Customer Name:</label>
	</div>
    <div class="col-sm-3  col-md-3 col-lg-3"> 
      <input type="text" class="form-control"  name="name_id" required placeholder="Name" />
    </div>

	</div> 
</div>	<br>

<div class="container">
<div class="row">

	<div class="col-sm-3 col-md-3 col-lg-3"> 
    <label class="control-label" >Email:</label>
	</div>
    <div class="col-sm-3 col-md-3 col-lg-3"> 
      <input type="Email" class="form-control"  name="Email" placeholder="Email" required />
    </div>
    
</div>	 
</div>	<br>

<div class="container">
<div class="row">

	<div class="col-sm-3 col-md-3 col-lg-3" > 
    <label class="control-label" >Password:</label>
	</div>
    <div class="col-sm-3  col-md-3 col-lg-3" > 
      <input type="password" class="form-control"  name="Password" placeholder="Password" required />
    </div>

	</div> 
</div>	<br>

<div class="container">
<div class="row">

	<div class="col-sm-3 col-md-3 col-lg-3" > 
    <label class="control-label" >Confirm Password:</label>
	</div>
    <div class="col-sm-3  col-md-3 col-lg-3" > 
      <input type="password" class="form-control"  name="Confirm_Password" placeholder="Repeat Password" required />
    </div>

	</div> 
</div>	<br>

<div class="container">
<div class="row">
	<div class="col-sm-12"> 	
	</div>
	<div class="col-sm-3 col-md-3 col-lg-3"> 
    <label class="control-label" >Phone Number:</label>
	</div>
    <div class="col-sm-3  col-md-3 col-lg-3"> 
      <input type="Number" class="form-control"  name="phone_num" placeholder="Phone Number" required/>
    </div>

	</div> 
</div>	<br>




<br>
<div id="">	
<Div class="col-sm-6 col-md-6 col-lg-5">
</div>
<Div class="col-sm-6 col-md-6 col-lg-7">
<button type="submit" class="btn btn-primary">submit</button>
</Div></Div>
</Div>
</form>
</div>





</body>

</html>