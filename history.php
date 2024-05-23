<?php 
	session_start();
?>
<?php
	include "connect.php"
?><html>
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
	echo "<marquee>";echo "<font size=5px color='red'>";echo "welcome";echo " ";echo  $_SESSION['username']; echo "</font>"; echo "</marquee>";
?>

</center>

<center>


<?php
include 'connect.php'; 

$id=$_SESSION['leaveid'];
echo "<br><h1>Leave History of ".$id. "</h1></br></br>";

$sql="select * from leave_requests where leaveid='$id' ";
$result=$conn->query($sql);

echo "<table border='1' cellpadding='10'>";

echo "<tr>";
echo "<th>Username</th><th>DateofRequest</th><th>Typeofleave></th><th>FromDate</th><th>ToDate</th><th>Noofdays</th><th>Status</th>";
echo "</tr>";

while($res=mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td>".$res['userName']."</td><td>".$res['dateofrequest']."</td><td>".$res['leave_type']."</td><td>".$res['leave_from']."</td><td>".$res['leave_to']."</td><td>".$res['days']."</td><td>".$res['status']."</td>";
	echo "</tr>";
}
	
echo "</table>";
?>

<center>
<br>
<form action="approval.php">
<input type="submit" value="Back"><br></center>
</form>
</center>

</body>
</html>

