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

</br></br></br></br>
<?php
	$t=$_SESSION['leave_type'];
	$d=$_SESSION['days'];
	$a=$_SESSION['userName'];
	echo "<p><center><bold><font size=6px>The ".$t. " leave of ".$a." has been approved.</font></bold></center></p>";
?>

<br>
<form action="manage.php">
<input type="submit" value="Go Back"><br></center>
</form>

</body>
</html>
