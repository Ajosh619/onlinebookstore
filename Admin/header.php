<html>
<head>
<title>index page</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
<link  href="css/style.css"  rel="stylesheet" type="text/css" />
<script type="text/javascript" src="bootstrap/js/jquery.min.js">
</script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js">
</script>
</head>
<body>
<?php 
SESSION_START();
?>


<div class="container" >
<div class="row" style="padding-top:10px">

       
		<a href="index.php" class="btn btn-primary" type="button">Home</a>
		
  </ul>
  <ul class="nav navbar-nav navbar-right" style="display:inline-block;">

       

        <?php 
	  //print_r($_SESSION);
	  if($_SESSION && $_SESSION['login_user']){ ?>	

        <a href="booklist.php" class="btn btn-primary" type="button">Books</a>
		<a href="logout.php" class="btn btn-primary" type="button"> Logout</a>
		
	 <?php }else{ ?>
	 
	
    <a href="users.php" class="btn btn-primary" type="button" >New User</a> 
	
   
    
	  
	 <?php }	  ?>
 
	 

  </div>	


</div>


