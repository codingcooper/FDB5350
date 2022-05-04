<html>
    <head>
    <link rel="stylesheet" href="table_.css">
    <link rel="stylesheet" href="ex.css">
    <style>
        
    </style>
    </head>
    <body>
</body>
</html>

<?php
$con=mysqli_connect("localhost","root","","demo") or die(mysqli_connect_error());
$q = "select invoice.username, invoice.mail, invoice.mobile, invoice.purchase, invoice.amount from invoice";
$result=mysqli_query($con,$q);
if($result) {
	echo "<table align=center border=2 cellspacing=0>";
    echo "<br><h1><center>Invoice Details</center></h1>";
	echo "<br><tr><th>NAME</th>
			  <th>MAIL</th>
              <th>MOBILE</th>
              <th>PURCHASE</th>
              <th>AMOUNT</th>
		  </tr>";
	while($row=mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>$row[0]</td>";
		echo "<td>$row[1]</td>";
        echo "<td>$row[2]</td>";
        echo "<td>$row[3]</td>";
        echo "<td>$$row[4]</td></tr>";
	}
	echo "</table>";
}
else
	echo "<h2>No records found</h2>";
#mysqli_free_result($result);
mysqli_close($con);

?>
