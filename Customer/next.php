<?php
include('index_header.php');
include('connect.php');
?>
<br>
<div class="container">
<div class="row content">
	<!-- Left block -->

<div class="row content">
<div class="col-sm-10 col-md-10 col-lg-4"> 
	<input type="text" class="form-control"  name="text" placeholder="search" />	  
	  </div>
	  <div class="col-sm-2 col-md-2 col-lg-8"> 
	  <button type="submit" class="btn btn-primary">GO</button>
	  </div>
</div>
<Div class="Categories">
<div class="col-sm-3 col-md-3 col-lg-3 Categories"> 
	<h1>Categories</h1>
	<?php
	$sql_query_1 = mysqli_query($connection,"SELECT * from category");
?>
    <?php while($row = mysqli_fetch_row($sql_query_1)){
		?>            
                <ul class="nav nav-tabs nav-stacked">
				
              <li class="list-group-item" style="font-size:18px"><a href="#"> <?php echo $row[1]; ?></a></li>                    
            	</ul>
	<?php }?><br><br>
				
			<h2>Bestsellers</h2>
                <ul class="nav nav-tabs nav-stacked" style="font-size:18px">
                    <li class="list-group-item"><a href="#">General Knowledge 2018</a></li>
                    <li class="list-group-item"><a href="#">The Power of your Subconscious Mind</a></li>
                    <li class="list-group-item"><a href="#">This Is Not Your Story</a></li>
                    <li class="list-group-item"><a href="#">The Boy Who Loved</a></li>
                    <li class="list-group-item"><a href="#">The Time Machine</a></li>  
                     </ul> 
</div>	        
	<br>
	<div class="col-sm-9 col-md-9 col-lg-9">
	<h3>Today's Offers</h3>
   <div class="row content">
  <?php while($row = mysqli_fetch_row($sql_query))
	//print_r($row);
	?>
   <div class="col-sm-4 col-md-4 col-lg-4">   
    <div class="thumbnail">
     <?php  '<a href="product_Details.php?Book_Id='.$row[0].'">';
       echo '<img src="'.$row[2].' "  alt="Lights" style="width:200px;height:200px"/>';
       echo '<div class="caption">
      '.$row[1].'  
        </div>
  </a>'?>
</div>	
</div>	
</div>	