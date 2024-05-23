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
		<li> <a href="2.php">| Home |</a></li>
		<li> <a href="pass.php">| Change Password |</a></li>
		<li> <a href="home.html">| Log out |</a></li>
		</br>
	</ul>
</div>
<?php 
	echo "<br>";
	echo "<marquee>";echo "<font size=5px color='red'>";echo "welcome";echo " ";echo  $_SESSION['Username']; echo "</font>"; echo "</marquee>";
?>
</center>

<center><bold><h2>APPLY LEAVE</h2></bold></center>

<form role="form" method="post">

<?php 
       if(isset($_POST['Add'])){

$uname = $_POST['a1'];

$dept = $_POST['a2'];
$date = $_POST['a4'];
$type = $_POST['a5'];
$from = $_POST['a6'];
$to=$_POST['a7'];
$days=$_POST['a8'];
$reason = $_POST['a9'];
$sql="INSERT into leave_requests(username,department,dateofrequest,leave_type,leave_from,leave_to,days,reason) VALUES('".$uname."','".$dept."','".$date."','".$type."','".$from."','".$to."','".$days."','".$reason."')" or die("failure");


if($conn->query($sql)==TRUE)
{
	header("Location:a1.php");
 
}


else
{
          
echo "Error: " . $sql . "<br>" . $conn->error;

}
        
}
         
?>



	<table align="center" cellspacing="10">
		<tr><td>UserName*:</td><td><input type="text" name="a1" required="required"></td></tr>

		<tr><td>DEPARTMENT:</td><td><select name="a2">
			<option name="a2" value="">--Select--</option><br/>
                           		<option name="a2" value="CSE">CSE</option><br/>
			<option name="a2" value="ECE">ECE</option><br/>
			<option name="a2" value="IT">IT</option><br/>
			<option name="a2" value="EEE">EEE</option><br/>
		</select></td></tr>

		<tr><td>Date Of Request*:</td><td><input type="date" name="a4" required="required"></td></tr>

		<tr><td>Type Of leave*:<select name="a5">
		<option name="a5" value="">Type</option>
		<option name="a5" value="casual">casual</option>
		<option name="a5" value="sick">sick</option>
		<option name="a5" value="earned">earned</option>
		</select></td></tr>

		<tr><td>From Date*:</td><td><input type="date" name="a6" required="required"></td></tr>
		<tr><td>To Date*:</td><td><input type="date" name="a7" required="required"></td></tr>
		<tr><td>No of Days*:</td><td><input type="number" name="a8" required="required"/></td></tr>		
		
		<tr><td>Reason*:</td><td><input type="text" name="a9" size="10" required="required"/></td></tr>
	</table>	
	<br>
	<center>
	<input type="submit" value="Add" name="Add" id="Add"><br></center>
	</form>

	<br><center>
	<form action="2.php">
	<input type="submit" value="Back"><br></center>
	</form>
</form>
</body>
</html>	