<?php

include('header.php');
include('footer.php');
include('connect.php');
?>


<form method="post" action="books.php" enctype="multipart/form-data">
<div class="container">
<div class="row">
	<div class="col-sm-12"> 
	<h2>Books information :</h2><br>
	</div>
	<div class="col-sm-3 col-md-3 col-lg-3"> 
    <label class="control-label" >Book Name:</label>
	</div>
    <div class="col-sm-3  col-md-3 col-lg-3"> 
      <input type="text" class="form-control" name="Book_Name" required />
    </div>

	</div> 
	<br>



<div class="row">
	
	<div class="col-sm-3 col-md-3 col-lg-3"> 
    <label class="control-label" >Author Name:</label>
	</div>
    <div class="col-sm-3 col-md-3 col-lg-3"> 
      <input type="text" class="form-control"  name="Author_Name" required/>
    </div>

	</div> 
	<br>


<div class="row">
	
	<div class="col-sm-3 col-md-3 col-lg-3"> 
    <label class="control-label" >Book Image:</label>
	</div>
    <div class="col-sm-3 col-md-3 col-lg-3"> 
      <input type="file"   name="imageUpload"/>
    </div>

	</div> 
	<br>


<div class="row">
	
	<div class="col-sm-3 col-md-3 col-lg-3"> 
    <label class="control-label" >Book Price:</label>
	</div>
    <div class="col-sm-3 col-md-3 col-lg-3"> 
      <input type="text" class="form-control"  name="Book_Rate" required/>
    </div>

	</div> 
<br>	

<?php

$sql_query = mysqli_query($connection,"SELECT cateogry_Id,category_Name from category");

?>
<div class="row">

	<div class="col-sm-3 col-md-3 col-lg-3"> 
    <label class="control-label" >Category:</label>
	</div>
 <Div class="col-sm-3 col-md-3 col-lg-3">
<select class="form-control" name="Cathegory" required>
   <?php
while($row = mysqli_fetch_row($sql_query)){
	
	echo '<option value="'.$row[1].'">'.$row[1].'</option>';
}
?>
</select>
	</div> 
	</div>
	<br>
	
	<div class="row">
	
	<div class="col-sm-3 col-md-3 col-lg-3"> 
    <label class="control-label" >Description:</label>
	</div>
    <div class="col-sm-3 col-md-3 col-lg-3"> 
      <input type="text" class="form-control"  name="description" required/>
    </div>

	</div> 
<br>


<div class="row">
	
	<div class="col-sm-3 col-md-3 col-lg-3"> 
    <label class="control-label" >Stock:</label>
	</div>
    <div class="col-sm-3 col-md-3 col-lg-3"> 
      <input type="text" class="form-control"  name="Stock" required />
   </div>

	</div> 
	
<br>

<Div class="formgroup">	
<Div class="col-sm-offset-6 col-lg-6">
<button type="submit" class="btn btn-primary">submit</button><br>
</Div></Div><br>
</Div>
</form>

</body>
</html>


