<?php 
	session_start();
?>
<?php include 'connect.php';
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

<center><bold><h2>ADD STAFF</h2></bold></center>
<form role="form" method="post">


<?php 
       if(isset($_POST['Add'])){

$uname = $_POST['s1'];

$uage = $_POST['s2'];
$ugender=$_POST['s3'];
$udob = $_POST['s4'];
$udesg = $_POST['s5'];
$udept=$_POST['s6'];
$uaddr=$_POST['s7'];
$uemail = $_POST['s8'];
$umobile=$_POST['s9'];

$uuname=$_POST['s10'];

$upwd=$_POST['s11'];

$sql="INSERT into staff_details(name,age,gender,DOB,designation,department,address,emailid,contactno,username,password) VALUES('$uname','$uage','$ugender','$udob','$udesg','$udept','$uaddr','$uemail','$umobile','$uuname','$upwd')";


if($conn->query($sql)==TRUE)
{
	header('Location:s1.php');
 
}


else
{
          
echo "Error: " . $sql . "<br>" . $conn->error;

}
        
}
         
?>


	<table align="center" cellspacing="10">
		<tr><td>NAME*:</td><td><input type="text" name="s1" required="required"></td></tr>
		<tr><td>AGE*:</td><td><input type="text" name="s2" required="required"></td></tr>

		<tr><td>GENDER:</td><td><select name="s3">
				<option name="s3" value="male">male</option><br/>
				<option name="s3" value="female">female</option><br/>
		</select></td></tr>

	                <tr><td>Date Of Birth*:</td><td><input type="date" name="s4" required="required"></td></tr>

	                <tr><td>DESIGNATION:</td><td><select name="s5">
                	                <option name="s5" value="Teaching staff">Teaching Staff</option><br/>
			<option name="s5" value="Non-teaching staff">Non-teaching Staff</option></br>
		</select></td></tr>

	                <tr><td>DEPARTMENT:</td><td><select name="s6">
                           		<option name="s6" value="CSE">CSE</option><br/>
			<option name="s6" value="ECE">ECE</option><br/>
			<option name="s6" value="IT">IT</option><br/>
			<option name="s6" value="EEE">EEE</option><br/>
		</select></td></tr>

	                <tr><td>ADDRESS*:</td><td><input type="text" name="s7" size="50" required="required"/></td></tr>

		<tr><td>EMAILID*:</td><td><input type="text" name="s8" size="20" required="required"/></td></tr>		

		<tr><td>CONTACTNO*:</td><td><input type="text" name="s9" size="10" required="required"/></td></tr>

	                <tr><td>USERNAME*:</td><td><input type="text" name="s10" size="10" required="required"/></td></tr>	

		<tr><td>PASSWORD*:</td><td><input type="password" name="s11" size="10" required="required"/></td></tr>
	</table>	
	<br>
	<center>
	<input type="submit" value="Add" name="Add" id="Add"><br></center>
	</form>

	<br><center>
	<form action="1.php">
	<input type="submit" value="Back" formaction="1.php"><br></center>
	</form>
</form>
</body>
</html>	