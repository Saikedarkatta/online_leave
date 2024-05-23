<?php 
	session_start();
?>
<?php include 'connect.php';?>
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
		<li> <a href="1.php">| Home |</a></li>
		<li> <a href="pass1.php">| Change Password |</a></li>
		<li> <a href="home.html">| Log out |</a></li>
 	</ul>
</div>
<?php 
	echo "<br>";
	echo "<marquee>";echo "<font size=5px color='red'>";echo "welcome";echo " ";
	echo  $_SESSION['username']; echo "</font>"; echo "</marquee>";
?>
</center>

<?php
include 'connect.php';

$Username= $_POST['Username'];
echo "<center>";
echo "<br>";
echo "<h2>";echo "STAFF DETAILS";echo "</h2>";
echo "<br>";
$sql="SELECT * FROM staff_details WHERE Username='$Username'";
$result = $conn->query($sql);
if($row=mysqli_fetch_array($result))
{
	echo "<table border='1' cellpadding='10'>";
	echo "<th>*</th><th>Details</th>";
	echo "<tr>";
	echo "<td  style='padding-top:2%'>";
	echo "<font color='black'>";
	echo "USERNAME   ";
	echo "</td>";
	echo "<td>";
	echo $row['Username'];
	echo "</font>";
	echo "</td>";
	echo "</tr>";
	
	echo "<tr>";
	echo "<td  style='padding-top:2%'>";
	echo "<font color='black'>";
	echo "NAME   ";
	echo "</td>";
	echo "<td>";
	echo $row['name'];
	echo "</font>";
	echo "</td>";
	echo "</tr>";
	
	echo "<tr>";
	echo "<td  style='padding-top:2%'>";
	echo "<font color='black'>";
	echo "AGE   ";
	echo "</td>";
	echo "<td>";
	echo $row['age'];
	echo "</font>";
	echo "</td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td  style='padding-top:2%'>";
	echo "<font color='black'>";
	echo "GENDER   ";
	echo "</td>";
	echo "<td>";
	echo $row['gender'];
	echo "</font>";
	echo "</td>";
	echo "</tr>";
	
	echo "<tr>";
	echo "<td  style='padding-top:2%'>";
	echo "<font color='black'>";
	echo "Date Of Birth   ";
	echo "</td>";
	echo "<td>";
	echo $row['DOB'];
	echo "</font>";
	echo "</td>";
	echo "</tr>";
	
	echo "<tr>";
	echo "<td  style='padding-top:2%'>";
	echo "<font color='black'>";
	echo "DESIGNATION   ";
	echo "</td>";
	echo "<td>";
	echo $row['designation'];
	echo "</font>";
	echo "</td>";
	echo "</tr>";
	
	echo "<tr>";
	echo "<td  style='padding-top:2%'>";
	echo "<font color='black'>";
	echo "DEPARTMENT   ";
	echo "</td>";
	echo "<td>";
	echo $row['department'];
	echo "</font>";
	echo "</td>";
	echo "</tr>";
	
	echo "<tr>";
	echo "<td  style='padding-top:2%'>";
	echo "<font color='black'>";
	echo "ADDRESS   ";
	echo "</td>";
	echo "<td>";
	echo $row['address'];
	echo "</font>";
	echo "</td>";
	echo "</tr>";
	
	echo "<tr>";
	echo "<td  style='padding-top:2%'>";
	echo "<font color='black'>";
	echo "EMAILID   ";
	echo "</td>";
	echo "<td>";
	echo $row['emailid'];
	echo "</font>";
	echo "</td>";
	echo "</tr>";
	
	echo "<tr>";
	echo "<td  style='padding-top:2%'>";
	echo "<font color='black'>";
	echo "CONTACTNO   ";
	echo "</td>";
	echo "<td>";
	echo $row['contactno'];
	echo "</font>";
	echo "</td>";
	echo "</tr>";

	echo "</table>";
}

else
{
	echo "Staff not exist!";
	echo "</br>";
}
	
$_SESSION['username']=$username;
?>
<br>
	<form action="1.php">
	<input type="submit" value="Back" formaction="1.php"><br></center>
	</form>
</body>
</html>
