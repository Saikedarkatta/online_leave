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

<table align="center" width=550 height=200 cellspacing="40">

<tr><td align="center" width=150 height=60 bgcolor="#87CEF0" class="id"><a href="history.php"><font size="6px" color="white">Check Leave History</font></a></td></tr>
<br>

<tr><td align="center" width=150 height=60 bgcolor="#87CEF0" class="id"><a href="approve.php"><font size="6px" color="white">Approve Leave</font></a></td></tr>
<br><br>

<tr><td align="center" width=150 height=60 bgcolor="#87CEF0" class="id"><a href="reject.php"><font size="6px" color="white">Reject Leave</font></a></td></tr>
<br><br>

</table>
	 
</body>
</html>
