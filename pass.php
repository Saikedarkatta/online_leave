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
		<li> <a href="pass.php">| Change Password |</a></li>
		<li> <a href="home.html">| Log out |</a></li>
	</ul>
</div>
<?php 
	echo "<br>";
	echo "<marquee>";echo "<font size=5px color='red'>";echo "welcome";echo " ";echo  $_SESSION['username']; echo "</font>"; echo "</marquee>";
?>
</center>

<center>
<br><h4>Change Password</h4></br>
<p>Old Password:<input type="password" name="old"></p>
<p>New Password:<input type="password" name="new1"></p>
<p>Confirm Password:<input type="password" name="new2"></p>
<input type="submit" value="submit" name="sub">
<input type="reset" value="reset" name="res">
</center>

<?php 
       if(isset($_POST['sub'])){

$old = $_POST['old'];

$new1 = $_POST['new1'];
$new2 = $_POST['new2'];
$a=$_SESSION['username'];
 
	if ($new1 != $new2)
	{
		echo "<br>Passwords do not match.</br><a href=\"pass.php\">GO BACK</a>";
	}

	else
	{
		$sql="UPDATE admin_login set password='$new1' WHERE username='$a'";

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
</body>
</html>

