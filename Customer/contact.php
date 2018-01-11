<?php 
include('index_header.php');
include('connect.php');
?>
<Div  class="container">
<form method="POST" action="contactdb.php"> 

<div class="row">
<h2>Contact</h2>
</div>
<br>
<div class="row">
<div class="col-sm-3 col-md-3 col-lg-3">
  <label  class="control-label">Name</label>
</div>
<div class="col-sm-3 col-md-3 col-lg-3">
    <input type="text" class="form-control" name="name" required>
</div>
    <div class="col-sm-6 col-md-6 col-lg-6">
	</div>
</div>
<br>
 <div class="row">
<div class="col-sm-3 col-md-3 col-lg-3">
  <label  class="control-label">phone</label>
</div>
   <div class="col-sm-3 col-md-3 col-lg-3">
      <input type="number" class="form-control" name="phone" required>
    </div>
	    <div class="col-sm-6 col-md-6 col-lg-6">
	</div>
	</div>
<br>
 <div class="row">
 <div class="col-sm-3 col-md-3 col-lg-3">
    <label class="control-label ">Email</label>
</div>	
   <div class="col-sm-3 col-md-3 col-lg-3">
      <input type="email" class="form-control" name="email" required>
    </div>
	    <div class="col-sm-6 col-md-6 col-lg-6">
	</div>
	</div>
<br>
 <div class="row">
 <div class="col-sm-3 col-md-3 col-lg-3">
    <label class="control-label ">Subject</label>
</div>
   <div class="col-sm-3 col-md-3 col-lg-3">
      <input type="text" class="form-control" name="subject" required>
    </div>
	    <div class="col-sm-6 col-md-6 col-lg-6">
	</div>
	</div>
<br>
 <div class="row">
<div class="col-sm-3 col-md-3 col-lg-3">
    <label class="control-label ">Message</label>
</div>
  <div class="col-sm-3 col-md-3 col-lg-3">
<textarea rows="4" cols="35" type="text" name="message" required>
</textarea>
</div>
    <div class="col-sm-6 col-md-6 col-lg-6">
	</div>
</div>
<br>
<br>

<br>
<div class="form-group"> 
	<div class="col-sm-6 col-md-6 col-lg-6">
<input type="submit" value="submit" class="btn btn-primary">
    </div>
  </div>
  <br>
  <br>
</div>
</form>
