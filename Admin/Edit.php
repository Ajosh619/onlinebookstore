<?php
include('header.php');
include('footer.php');
include('connect.php');
$Book_Id = $_GET['Book_Id'];

$sql_query2 = mysqli_query($connection,"select * from books where Book_Id = $Book_Id");
$rowdata = mysqli_fetch_row($sql_query2);

//print_r($rowdata)
?>


<form method="POST" action="edit2.php?Book_Id=<?php echo $Book_Id; ?>" enctype="multipart/form-data">
<div style="border: 2px solid black" class="container">

<div class="row">
	<div class="col-sm-12"> 
	<h2>Books information :</h2><br>
	</div>
	<div class="col-sm-3 col-md-3 col-lg-3"> 
    <label class="control-label" >Book Name:</label>
	</div>
    <div class="col-sm-3  col-md-3 col-lg-3"> 
      <input type="text" class="form-control" name="Book_Name" required value="<?php echo $rowdata[1]; ?>" />
    </div>

	</div> 
	<br>



<div class="row">
	
	<div class="col-sm-3 col-md-3 col-lg-3"> 
    <label class="control-label" >Author Name:</label>
	</div>
    <div class="col-sm-3 col-md-3 col-lg-3"> 
      <input type="text" class="form-control"  name="Author_Name" required value="<?php echo $rowdata[3]; ?>" />
    </div>

	</div> 
	<br>


<div class="row">
	
	<div class="col-sm-3 col-md-3 col-lg-3"> 
    <label class="control-label" >Book Image:</label>
	</div>
    <div class="col-sm-3 col-md-3 col-lg-3"> 
      <input type="file"   name="imageUpload" required value="<?php echo $rowdata[2]; ?>" />
    </div>

	</div> 
	<br>


<div class="row">
	
	<div class="col-sm-3 col-md-3 col-lg-3"> 
    <label class="control-label" >Book Price:</label>
	</div>
    <div class="col-sm-3 col-md-3 col-lg-3"> 
      <input type="text" class="form-control"  name="Book_Rate" required value="<?php echo $rowdata[4]; ?>" />
    </div>

	</div> 
<br>

<div class="row">
	
	<div class="col-sm-3 col-md-3 col-lg-3"> 
    <label class="control-label" >Format:</label>
	</div>
    <div class="col-sm-3 col-md-3 col-lg-3"> 
      <input type="text" class="form-control"  name="format" value="<?php echo $rowdata[5]; ?>"></input>
    </div>

	</div> 
	<br>
	
	<div class="row">
	
	<div class="col-sm-3 col-md-3 col-lg-3"> 
    <label class="control-label" >Language:</label>
	</div>
    <div class="col-sm-3 col-md-3 col-lg-3"> 
      <input type="text" class="form-control"  name="language" value="<?php echo $rowdata[6]; ?>"></input>
    </div>

	</div> 
	<br>
	
	<div class="row">
	
	<div class="col-sm-3 col-md-3 col-lg-3"> 
    <label class="control-label" >Released On:</label>
	</div>
    <div class="col-sm-3 col-md-3 col-lg-3"> 
      <input type="date" class="form-control"  name="released" value="<?php echo $rowdata[7]; ?>"></input>
    </div>

	</div> 
	<br>
	
	<div class="row">
	
	<div class="col-sm-3 col-md-3 col-lg-3"> 
    <label class="control-label" >Pages:</label>
	</div>
    <div class="col-sm-3 col-md-3 col-lg-3"> 
      <input type="text" class="form-control"  name="pages"  value="<?php echo $rowdata[8]; ?>"/>
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
<select class="form-control" name="Cathegory" value="<?php echo $rowdata[9]; ?>" required>
   <?php
while($row = mysqli_fetch_row($sql_query)){
	
	echo '<option value="'.$row[0].'">'.$row[1].'</option>';
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
      <input type="text" class="form-control"  name="description" value="<?php echo $rowdata[10]; ?>" required/>
    </div>

	</div> 
<br>



<div class="row">
	
	<div class="col-sm-3 col-md-3 col-lg-3"> 
    <label class="control-label" >Stock:</label>
	</div>
    <div class="col-sm-3 col-md-3 col-lg-3"> 
      <input type="text" class="form-control"  name="Stock" required value="<?php echo $rowdata[11
	  ]; ?>" />
   </div>

	</div> 
	
<br>

<Div class="formgroup">	
<Div class="col-sm-offset-6 col-lg-6">
<button type="submit" class="btn btn-primary">Update</button><br>
</Div></Div><br>
</Div>
</form>

</body>
</html>


