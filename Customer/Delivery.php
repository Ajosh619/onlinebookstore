<?php
include('header.php');
include('footer.php');
?>



<form method="post" action="Delivery2.php">
<div style="border: 2px solid black" class="container">
<div class="row">
	<div class="col-sm-12"> 
	<h2>Delivery Details :</h2><br>
	</div>
	<div class="col-sm-3 col-md-3 col-lg-3"> 
    <label class="control-label" >Address:</label>
	</div>
    <div class="col-sm-3  col-md-3 col-lg-3"> 
      <textarea class="form-control" rows="5" name="Address_id">
	  </textarea>
    </div>

	</div> 
	<br>


<div class="row">
	<div class="col-sm-12"> 	
	</div>
	<div class="col-sm-3 col-md-3 col-lg-3"> 
    <label class="control-label" >Pincode:</label>
	</div>
    <div class="col-sm-3  col-md-3 col-lg-3"> 
      <input type="text" class="form-control"  name="Pincode_id">
    </div>

	
	<br>


<div class="row">
	<div class="col-sm-12"> 	
	</div>
	<div class="col-sm-3 col-md-3 col-lg-3"> 
    <label class="control-label" >City:</label>
	</div>
    <div class="col-sm-3 col-md-3 col-lg-3"> 
      <input type="text" class="form-control"  name="City_Id">
    </div>

	</div> 
	<br>


<div class="row">
	<div class="col-sm-12"> 	
	</div>
	<div class="col-sm-3 col-md-3 col-lg-3"> 
    <label class="control-label" >Landmark:</label>
	</div>
    <div class="col-sm-3 col-md-3 col-lg-3"> 
      <input type="text" class="form-control"  name="Landmark_Id">
    </div>

	</div> 
<br>


<div class="row">
	<div class="col-sm-12"> 	
	</div>
	<div class="col-sm-3 col-md-3 col-lg-3"> 
    <label class="control-label" >State:</label>
	</div>
    <div class="col-sm-3 col-md-3 col-lg-3"> 
      <select class="form-control"  name="State_Id">
	   <option>Andra Pradesh</option>
    <option>Gujarath</option>
    <option>Karnadaka</option>
    <option>Kerala</option>
	 <option>TamilNadu</option>
	  </select>
    </div>

	</div> 
	<br>


<div class="row">
	<div class="col-sm-12"> 	
	</div>
	<div class="col-sm-3 col-md-3 col-lg-3"> 
    <label class="control-label" >Country:</label>
	</div>
    <div class="col-sm-3 col-md-3 col-lg-3"> 
      <select class="form-control"  name="Country_Id">
	   <option>Australia</option>
    <option>Afganistan</option>
    <option>India</option>
    <option>USA</option>
	 <option>Srilanka</option>
	  </select>
    </div>

	</div> 
	<br>



<br>
<div id="submit">	
<Div class="col-sm-6 col-md-6 col-lg-6">
<button type="sumit" class="btn btn-primary">submit</button>
</Div></Div>
</div>
</form>






