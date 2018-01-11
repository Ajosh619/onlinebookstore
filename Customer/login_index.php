<?php
include('index_header.php');
include('connect.php');
//$Book_Id=$_GET['Book_Id'];
//$Book_Price=$_GET['Book_Price'];
//$sql_query = mysqli_query($connection,"SELECT * from books where Book_Id=$Book_Id");
?>


<br><br>

<div class="container">	
<div class="row">
<form action="search.php" method="GET" enctype="multipart/form-data"> 

	<!-- Left block -->
    <div class="col-sm-10 col-md-10 col-lg-4"> 
	 <input type="text" class="form-control"  name="user_query" placeholder="search"  />	  
    </div>
    <div class="col-sm-2 col-md-2 col-lg-8" style="padding-left:0px"> 
	<input type="submit" name="search" value="Go" class="btn btn-primary">
	 <!-- <button type="submit" class="btn btn-primary" >GO</button>!-->
    </div>
</form>
 </div>
 

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
					 
					 
		<?php
print_r($row[4]);		}?> 
	</div>	
	</div>

	<br><br><br>
<?php	
 echo	'<form method="POST" action="login_index_1.php " >' 
// echo	'<form method="POST" action="login_index_1.php?Book_Id='.$Book_Id.'&Book_Price='.$Book_Price.' " >'  ?>
	<div class="col-sm-9 col-md-9 col-lg-9">
<h3><b><i>Please Enter Your Email and Password</i></b></h3><br>	
<div class="container">
<div class="row">
	
	<div class="col-sm-3 col-md-3 col-lg-3"> 
    <label class="control-label" >Email :</label>
	</div>
    <div class="col-sm-3  col-md-3 col-lg-3"> 
      <input type="text" class="form-control"  name="email_id" required />
    </div>
    <div class="col-sm-6 col-md-6 col-lg-6">
	</div>
	</div> 
</div>	<br>

<div class="container">
<div class="row">
	
	<div class="col-sm-3 col-md-3 col-lg-3"> 
    <label class="control-label" >Password:</label>
	</div>
    <div class="col-sm-3  col-md-3 col-lg-3"> 
      <input type="Password" class="form-control"  name="password" required />
    </div>
    <div class="col-sm-6 col-md-6 col-lg-6">
	</div>
	</div> 
</div>	<br>
<div class="container">
<div class="row">

<Div class="col-sm-3 col-md-3 col-lg-3">
</Div>	
<Div class="col-sm-3 col-md-3 col-lg-2">
<button type="submit" class="btn btn-primary text-center">LogIn</button>

</Div> 
<Div class="col-sm-3 col-md-3 col-lg-2">
<a href="new_customer.php" type="submit" class="btn btn-primary text-center">Register</a>

</Div> 
<!--
<div class="col-sm-6 col-md-6 col-lg-7">
	
<button type="submit" class="btn btn-primary">Forget Password</button>
</div> -->
   </div>
  </Div>
 </Div>
</form>

	</div>
	
	<?php
include('index_footer.php');
	
?>