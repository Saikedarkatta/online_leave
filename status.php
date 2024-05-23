<?php 
	session_start();
?>
<?php 
include 'connect.php';
?>

<html>
<head>
<title>|| Leave Management System ||</title>
<link href="default.css" rel="stylesheet" type="text/css" />
</head>


<body>

<div id="header">
  <table width="200" align="center">
    <tr>
      <td height="212"><img src="2.jpg"  width="770" height="210" /></td>
    </tr>
  </table>
</div>

<center>
<div id="menu">
	<ul>
	<font color="white">	
		<li> <a href="2.php">| Home |</a></li>
		<li> <a href="pass2.php">| Change Password |</a></li>
		<li> <a href="home.html">| Log out |</a></li>
	</font>
 	</ul>
</div>
</center>
<?php 
	echo "<br>";
	echo "<marquee>";echo "<font size=5px color='red'>";echo "welcome";echo " ";
	echo  $_SESSION['Username']; echo "</font>"; echo "</marquee>";

echo "<center>";
echo "<br>";
echo "<h2>";echo "LEAVE STATUS";echo "</h2>";

$Username= $_SESSION['Username'];
$sql="SELECT * FROM leave_requests WHERE Username='$Username'";
$result = $conn->query($sql);

echo "<table border='1' cellpadding='10'>";
echo "<th>DateOfRequest</th><th>TypeOfLeave</th><th>FromDate</th><th>ToDate</th><th>NoOfDays<th>Status</th>";

while($res=mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td>".$res['dateofrequest']."</td><td>".$res['leave_type']."</td><td>".$res['leave_from']."</td><td>".$res['leave_to']."</td><td>".$res['days']."</td><td>".$res['status']."</td>";
	echo "</tr>";
}
echo "</table>";

?>
<br>
	<form action="2.php">
	<input type="submit" value="Back" formaction="2.php"><br></center>
	</form>
</body>
</html>
