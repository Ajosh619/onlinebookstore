<?php
include('index_header.php');
include('connect.php');
		 if($_SESSION == true){
           $login_userid = $_SESSION['login_user'];
if($login_userid){
	$sql="select * from customer where Cust_Id=$login_userid";
	 $result = mysqli_query($connection,$sql);
	 $rowdata = mysqli_fetch_row($result);
	 
		 } } 
?>
<!-- <div class="container"> 
<div id="myCarousel" class="carousel slide">
    
	 
    <div class="carousel-inner">
        <div data-slide-no="0" class="item carousel-item active"><img src="images/11.jpg" style="height:500px;width:1200px" alt="1"></div>
        <div data-slide-no="1" class="item carousel-item"><img src="images/44.jpg" style="height:500px;width:1200px" alt="2"></div>
        <div data-slide-no="2" class="item carousel-item "><img src="images/33.jpg" style="height:500px;width:1200px"  alt="3" /></div>
		
    </div>
	<ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="myCarousel-target active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class="myCarousel-target"></li>
        <li data-target="#myCarousel" data-slide-to="2" class="myCarousel-target"></li>
    </ol>
   
</div>

</div> -->
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
<div class="container">
<div class="row">
<div class="col-sm-3 col-md-3 col-lg-3 Categories "> 
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
  
	<br>
	

	<?php
	if(isset($_GET['page'])){
		$page = $_GET['page'];
	}else{
		$page = 1;
	}
	if($page == '' || $page == 1){
		$page1 = 0;
	}else{
		$page1 = ($page*6)-10;
	}
	
	$sql_query = mysqli_query($connection,'SELECT * from books ORDER BY Book_Id Asc LIMIT '.$page1.',6'); 	
		
?>
	
	<!-- middle Block -->
	
	<div class="col-sm-9 col-md-9 col-lg-9">	
	
	<h3>Today's Offers</h3>
	
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
 
	<?php echo   '<form method="post" action="cart_1.php?Book_Id='.$row[0].' ">'; ?>  
	 <div class="text-center">
	 <?php
	 
	  if($_SESSION == true){
	 echo ' <input type="submit" name="add_to_cart" class="btn btn-primary" value="Add to cart" />';
	 echo '</form>';
	  }	  
	 else{
		echo ' <button  class="btn btn-primary" onclick="login()">Add to cart</button>';
	  }
	  ?>
	  
	  
	<?php  
   $bookid = $row[0];
	 echo '<a href="product_Buynow.php?Book_Id='.$bookid.'" class="btn btn-primary" type="button">Buy Now</a>
	 </div>
	


   <br><br>
   	 </div>	
</div>';
	}
	 //
	 //'<a href="login_index.php?Book_Id='.$row[0].'" class="btn btn-primary" type="button">Buy Now</a>
	
	?>
	

</div>
</div>

<?php
// }

 //}
 ?>


<div class="container">
<div class="row ">
<div class="col-sm-3 col-md-3 col-lg-3"> 
</div>
<div class="col-sm-9 col-md-9 col-lg-9">  

	<?php
	//pagination
	$sql_query = mysqli_query($connection,'SELECT * from books');
    $records = $sql_query->num_rows;
    $records_pages = $records/6;
	$records_pages = ceil($records_pages);
	$prev = $page-1;
	$next = $page+1;
	echo '<ul style="list-style:none;font-size:20px;">';
	
	if($prev >=1){
		echo '<li style="display:inline-block;"><a href="?page='.$prev.'">prev</a><li>';
	}
	
	if($records_pages >= 2){
		for($r=1; $r <= $records_pages; $r++){
			$active = $r == $page ? 'class="active"' : '';
			echo '<li style="display:inline-block;padding-left:20px;"><a href="?page='.$r.'">'.$r.'</a></li>';
		}
	}
	if($next <= $records_pages && $records_pages >= 2){
		echo '<li style="display:inline-block;padding-left:20px;"><a href="?page='.$next.'">Next</a><li>';
	}	
	
	echo '</ul>';
	
	
	?>
	
 </div>  
</div>
 </div>	
 

	
	
	    

	<br>
<?php
include('index_footer.php');
	
?>	
                  