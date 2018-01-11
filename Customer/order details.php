<?php
include('header.php');
include('footer.php');
?>


<form method="POST" action="order_details2.php" >
<div style="border: 2px solid black" class="container">

<div class="container">
<div class="row">
	<div class="col-sm-12"> 	
	</div>
	<div class="col-sm-3 col-md-3 col-lg-3"> 
    <label class="control-label" >Payment:</label>
	</div>
    <div class="col-sm-3 col-md-3 col-lg-3"> 
      <input type="radio" value="C O D" name="cod" > <strong>Cash On Delivery</strong>
	  
    </div>

	</div> 
</div>	<br>

<div class="container">
<div class="row">
	<div class="col-sm-12"> 	
	</div>
	<div class="col-sm-3 col-md-3 col-lg-3"> 
    <label class="control-label" >Tax:</label>
	</div>
    <div class="col-sm-3 col-md-3 col-lg-3"> 
      <input type="text" class="form-control"  name="Tax_Id">
    </div>

	</div> 
</div>	<br>



<div class="container">
<div class="row">
	<div class="col-sm-12"> 	
	</div>
	<div class="col-sm-3 col-md-3 col-lg-3"> 
    <label class="control-label" >Delivery Charge:</label>
	</div>
    <div class="col-sm-3 col-md-3 col-lg-3"> 
      <input type="text" class="form-control"  name="Charge_id">
    </div>

	</div> 
</div>	<br>


<div class="container">
<div class="row">
	<div class="col-sm-12"> 	
	</div>
	<div class="col-sm-3 col-md-3 col-lg-3"> 
    <label class="control-label" style="italic" >Total Amount:</label>
	</div>
    <div class="col-sm-3 col-md-3 col-lg-3"> 
      <input type="text" class="form-control"  name="Total_id">
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

<?php
include('index_footer.php');
	
?>




