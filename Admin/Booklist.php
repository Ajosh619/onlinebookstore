<?php
include('connect.php');
include('header.php');
include('footer.php');
$sql_query = mysqli_query($connection,"SELECT * from books");
?>

<div class="container">
 <div class="col-sm-12 col-md-12 col-lg-12">
  <table class="table table-border" border="2px solid black" >

        <thead>
      <tr>
	    <th>Num </th>
        <th>Book Name</th>
        <th>Author Name</th>
        <th>Book Image</th>
		<th>Book Rate</th>
		<th>Format</th>
		<th>Lanquage</th>
		<th>Released</th>
		<th>Pages</th>
	    <th>Category</th>
		<th>Description</th>
		<th>Available Books</th>
		<th>features</th>
      </tr>
    </thead>
	
    <tbody>
	<center><a href="Add.php" type="button" class="btn btn-primary">Add More Books</a></center><br>
	
<?php
while($row = mysqli_fetch_row($sql_query)){
	
	//print_r($row);
	$bookid = $row[0];
	$book_name = $row[1];
	$Author_Name = $row[3];
	$Book_Image = $row[2];
	$Book_Rate = $row[4];
	$format = $row[5];
	$language = $row[6];
	$released = $row[7];
	$pages = $row[8];
	$Category_id = $row[9];	
	$sql_query1 = mysqli_query($connection,"SELECT category_Name from category where cateogry_Id = $Category_id ");
	$category_row = mysqli_fetch_row($sql_query1);
	//print_r($category_row);
	//exit;
	$Category_name = $category_row[0];
	$Description = $row[10];
	$Available_Books = $row[11];
	echo "<tr>";
	//echo "<ol>";
	//echo "<li> </li>";
	//echo "</ol>";
	 echo "<td>".$bookid."</td>";
    echo "<td>".$book_name."</td>";
    echo  " <td>".$Author_Name."</td>";
    echo " <td><img src='".$Book_Image."' style='width:100px;height:100px;'/></td>";
	echo " <td>".$Book_Rate."</td>";
	echo  " <td>".$format."</td>";
	echo  " <td>".$language."</td>";
	echo  " <td>".$released."</td>";
	echo  " <td>".$pages."</td>";
	echo " <td>".$Category_name."</td>";
	echo " <td>".$Description."</td>";
    echo " <td>".$Available_Books."</td>";
	echo '<td><a href="Edit.php?Book_Id='.$row[0].'" class="btn btn-primary" type="button">Edit</a><br><br>
	 <a href="Delete.php?Book_Id='.$row[0].'" class="btn btn-primary" type="button">Delete</a></td>';
   echo "</tr>";
	}
?>

      
    </tbody>
  </table>
  
 </div>
 
</div>


