<?php
include('index_header.php');
include('connect.php');
$Book_Id=$_GET['Book_Id'];
$sql_query = mysqli_query($connection,"SELECT * from books where Book_Id=$Book_Id");
?>
<div class="container">
<div class="row content">
	<!-- Left block -->

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
		<br><br>
	  <?php while($row = mysqli_fetch_row($sql_query)){
	//print_r($row);
	?>
	<div class="col-sm-9 col-md-9 col-lg-9">  
   <h3 style="text-align:center">Product Details</h3>
   <hr class="soft clr"/>
   <?php
    '<div class="row ">
      <div class="col-sm-3 col-md-3 col-lg-3">';   
    echo '<img src="'.$row[2].' " alt="Lights" style="width:250px;height:200px" />
	</div>
	<div class="col-sm-6 col-md-6 col-lg-6">';
				echo '<h4>  ' .$row[1].'<br> by ('.$row[3].') </h4>
     <hr class="soft"/>';					
				echo	'<label class="control-label"><span style="font-size:20px">Rs.' .$row[4].'</span></label>' ?>
							
					  	  <form method="post" action="cart_1.php?Book_Id=<?php echo $row[0]; ?>">  
	 <div style="text-align:center">
	 <?php
	  //if($_SESSION == true){
	 echo ' <input type="submit" name="add_to_cart" class="btn btn-primary" value="Add to cart" />';
	  //}else{
		 // echo "plese login your Account"; 
	  //}
	  ?>
	  
	  </form><br><br>
					  <?php echo '<a href="product_buynow.php?Book_Id='.$row[0].'" class="btn btn-primary" type="button" style="margin-left:465px">Buy Now</a>'?> 
				
				
				
					<hr class="soft clr"/>
				<h5 style="text-align:center;font-size:20px">Description</h5>
				<?php
				echo '<p style="font-size:17px">				
				' .$row[10].'				</p>' ?>				
       </div>
	   <div class="col-sm-6 col-md-6 col-lg-6">
	        <table class="table table-bordered">
				<tbody>
		 	    <tr class="techSpecRow"><th colspan="2" style="text-align:center">Product Details</th></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Format: </td><td class="techSpecTD2"><?php echo $row[5];?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Language:</td><td class="techSpecTD2"><?php echo $row[6];?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Released on:</td><td class="techSpecTD2"><?php echo $row[7];?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Pages:</td><td class="techSpecTD2"><?php echo $row[8];?></td></tr>				
				</tbody>
				</table>

	    </div>
	  <?php }?>	   
	   
	   
</div>
</div>


</div>     
  </div>     

<br><br>

<?php
include('index_footer.php');
?>