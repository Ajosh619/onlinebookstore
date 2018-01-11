<?php
include('index_header.php');
include('connect.php');
$Cust_Id = $_GET['Cust_Id'];
$Cart_Id = $_GET['Cart_Id'];
$quantity = $_GET['quantity'];
//print_r($quantity);

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
						//print_r($Cust_Id);
	$sql_query_3 = mysqli_query($connection,"select * from cart where Cust_Id = '$Cust_Id' AND Quantity <= 10");
	 ?>
			<table class="table table-border" border="2px solid black">
				<tr>
					<th>Book Name</th>
					<th>Book Image</th>
					<th>Rate</th>
					<th>Quantity</th>
                    <th>Total</th>
				</tr>
				<?php  while($row = mysqli_fetch_row($sql_query_3)){
					//print_r($row);
					$Book_Image = $row[4];
					$Rate = $row[5];
					$quanntity = $row[6];
					$total = $Rate * $quanntity;
					//$final_total = $total + $total;
					?>

				<tr>
					<td><?php echo $row[3];?></td>
					<?php echo "<td> <img src=' ".$Book_Image."' style='width:150px;height:150px'/></td>"; ?>
					<td><?php echo $row[5];?></td>
					<td><?php
					//print_r($quantity);
					echo $row[6]; ?></td>
					<td><?php echo $total; ?></td>
					 
				</tr>

				<?php }?>  
			 <tr>
					<td colspan="3"> </td>
				   <td>Total</td>
				   <td><?php //echo $final_total;?></td>
				</tr>
			</table>
	
	 <div class="col-md-9">
	 <div class="row">
	   <div class="col-md-4">
		<?php echo '<a href="cart.php?Cart_Id='.$Cart_Id.'&amp;Cust_Id='.$Cust_Id.'" class="btn btn-primary"> Back</a>' ;?>
	   </div>
	<div class="col-md-4">
		<a href="index.php" class="btn btn-primary">Continue to Shopping</a>
	</div>	
	<div class="col-md-4">
		<?php echo '<a href="checkout.php?Book_Id='.$row[0].'&Book_Price='.$row[4].' "  class="btn btn-primary"
		style="float:right">Procced to CheckOut</a>' ?>
	</div>	
	</div>
    </div>	
	 </div>

</div>
</div>	