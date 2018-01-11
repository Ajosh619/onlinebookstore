<?php
include('connect.php');
include('index_header.php');
$Delivery_Id=$_GET['Delivery_Id'];
$sql_query = mysqli_query($connection,"SELECT * from delivery where Delivery_Id=$Delivery_Id");
?>
<div class="container">
<div class="row content">
	<!-- Left block -->
	<div class="col-sm-3 col-md-3 col-lg-3"> 
	<div class="row content">
	<div class="col-sm-10 col-md-10 col-lg-10"> 
	<input type="text" class="form-control"  name="text" placeholder="search" />
	  
	  </div>
	  <div class="col-sm-2 col-md-2 col-lg-2"> 
	  <button type="submit" class="btn btn-primary" style="margin-left:-29px">GO</button>
	  </div>
	  </div>
	<h1>Categories</h1>
                <ul class="nav nav-tabs nav-stacked">
                    <li class="list-group-item"><a href="subpage.html">Indian Writing</a></li>
                    <li class="list-group-item"><a href="subpage.html">Children</a></li>
                    <li class="list-group-item"><a href="#">Busines</a></li>
                    <li class="list-group-item"><a href="#">Sports</a></li>
                    <li class="list-group-item"><a href="#">New Releases</a></li>                
            	</ul>
				
				
			<h2>Bestsellers</h2>
                <ul class="nav nav-tabs nav-stacked">
                    <li class="list-group-item"><a href="#">General Knowledge 2018</a></li>
                    <li class="list-group-item"><a href="#">The Power of your Subconscious Mind</a></li>
                    <li class="list-group-item"><a href="#">This Is Not Your Story</a></li>
                    <li class="list-group-item"><a href="#">The Boy Who Loved</a></li>
                    <li class="list-group-item"><a href="#">The Time Machine</a></li>  
                     </ul> 
	        </div>
<div class="col-sm-9 col-md-9 col-lg-9">
 <?php while($row = mysqli_fetch_row($sql_query)){
	//print_r($row);
	?>   

 
 <div class="container">
<div class="row">

	<div class="col-sm-3 col-md-3 col-lg-3" > 
    <label class="control-label" >Confirm Password:</label>
	</div>
    <div class="col-sm-3  col-md-3 col-lg-3" > 
    <label class="control-label" ></label> 
    </div>

	</div> 
</div>	<br>
<div class="container">
<div class="row">

	<div class="col-sm-3 col-md-3 col-lg-3" > 
    <label class="control-label" >Confirm Password:</label>
	</div>
    <div class="col-sm-3  col-md-3 col-lg-3" > 
      <label class="control-label" ></label> 
    </div>

	</div> 
</div>	<br>
<div class="container">
<div class="row">

	<div class="col-sm-3 col-md-3 col-lg-3" > 
    <label class="control-label" >Confirm Password:</label>
	</div>
    <div class="col-sm-3  col-md-3 col-lg-3" > 
     <label class="control-label" ></label> 
    </div>

	</div> 
</div>	<br>
<div class="container">
<div class="row">

	<div class="col-sm-3 col-md-3 col-lg-3" > 
    <label class="control-label" >Confirm Password:</label>
	</div>
    <div class="col-sm-3  col-md-3 col-lg-3" > 
      <label class="control-label" ></label> 
    </div>

	</div> 
</div>	<br>
<div class="container">
<div class="row">

	<div class="col-sm-3 col-md-3 col-lg-3" > 
    <label class="control-label" >Confirm Password:</label>
	</div>
    <div class="col-sm-3  col-md-3 col-lg-3" > 
      <label class="control-label" ></label> 
    </div>

	</div> 
</div>	<br>
<div class="container">
<div class="row">

	<div class="col-sm-3 col-md-3 col-lg-3" > 
    <label class="control-label" >Confirm Password:</label>
	</div>
    <div class="col-sm-3  col-md-3 col-lg-3" > 
      <label class="control-label" ></label> 
    </div>

	</div> 
</div>	<br>

<div class="container">
<div class="row">

	<div class="col-sm-3 col-md-3 col-lg-3" > 
    <label class="control-label" >Confirm Password:</label>
	</div>
    <div class="col-sm-3  col-md-3 col-lg-3" > 
     <label class="control-label" ></label> 
    </div>

	</div> 
</div>	<br>

<div class="container">
<div class="row">

	<div class="col-sm-3 col-md-3 col-lg-3" > 
    <label class="control-label" >Confirm Password:</label>
	</div>
    <div class="col-sm-3  col-md-3 col-lg-3" > 
      <label class="control-label" ></label> 
    </div>

	</div> 
</div>	<br>

<div class="container">
<div class="row">

	<div class="col-sm-3 col-md-3 col-lg-3" > 
    <label class="control-label" >Confirm Password:</label>
	</div>
    <div class="col-sm-3  col-md-3 col-lg-3" > 
      <label class="control-label" ></label> 
    </div>

	</div> 
</div>	<br>

  </div>
  <?php }?>
</div>
</div>
<br>
<?php
include('index_footer.php');
?>
