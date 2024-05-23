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
      <td height="212"><img src="2.jpg"  width="770" height="210" /></td>
    </tr>
  </table>
</div>

<center>
<div id="menu">
	<ul>
	<font color="white">	
		<li> <a href="2.php">| Home |</a></li>
		<li> <a href="pass2.php">| Change Password |</a></li>
		<li> <a href="logout.php">| Log out |</a></li>
	</font>
 	</ul>
</div>
<?php 
	echo "<br>";
	echo "<marquee>";echo "<font size=5px color='red'>";echo "welcome";echo " ";echo  $_SESSION['Username']; echo "</font>"; echo "</marquee>";
?>
</center>

<table align="center" width=550 height=200 cellspacing="40">
<tr><td align="center" width=150 height=60 bgcolor="#87CEF0" class="id"><a href="applyleave.php"><font size="6px" color="white">Apply Leave</font></a></td></tr>
<br>
<br>
<tr><td align="center" width=150 height=60 bgcolor="#87CEF0" class="id"><a href="status.php"><font size="6px" color="white">Check Leave Status</font></a></td></tr>
<br>
<br>
<tr><td align="center" width=150 height=60 bgcolor="#87CEF0" class="id"><a href="stat.php"><font size="6px" color="white">Leave Statistics</font></a></td></tr>
<br>
</table>
</center>
</body>
</html>
