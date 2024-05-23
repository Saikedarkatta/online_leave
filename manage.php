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
<br><h1>Manage Leaves</h1></br>
</br>

<?php
include 'connect.php'; 
 
$sql="select * from leave_requests";
$result=$conn->query($sql);

echo "<table border='1' cellpadding='10'>";
echo "<tr>";
echo "<th>LeaveID</th><th>Username</th><th>DateofRequest</th><th>Typeofleave</th><th>FromDate</th><th>ToDate</th><th>Noofdays</th><th>Status</th>";
echo "<tr>";
while($res=mysqli_fetch_array($result))
{
	$st=$res['status'];
	if($st=='pending')
	{        
	$l=$res['leaveid'];
	//echo "$1";
	$_SESSION['leaveid']=$l;
	echo "<tr>";
	echo "<td><a href=\"approval.php\">".$res['leaveid']."</a></td><td>".$res['userName']."</td><td>".$res['dateofrequest']."</td><td>".$res['leave_type']."</td><td>".$res['leave_from']."</td><td>".$res['leave_to']."</td><td>".$res['days']."</td><td>".$st."</td>";
	echo "</tr>";
	}
	
 }
 echo "</table>";
?>
<br>
	<form action="1.php">
	<input type="submit" value="Back" formaction="1.php"><br>
	</form>

<br><br><br>
<font color="black"><p><h2>Click on the LeaveID to select what to happen with the leave request*/</p></h2></font>
</center>
</body>
</html>

