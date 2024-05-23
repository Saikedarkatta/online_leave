<?php
	session_start();
?>
<?php
	include "connect.php"
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
		<li> <a href="home.html">| Home |</a></li>

		<li> <a href="login1.php">|  Admin Login  |</a></li>

	    <li> <a href="login2.php">| Staff Login |</a></li>
      
		<li> <a href="contact.html">|  Contact Us  |</a></li>
	</ul>
</div>
</center>
<?php 
$uname = $_POST['un'];
$upassword = $_POST['pass'];
$sql="SELECT * FROM adm_login WHERE username='$uname' AND password='$upassword'";
$result = $conn->query($sql);
if(!$row = $result->fetch_assoc()){
	echo "</br>";echo "</br>";
	echo "<center>";echo "<font color='red' size='5px'>"; echo "Invalid username or password !!";echo "</font>";
	echo "<br>";echo "</br>";echo "</br>";
	echo "<font size='4px'>";echo "<a href='login1.php'>";echo "click here to try again.";echo "</a>";echo "</font>";echo "</center>";
}
else
 {
       header('location:1.php');
	$_SESSION['username']=$uname;
	$_SESSION['password']=$upassword;
}
?>
<center>
</center>
</body>
