<?php
include('header.php');
include('footer.php');
?>

<form method="post" action="user.php">

<div class="container">
<div class="row">
	<div class="col-sm-12"> 
	<h2>User Details :</h2><br>
	</div>
	<div class="col-sm-3 col-md-3 col-lg-3"> 
    <label class="control-label" >User Name:</label>
	</div>
    <div class="col-sm-3  col-md-3 col-lg-3"> 
      <input type="text" class="form-control"  name="User_Name">
    </div>

	</div> 
	<br>


<div class="row">
	
	<div class="col-sm-3 col-md-3 col-lg-3"> 
    <label class="control-label" >Email:</label>
	</div>
    <div class="col-sm-3  col-md-3 col-lg-3"> 
      <input type="email" class="form-control"  name="Email_Id" placeholder="Email">
    </div>

	</div> 
	<br>


<div class="row">
	
	<div class="col-sm-3 col-md-3 col-lg-3"> 
    <label class="control-label" >Password:</label>
	</div>
    <div class="col-sm-3 col-md-3 col-lg-3"> 
      <input type="password" class="form-control"  name="Password" placeholder="Password">
    </div>

	</div> 
	<br>

<div class="row">
	
	<div class="col-sm-3 col-md-3 col-lg-3"> 
    <label class="control-label">Role:</label>
	</div>
<Div class="col-sm-3 col-md-3 col-lg-3">
<select class="form-control" name="Cathegory">
    <option>Admin</option>
    <option>Non Admin</option>
    
  </select>
  </div>
  </Div><br>


<div class="row">
	
	<div class="col-sm-3 col-md-3 col-lg-3"> 
    <label class="control-label" >Phone Num:</label>
	</div>
    <div class="col-sm-3 col-md-3 col-lg-3"> 
      <input type="number" class="form-control"  name="Phone_id">
    </div>

	</div> 
</div>	<br>


<br>
<div id="submit">	
<Div class="col-sm-6 col-md-6 col-lg-6">
<button type="submit" class="btn btn-primary">submit</button>
</Div></Div>
</Div>
</form>






