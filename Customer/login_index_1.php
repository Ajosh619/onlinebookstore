<?php 
include('connect.php');
include('index_header.php');

?>

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
 <br>


<?php
//print_r($_POST);
$email = $_POST['email_id'];
$Password = $_POST['password'];
$sql = "select * from customer where Email='$email' and Password='$Password'";



$result = mysqli_query($connection,$sql);
$data = mysqli_fetch_row($result);
//print_r($data);
//exit;
   if($result-> num_rows){

	    $_SESSION['login_user'] = $data[0];
	//print_r($Bookid);
	 header("Location:index.php"); 
	 	   }else{
	
   ?>
	 
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
				
              <li class="list-group-item" style="font-size:18px">
			  <?php echo '<a href="categories.php?cateogry_Id='.$row[0].'">'; echo $row[1]; ?></a></li>                    
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

 <?php echo "<b><i><p style='color:red;text-align:center;font-size:20px;' > Please Enter correct username and password </p></i></b><br>";
	 // header ("Location:login_index.php");
	 echo  '<div class="col-lg-6">
     </div>	 
	 <a href="login_index.php" class="btn btn-primary" style="text-align:center">Try again</a>';?>

<?php } ?>
	 
 
   
   