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
      <td height="212"><img src="1.png"  width="770" height="210" /></td>
    </tr>
  </table>
</div>

<center>
<div id="menu">
	<ul>
	<font color="white">	
		<li> <a href="1.php">| Home |</a></li>
		<li> <a href="pass1.php">| Change Password |</a></li>
		<li> <a href="home.html">| Log out |</a></li>
	</font>
 	</ul>
</div>
</center>
<?php 
	echo "<br>";
	echo "<marquee>";echo "<font size=5px color='red'>";echo "welcome";echo " ";
	echo  $_SESSION['username']; echo "</font>"; echo "</marquee>";

echo "<center>";
echo "<br>";
echo "<h2>";echo "STAFF DETAILS";echo "</h2>";

$sql="SELECT * FROM staff_details";
$result = $conn->query($sql);

echo "<table border='1' cellpadding='10'>";
echo "<th>Name</th><th>Age</th><th>Gender</th><th>DateOfBirth</th><th>Designation</th><th>Department</th><th>EmailID</th><th>ContactNO</th>";

while($res=mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td>".$res['name']."</td><td>".$res['age']."</td><td>".$res['gender']."</td><td>".$res['DOB']."</td><td>".$res['designation']."</td><td>".$res['department']."</td><td>".$res['emailid']."</td><td>".$res['contactno']."</td>";
	echo "</tr>";
}
echo "</table>";

?>
<br>
	<form action="1.php">
	<input type="submit" value="Back" formaction="1.php"><br></center>
	</form>
</body>
</html>
