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
		<li> <a href="2.php">| Home |</a></li>
		<li> <a href="pass2.php">| Change Password |</a></li>
		<li> <a href="home.html">| Log out |</a></li>
	</ul>
</div>
<?php 
	echo "<br>";
	echo "<marquee>";echo "<font size=5px color='red'>";echo "welcome";echo " ";
	echo  $_SESSION['Username']; echo "</font>"; echo "</marquee>";
?>
</center>

<center>
<br><h4>Change Password</h4></br>

<form role="form" method="post">

<p>Old Password:<input type="password" name="oldp"></p>
<p>New Password:<input type="password" name="newp1"></p>
<p>Confirm Password:<input type="password" name="newp2"></p>
<input type="submit" value="Submit" name="Submit">
<input type="reset" value="Reset" name="Reset">
</form>
</center>

<?php 
       if(isset($_POST['Submit'])){

$oldp = $_POST['oldp'];

$newp1 = $_POST['newp1'];
$newp2 = $_POST['newp2'];
$a=$_SESSION['Username'];
$b=$_SESSION['Password'];
	
	 
	if ($oldp != $b)
	{
		echo "</br></br>";
		echo "<center><br>The password you have entered is incorrect.</br><a href=\"pass2.php\">GO BACK</a></center>";
	}
 
 	else if ($newp1 != $newp2)
	{
		echo "</br></br>";
		echo "<center><br>Passwords do not match.</br><a href=\"pass2.php\">GO BACK</a></center>";
	}
	 
	else if ($oldp == $newp2)
	{
		echo "</br></br>";
		echo "<center><br>You have entered the old password.</br><a href=\"pass2.php\">GO BACK</a></center>";
	}

	else
	{
		$sql="UPDATE staff_details set Password='$newp1' WHERE Username='$a'";

		if($conn->query($sql)==TRUE)
		{
			header('Location:c1.php');
 
		}


		else
		{
          
			echo "Error: " . $sql . "<br>" . $conn->error;

		}
        
	}
}
?>
</body>
</html>

