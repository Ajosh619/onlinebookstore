<?php
include('connect.php');
include('index_header.php');
$Book_Id=$_GET['Book_Id'];
$sql_query = mysqli_query($connection,"SELECT * from books where Book_Id=$Book_Id");
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
	
	
	
  	<div class="row content">
   
  <?php while($row = mysqli_fetch_row($sql_query)){
	//print_r($row);
	?>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" > 
   
    <div class="thumbnail" style="width:250px;height:300px">
     <?php echo '<a href="product_Details.php?Book_Id='.$row[0].'">';
       echo '<img src="'.$row[2].' "  alt="Lights" style="width:200px;height:200px"/>';
       echo '<div class="caption">
      '.$row[1].' by ('.$row[3].')  
        </div>
  </a>'?>
  

	 
	  <form method="post" action="cart_1.php?Book_Id=<?php echo $row[0]; ?>">  
	 <div style="text-align:center">
	 <?php
	  //if($_SESSION == true){
	 echo ' <input type="submit" name="add_to_cart" class="btn btn-primary" value="Add to cart" />';
	  //}else{
		 // echo "plese login your Account"; 
	  //}
	  ?>
	  
	  </form>
	<?php  
   $bookid = $row[0];
	 echo '<a href="product_buynow.php?Book_Id='.$row[0].'" class="btn btn-primary" type="button">Buy Now</a>
	 </div>
	


   <br><br>
   	 </div>	
</div>';
	}
	?>
	

</div>
</div>