<?php
include('header.php');
include('footer.php');
?>



<form method="POST" action="feedback2.php">
<div style="border: 2px solid black" class="container">
<div class="container">
<div class="row">
	<div class="col-sm-12"> 
	<h2>Feedback Details :</h2><br>
	</div>
	<div class="col-sm-3 col-md-3 col-lg-3"> 
    <label class="control-label" >Feedback:</label>
	</div>
    <div class="col-sm-3  col-md-3 col-lg-3"> 
      <textarea class="form-control"  rows="7" name="Feedback_id">
	  </textarea>
    </div>

	</div> 
	<br>

<div class="row">
	<div class="col-sm-12"> 	
	</div>
	<div class="col-sm-3 col-md-3 col-lg-3"> 
    <label class="control-label" >Email:</label>
	</div>
    <div class="col-sm-3 col-md-3 col-lg-3"> 
      <input type="email" class="form-control"  name="Email" placeholder="Email">
    </div>

	</div><br>


<div class="row">
	
	<div class="col-sm-3 col-md-3 col-lg-3"> 
    <label class="control-label" >Feedback Rate:</label>
	</div>
 <div class="col-sm-3 col-md-3 col-lg-3">
      <input type="radio"  value="1" name="7" class="radio-inline"/>
	  <input type="radio"  value="2" name="7" class="radio-inline"/>
	  <input type="radio" value="3"  name="7" class="radio-inline"/>
	  <input type="radio" value="4"  name="7" class="radio-inline"/>
	  <input type="radio" value="5"  name="7" class="radio-inline"/>
   </div>
  </div>
	<br>
	
	<br>
<div id="submit">	
<Div class="col-sm-6 col-md-6 col-lg-6">
<button type="submit" class="btn btn-primary">submit</button>
</Div></Div>
</Div>
</form>






