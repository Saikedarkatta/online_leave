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

<form role="form" method="post">

<?php 
       if(isset($_POST['delete'])){

$uname12= $_POST['uname1'];

$sql="delete from staff_details where Username='$uname12'
"; 
if($conn->query($sql)==TRUE)
{
	header('Location:s2.php');
 
}

else if($conn->query($sql)==FALSE)
{
          
	echo "staff not exists";
}
        
}
         
?>


<br>
<h1><center> DELETE STAFF </center></h1>
<center>
<div>
<center>
<font size=3px>
<p>Enter user name to delete*:<input type="text" name="uname1" required="required"></p>
</font>
</center>
<br>
<input type="submit"  value="Delete" name="delete"  id="delete">
<br>
<br>
</form>
<form method="post">
<input type="submit" value="Back" formaction="1.php"><br>
</form>
<br></div></div>
</center>
</body>
</html>