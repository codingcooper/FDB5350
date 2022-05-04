<html>
	<head>
	<link rel="stylesheet" href="table_.css">
    <link rel="stylesheet" href="ex.css">
	</head>
	<body>
		<fieldset>
			<h2 align="center">Generate Invoice</h2>
			<form method="post" action="" return validate(this)>
				<table cellspacing="10px" align="center">
					<tr><td> <label>Name  </label> </td>
					    <td> <input type="text" name="username" > </td>
					</tr>

					<tr><td> <label>Mail id <label> </td>
					    <td> <input type="email" name="mail" > </td>
					</tr>

					<tr><td> <label>Mobile <label> </td>
					    <td> <input type="text" name="mobile"> </td>
					</tr>

					<tr><td> <label>Products Purchased</label> </td>
					    <td> <input type="text" name="purchase" > </td>
					</tr>

					<tr><td> <label>Total Amount</label></td>
					    <td> <input type="text" name="amount"></td>
					</tr>

					

					<tr><td><input type="submit" name="submit"> </td>
					    <td><input type="reset"> </td>
					</tr>

				</table>
			</form>
		</fieldset>
	</body>
</html>


<?php
if (isset($_POST['submit'])){
	$con=mysqli_connect("localhost","root","","demo") or die(mysqli_connect_error());
	$username = $_POST['username'];
	$mail = $_POST['mail'];	
	$mobile = $_POST['mobile'];
	$purchase = $_POST['purchase'];
	$amount = $_POST['amount'];
	$q = "insert into invoice (username,mail,mobile,purchase,amount) values('$username','$mail','$mobile','$purchase','$amount')";
	$result=mysqli_query($con,$q);
	#mysqli_free_result($result);
	mysqli_close($con);
}
	?>