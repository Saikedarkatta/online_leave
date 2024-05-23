<?php 
	session_start();
?>
<?php 
include 'connect.php'?>
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
	echo "<marquee>";echo "<font size=5px color='red'>";echo "welcome";echo " ";echo  $_SESSION['username']; echo "</font>"; echo "</marquee>";
?>
</center>

</br></br>
<p><center><h2> View Staff Details </h2></center></p>

<center>
<form action="s3.php" method="post">
<div>
<center>
<font size=3px>
</br>
<p>Enter user name to get details*:<input type="text" name="Username" required="required"></p>
</font>
</center>
	<br>
	<center>
	<button>Get Details</button>
	</form>
</br></br>
	<br><center>
	<form action="1.php">
	<input type="submit" value="Back" formaction="1.php"><br></center>
	</form>
</form>
</body>
</html>	
