<?php
	session_start();
?>
<?php include "connect.php"
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

				<li>
		  <a href="login1.php">|  Admin Login  |</a></li>

                   <li> <a href="login2.php">| Staff Login |</a></li>
      
		<li>
		  <a href="contact.html">|  Contact Us  |</a></li>
	</ul>
</div>
</center>

<?php 
$usrname = $_POST['un1'];
$upwd = $_POST['pass1'];
$sql="SELECT * FROM staff_details WHERE Username='$usrname' AND Password='$upwd'";
$result = $conn->query($sql);
if(!$row = $result->fetch_assoc()){
	echo "</br>";
	echo "<center>";echo "<h1>";echo "<font color='red'>"; echo "Invalid username or password !!";echo "</font>";echo "</h1>";
	echo "<br>";
	echo "<font size='4px'>";echo "<a href='login2.php'>";echo "click here to try again";echo "</a>";echo "</font>";echo "</center>";
}
else {
       header('location:2.php');
	$_SESSION['Username']=$usrname;
	$_SESSION['Password']=$upwd;
}

 ?>
<center>
</center>
</body>
</html>