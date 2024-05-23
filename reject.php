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

<?php
$a=$_SESSION['leaveid'];

$q1="SELECT * from leave_requests WHERE leaveid='$a'";
$r=$conn->query($q1);
$r1=mysqli_fetch_array($r);

$u=$r1['userName'];
$t=$r1['leave_type'];
$d=$r1['days'];

	if($t == 'casual')
	{
		header('Location:rl.php');
 
		$_SESSION['userName']=$u;
		$_SESSION['days']=$d;
		$_SESSION['leave_type']=$t;
	}

	else if($t == 'sick')
	{
		header('Location:rl.php');
 
		$_SESSION['userName']=$u;
		$_SESSION['days']=$d;
		$_SESSION['leave_type']=$t;
	}


	else if($t == 'earned')
	{
		header('Location:rl.php');
 
		$_SESSION['userName']=$u;
		$_SESSION['days']=$d;
		$_SESSION['leave_type']=$t;
	}


	else
	{
          
		echo "Error: " . $sql . "<br>" . $conn->error;

	}
        

?>

</body>
</html>

