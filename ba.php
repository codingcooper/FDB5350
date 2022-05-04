<!DOCTYPE html>
<html lang="en">

<head>
 
<link href="ft-form-styles-v3.css" rel="stylesheet">
  <style>
    body{ font: 14px sans-serif; text-align: center; }
    .topnav {
    background-color: #333;
    overflow: hidden;
    }
   
    .topnav a {
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
    }

    .topnav a:hover {
    background-color: #ddd;
    color: black;
    }

    .topnav a.active {
    background-color: #342689;
    color: white;
    }
    </style>

</head>
<div class="topnav">
  <a href="welcome.php">Home</a>
  <a href="service.html">Dog Care Services</a>
  <a href="dt.html">Dog Training Services</a>
  <a class="active" href="ba.php">Book Appointment</a>
  <a href="feedback form.php">Feed Back</a>
  <a href="index.html">Products</a>
</div>
<form method="POST" id="ft-form">
  <fieldset>
    <br><br>
    <h1><legend>Book an Appointment</legend></h1>
    <label>
      Name
      <input type="text" name="name" required>
    </label>
    <div class="two-cols">
      <label>
        Email address
        <input type="text" name="email" required>
      </label>
      <label>
        Phone number
        <input type="text" name="phone">
      </label>
    </div>
  </fieldset>
  <fieldset>
    <label>
      Date
      <input type="text" name="date" placeholder="DD-MM-YYYY">
    </label>
    <fieldset>
      <fieldset>
        <label>
          Time
          <input type="text" name="time" placeholder="HR:MIN:AM/PM">
        </label>
        <fieldset>
    </div>
    <span>Service Requested</span>
    <div class="inline">
      <label>
        <input type="radio" name="service" value="Dog Care Services">
        Dog Care Services
      </label>
      <label>
        <input type="radio" name="service" value="Dog Training Services">
        Dog Training Services
      </label>
    </div>
  </fieldset>
  <div class="btns">
    <input type="text" name="_gotcha" value="" style="display:none;">
    <input type="submit" name ='submit' value="Submit request">
  </div>
   
</form>
</html>

<?php
if (isset($_POST['submit'])){
	$con=mysqli_connect("localhost","root","","demo") or die(mysqli_connect_error());
	$name = $_POST['name'];
	$email = $_POST['email'];	
	$phone = $_POST['phone'];
	$date = $_POST['date'];
  $time = $_POST['time'];
  $service = $_POST['service'];
	$q = "insert into ap(name,email,phone,date,time,service) values('$name','$email','$phone','$date','$time','$service')";
	$result=mysqli_query($con,$q);
	#mysqli_free_result($result);
	mysqli_close($con);
}
	?>
