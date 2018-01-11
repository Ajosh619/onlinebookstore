<?php 
include('connect.php');
include('headertemp.php');

$contact_id=$_GET['contact_id'];
$sql_query = mysqli_query($connection,"select * from contact where contact_id = $contact_id");
$rowdata = mysqli_fetch_row($sql_query);

//print_r($rowdata);
?>


<form method="POST" action="contacteditdb.php?contact_id=<?php echo $contact_id;?>">
<div style="border: 2px solid blue" class="container">
<div class="row">
<h2>Contact</h2>
</div>
<br>
<div class="row">
  <label class="col-sm-3" id="basic-addon1">Name</label>
  <div class="col-sm-6">
    <input type="text" class="form-control" name="name" value="<?php echo $rowdata[1];?>">
	</div>
</div>
<br>
 <div class="row">
    <label class="control-label col-sm-3">Phone</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="phone" value="<?php echo $rowdata[2];?>">
    </div>
	</div>
<br>
 <div class="row">
    <label class="control-label col-sm-3">Email</label>
    <div class="col-sm-6">
      <input type="email" class="form-control" name="email" value="<?php echo $rowdata[3];?>">
    </div>
	</div>
<br>
 <div class="row">
    <label class="control-label col-sm-3">Subject</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="subject" value="<?php echo $rowdata[4];?>">
    </div>
	</div>
<br>
 <div class="row">
    <label class="control-label col-sm-3">Message</label>
    <div class="col-sm-6">
<textarea rows="4" cols="50"  name="message" placeholder="message" value="<?php echo $rowdata[5];?>">
</textarea>
</div>
</div>
<br>
<br>

<br>
<div class="form-group"> 
	<div class="col-sm-offset-10 col-sm-2">
<input type="submit" value="submit" class="btn btn-primary">
    </div>
  </div>
  <br>
  <br>
</div>
</form>
