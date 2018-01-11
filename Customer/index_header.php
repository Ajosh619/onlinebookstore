<html>
<head>
<title>index page</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
<link  href="css/stylesheet.css"  rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="themes/images/ico/favicon.ico">
<script type="text/javascript" src="bootstrap/js/jquery.min.js">
</script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js">
</script>
<script type="text/javascript">
 $(function() {
        $('#myCarousel').carousel({interval: 1000});
        $('#myCarousel').on('slid', function() {
            var to_slide = $('.carousel-item.active').attr('data-slide-no');
            $('.myCarousel-target.active').removeClass('active');
            $('.carousel-indicators [data-slide-to=' + to_slide + ']').addClass('active');
        });
        $('.myCarousel-target').on('click', function() {
            $('#myCarousel').carousel(parseInt($(this).attr('data-slide-to')));
            $('.myCarousel-target.active').removeClass('active');
            $(this).addClass('active');
        });
    });

function openWin() {
		alert("Number of books Added");
		setTimeout(function (){ close() }, 1000);
}
function login(){
	alert("Please login your Account");
}
</script>
</head>
<body>
<?php  
include('connect.php');
 session_start(); 


?>

<div class="container" >
<div class="row content">
<!--<nav class="navbar">
     
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
			<img src="images/logo.png" />
		  </a>
        </div>    
       
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
          <ul class="nav navbar-nav top-menu navbar-right">
            <li><a href="#">HOME</a></li>
			  <li><a href="#">ABOUT </a></li>
			  <li><a href="#">MENU</a></li>
			  <li><a href="#">GALLERY</a></li>
			  <li><a href="#">TAKE OUT ORDER </a></li>	
			  <li><a href="#">CONTACT </a></li>	
          </ul>
        </div>
    </nav> -->
<nav class="navbar navbar-inverse" style="margin-top:8px" >
  <div class="container-fluid" >
	        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>    
    <div class="collapse navbar-collapse" id="navbar-collapse-1">    
    <ul class="nav navbar-nav">
            <li><a href="index.php" >Home</a></li>                           
            <li><a href="new_releases.php">New Releases</a></li> 
            <li><a href="cart.php">Your Books</a></li>  			
            <li><a href="about_us.php">About Us</a></li> 
            <li><a href="contact.php">Contact</a></li>
			
			
    </ul>
	
		 <?php
		 if($_SESSION == true){
           $login_userid = $_SESSION['login_user'];
if($login_userid){
	$sql="select * from customer where Cust_Id=$login_userid";
	 $result = mysqli_query($connection,$sql);
	 $rowdata = mysqli_fetch_row($result);
	 $name  = $rowdata[1];

 ?>	
<ul class="nav navbar-nav navbar-right">
<?php 
	$sql1="select count(*) from cart where Cust_Id=$login_userid";
	 $result1 = mysqli_query($connection,$sql1);
	 $row1 = mysqli_fetch_row($result1);
	//print_r($row1);
?>
<li><a href="cart.php?Cust_Id=<?php echo $rowdata[0]; ?>"><span style="font-size:15px;font-weight:bold;color:#fff;"><?php echo $row1[0]; ?> </span><span class="glyphicon glyphicon-shopping-cart shopping-cart-icon"></span> </a></li>

	
<?php
	
}else{
	$name = "";

}
		 }
?>		 
</ul>		 
<ul class="nav navbar-nav navbar-right">

 <?php 
      //print_r($_SESSION);
	  if($_SESSION && $_SESSION['login_user']){ 	

      echo '  <li style="font-size:15px;color:#fff;padding-top: 15px;font-weight:bold;"> '.$name.'</li>
	  <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li> ' ?>
    
	 <?php }else{ ?>
	 <li><a href="login_index.php"><span class="glyphicon glyphicon-log-in"></span> Sign In</a></li>
	 <li><a href="new_customer.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
		  
	 <?php }
	  ?>

</ul>
  </div>
  </div>
</nav>
</div>
</div>

