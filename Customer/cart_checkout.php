<?php
include('connect.php');
include('index_header.php');

$login_userid = $_SESSION['login_user'];
if($login_userid){
	$sql="select * from customer where Cust_Id=$login_userid";
	 $result = mysqli_query($connection,$sql);
	 $rowdata = mysqli_fetch_row($result);
	 $name  = $rowdata[1];
	 $email = $rowdata[2];
}else{
	$name = "";
	$email = "";
}
	
?>
<div class="container">
<div class="row content">
	<!-- Left block -->

<br>
<form action="search.php" method="GET" enctype="multipart/form-data">
   <div class="container">
   <div class="row">
	<!-- Left block -->
    <div class="col-sm-10 col-md-10 col-lg-4"> 
	 <input type="text" class="form-control"  name="user_query" placeholder="search"  />	  
    </div>
    <div class="col-sm-2 col-md-2 col-lg-8" style="padding-left:0px"> 
	<input type="submit" name="search" value="Go" class="btn btn-primary">
	 <!-- <button type="submit" class="btn btn-primary" >GO</button>!-->
    </div>

 </div>
 </div>
</form>

    <div class="col-sm-3 col-md-3 col-lg-3"> 
   <div class="row">
	<h1>Categories</h1>
	<?php
	$sql_query_1 = mysqli_query($connection,"SELECT * from category");
?>
    <?php while($row = mysqli_fetch_row($sql_query_1)){
		//print_r($row);
		?>            
                <ul class="nav nav-tabs nav-stacked">
				
              <li class="list-group-item" style="font-size:18px"><?php echo '<a href="categories.php?cateogry_Id='.$row[0].'">'; echo $row[1]; ?></a></li>                    
            	</ul>
	<?php }?><br><br>
				
			<h2>Bestsellers</h2>
				<?php
	$sql_query_2 = mysqli_query($connection,"select * from books where Book_Rate >= 500");
	 while($row = mysqli_fetch_row($sql_query_2)){
//print_r($row);
	 ?>
                <ul class="nav nav-tabs nav-stacked" style="font-size:18px">
                    <li class="list-group-item"><?php echo '<a href="bestseller.php?Book_Id='.$row[0].'">'; echo $row[1]; ?></a></li>                  
                     </ul> 
					 
		<?php }?> 
	</div>	
	</div>
<div class="col-sm-9 col-md-9 col-lg-9">   
<?php
$Cust_Id=$_GET['Cust_Id']; 
//$Book_Price=$_GET['Book_Price']; 
 echo '<form method="post" action="cart_delivery.php?Cust_Id='.$Cust_Id.'">' ?>
<div  class="container">
<div class="row">
	<div class="col-sm-12"> 
	<h2>Delivery Details :</h2><br>
	</div>

	<br>
	<div class="row">
	<div class="col-sm-12"> 	
	</div>
	<div class="col-sm-3 col-md-3 col-lg-3"> 
    <label class="control-label" >Name:</label>
	</div>
    <div class="col-sm-3  col-md-3 col-lg-3"> 
      <input type="text" class="form-control"  name="name" value="<?php echo $name;?>" required>
    </div>

	</div> 
	<br>
	
	<div class="row">
	<div class="col-sm-12"> 	
	</div>
	<div class="col-sm-3 col-md-3 col-lg-3"> 
    <label class="control-label" >Email:</label>
	</div>
    <div class="col-sm-3  col-md-3 col-lg-3"> 
      <input type="email" class="form-control"  name="email" value="<?php echo $email;?>" required>
    </div>

	</div> 
	<br>
	<div class="row">
	<div class="col-sm-3 col-md-3 col-lg-3"> 
    <label class="control-label" >Address:</label>
	</div>
    <div class="col-sm-3  col-md-3 col-lg-3"> 
      <textarea class="form-control" rows="5" name="Address_id" required >
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
      <input type="number" class="form-control"  name="Pincode_id" required>
    </div>

	</div> 
	<br>


<div class="row">
	<div class="col-sm-12"> 	
	</div>
	<div class="col-sm-3 col-md-3 col-lg-3"> 
    <label class="control-label" >City:</label>
	</div>
    <div class="col-sm-3 col-md-3 col-lg-3"> 
      <input type="text" class="form-control"  name="City_Id" required>
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
      <input type="text" class="form-control"  name="Landmark_Id" required>
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
      <select class="form-control"  name="State_Id" required>
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
      <select class="form-control"  name="Country_Id" required>
	   <option>Australia</option>
    <option>Afganistan</option>
    <option>India</option>
    <option>USA</option>
	 <option>Srilanka</option>
	  </select>
    </div>

	</div> 
	<br>
	<div class="row">
	<div class="col-sm-12"> 	
	</div>
	<div class="col-sm-3 col-md-3 col-lg-3"> 
    <label class="control-label" >Payment:</label>
	</div>
    <div class="col-sm-3 col-md-3 col-lg-3"> 
	 <label class="control-label" >Cash On Delivery</label>
      <input type="radio" name="COD" value="COD" required />
	  
    </div>

	</div> 
	
	
	<br>



<br>	

<?php
//$Book_Id=$_GET['Book_Id']; 

 //echo '<a href="Delivery2.php?Book_Id='.$Book_Id.'" > </a>'?>
 <button type="submit" class="btn btn-primary" style="margin-left:300px">submit</button>
 
</Div>
</div>
</form>


  </div>
</div>
</div>
<br>
<?php
include('index_footer.php');
?>
