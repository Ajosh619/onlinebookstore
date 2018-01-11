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
<div class="col-sm-9 col-md-9 col-lg-9">
	   <div class="container">
<div class="row">

	<div class="col-sm-3 col-md-3 col-lg-3"> 
    <label class="control-label" >Our Phone Num:</label>
	</div>
    <div class="col-sm-3  col-md-3 col-lg-3"> 
     <label class="control-label" >9976044313</label>
    </div>

	
	

 </div>
 </div>	
 <br>

<div class="container">
<div class="row">
	<div class="col-sm-12"> 	
	</div>
	<div class="col-sm-3 col-md-3 col-lg-3"> 
    <label class="control-label" >Our Email:</label>
	</div>
    <div class="col-sm-3  col-md-3 col-lg-3"> 
     <label class="control-label" >ajoshdl13@gmail.com</label>
    </div>

	
	
 </div>
 </div>	
	<br>
	
	<div class="container">
<div class="row">
	<div class="col-sm-12"> 	
	</div>
	<div class="col-sm-3 col-md-3 col-lg-3"> 
    <label class="control-label" >Our Address:</label>
	</div>
    <div class="col-sm-3  col-md-3 col-lg-3"> 
     <label class="control-label" >malayadi,<br>kaliyakavilai,<br>marthandam,<br>629153,<br>Kanya Kumari(District).</label>
    </div>

	
	
 </div>
 </div>	
	<br>
	
</div>

<?php
//include('index_footer.php');
	
?>