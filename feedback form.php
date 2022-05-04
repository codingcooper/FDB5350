<!DOCTYPE html>    
<html>    
<head>    
<style>    
* {    
  box-sizing: border-box;    
}    
    
input[type=text], select, textarea {    
  width: 100%;    
  padding: 12px;    
  border: 1px solid rgb(70, 68, 68);    
  border-radius: 4px;    
  resize: vertical;    
}    
input[type=email], select, textarea {    
  width: 100%;    
  padding: 12px;    
  border: 1px solid rgb(70, 68, 68);    
  border-radius: 4px;    
  resize: vertical;    
}    
    
label {    
  padding: 12px 12px 12px 0;    
  display: inline-block;    
}    
    
input[type=submit] {    
  background-color: rgb(37, 116, 161);    
  color: white;    
  padding: 12px 20px;    
  border: none;    
  border-radius: 4px;    
  cursor: pointer;    
  float: right;    
}    
    
input[type=submit]:hover {    
  background-color: #45a049;    
}    
    
.container {    
  border-radius: 5px;      
  padding: 20px;    
}    
    
.col-25 {    
  float: left;    
  width: 25%;    
  margin-top: 6px;    
}    
    
.col-75 {    
  float: left;    
  width: 75%;    
  margin-top: 6px;    
}    
    
/* Clear floats after the columns */    
.row:after {    
  content: "";    
  display: table;    
  clear: both;    
}    
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
<body> 
  
  <div class="topnav">
    <a href="welcome.php">Home</a>
    <a href="service.html">Dog Care Services</a>
    <a href="dt.html">Dog Training Services</a>
    <a href="ba.php">Book Appointment</a>
    <a class="active" href="feedback form.html">Feed Back</a>
    <a href="index.html">Products</a>
    </div>       
<h2>FEED BACK FORM</h2>    

  <form method="POST"> 
  <div class="container"> 
    <div class="row">    
      <div class="col-25">
        <label for="fname">First Name</label> 
      </div>
        <div class="col-75">    
          <input type="text" id="fname" name="fname" placeholder="Your name..">    
        </div>  
    </div>      
    <div class="row">    
      <div class="col-25">    
        <label for="lname">Last Name</label>    
      </div>    
      <div class="col-75">    
        <input type="text" id="lname" name="lname" placeholder="Your last name..">    
      </div>    
    </div>    
    <div class="row">    
        <div class="col-25">    
          <label for="email">Mail Id</label>    
        </div>    
        <div class="col-75">    
          <input type="text" id="email" name="email" placeholder="Your mail id..">    
        </div>    
    </div>    
    
    <div class="row">    
      <div class="col-25">    
        <label for="feed_back">Feed Back</label>    
      </div>    
      <div class="col-75">    
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>    
      </div>    
    </div>    
    <div class="row">    
      <input type="submit" name="submit" value="Submit">    
    </div>
  </div>    
  </form>    
</div>   
</body>    
</html>
<?php
if (isset($_POST['submit'])){
	$con=mysqli_connect("localhost","root","","demo") or die(mysqli_connect_error());
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];	
	$email = $_POST['email'];
  $subject = $_POST['subject'];
	$q = "insert into fd(fname,lname,email,subject) values('$fname','$lname','$email','$subject')";
	$result=mysqli_query($con,$q);
	#mysqli_free_result($result);
	mysqli_close($con);
}
	?>