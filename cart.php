<?php
include('index_header.php');
include('connect.php');
$Cust_Id = $_GET['Cust_Id'];
//print_r($Cust_Id);
?>
<div class="container">
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

<div class="col-sm-9 col-md-9 col-lg-9 "> 
						<?php
	$sql_query_3 = mysqli_query($connection,"select * from cart where Cust_Id = $Cust_Id ");
	 ?>

			<table class="table table-border" border="2px solid black">
				<tr>
					<th>Book Name</th>
					<th>Book Image</th>
					<th>Rate</th>
					<th>Quantity</th>
                    <th>Action</th>
				</tr>
				<?php 
				$i = 0;
				$j = 0;
				while($row = mysqli_fetch_row($sql_query_3)){				
				$Book_Id = $row[0];
				$j = $Book_Id;
					print_r($Book_Id);
					$Book_Image = $row[5];
					//print_r($row);
					$Cart_Id = $row[0];
					
					?>
				<tr>
			<?php echo	'<form method="POST" action="cart_2.php?Cust_Id='.$Cust_Id.'&amp;Book_Id='.$Book_Id,$j++.' ">' ?>
				
					<td><?php echo $row[4];?></td>
					<?php echo "<td> <img src=' ".$Book_Image."' style='width:150px;height:150px'/></td>"; ?>
					<td>Rs. <?php echo $row[6];?></td>
					<td><Select name="quantity<?php echo $i; ?>">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option>10</option>
					</select></td>
					<td>
					<?php 
					 echo '<a href=Delete_cart.php?Cart_Id='.$Cart_Id.'&amp;Cust_Id='.$Cust_Id.' class="btn btn-danger" type="button">Remove</a></td>';?>
				 
				<?php  $i++; }?> 
				</tr>
				<tr>
					<td colspan="5">
					<?php	$Cart_Id = $row[0];
					echo '<button type="submit" class="btn btn-primary" style="float:right">Proceed</button>'; ?>
					</td>
				</tr>
				 </form> 
			</table>
					
</div>
</div>	