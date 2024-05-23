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

<center>
<br><h4>Change Password</h4></br>

<form role="form" method="post">

<p>Old Password:<input type="password" name="old" required="required"></p>
<p>New Password:<input type="password" name="new1" required="required"></p>
<p>Confirm Password:<input type="password" name="new2" required="required"></p>
<input type="submit" value="submit" name="submit">
<input type="reset" value="reset" name="res">
</form>
</center>

<?php 
       if(isset($_POST['submit'])){

$old = $_POST['old'];

$new1 = $_POST['new1'];
$new2 = $_POST['new2'];
$a=$_SESSION['username'];
$b=$_SESSION['password'];
	
	 
	if ($old != $b)
	{
		echo "</br></br>";
		echo "<center><br>The password you have entered is incorrect.</br><a href=\"pass1.php\">GO BACK</a></center>";
	}
 
	else if ($new1 != $new2)
	{
		echo "</br></br>";
		echo "<center><br>Passwords do not match.</br><a href=\"pass1.php\">GO BACK</a></center>";
	}
	 
	else if ($old == $new2)
	{
		echo "</br></br>";
		echo "<center><br>You have entered the old password.</br><a href=\"pass1.php\">GO BACK</a></center>";
	}

	else
	{
		$sql="UPDATE adm_login set password='$new1' WHERE username='$a'";

		if($conn->query($sql)==TRUE)
		{
			header('Location:c2.php');
 
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

