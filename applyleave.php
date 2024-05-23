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
		<li> <a href="pass2.php">| Change Password |</a></li>
		<li> <a href="home.html">| Log out |</a></li>
		</br>
	</ul>
</div>
<?php 
	echo "<br>";
	echo "<marquee>";echo "<font size=5px color='red'>";echo "welcome";echo " ";
	echo  $_SESSION['Username']; echo "</font>"; echo "</marquee>";
?>
</center>

<center><bold><h2>APPLY LEAVE</h2></bold></center>

<form role="form" method="post">


	<table align="center" cellspacing="10">

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
	<input type="submit" value="Apply" name="Apply" id="Apply"><br></center>
	</form>

	<br><center>
	<form action="2.php">
	<input type="submit" value="Back"><br></center>
	</form>
</form>

<?php 
       if(isset($_POST['Apply'])){

$uname = $_SESSION['Username'];

$date = $_POST['a4'];
$type = $_POST['a5'];
$from = $_POST['a6'];
$to=$_POST['a7'];
$days=$_POST['a8'];
$reason = $_POST['a9'];

$a=$_SESSION['Username'];
$sql="SELECT * FROM staff_details WHERE Username='$a'";
$result=$conn->query($sql);
$re=mysqli_fetch_array($result);
$c=' ';
$s=' ';
$e=' ';

	if($type=='casual')
	{
		$c=$re['setcasualleave'];
		
		if($days > 4)
		{
			echo "<center><br>Casual leaves cannot exceed 4<br><a href=\"applyleave.php\">GO BACK</a></center>";
			exit();
		}
		
		else if($c == 0)
		{
			echo "<center><br>Request failed:You have used all your casual leaves<a href=\"applyleave.php\">GO BACK</a></center>";
			exit();
		}
		else if($c < $days)
		{
			echo "<center><br>Request failed:You have only all '".$c."' casual leaves<a href=\"applyleave.php\">GO BACK</a></center>";
			exit();
		}
		else
		{
			$n=$days;
			$sql1="INSERT into leave_requests(username,dateofrequest,leave_type,leave_from,leave_to,days,reason) VALUES('".$uname."','".$date."','".$type."','".$from."','".$to."','".$days."','".$reason."')" or die("failure");

			if($conn->query($sql1)==TRUE)
			{
				header("Location:a1.php");
 
			}	


			else
			{
          
				echo "Error: " . $sql . "<br>" . $conn->error;

			}
        
		
		}
			
	}		
		
	if($type == 'sick')
	{
		$s = $re['setsickleave'];

		if($s == 0)
		{
			echo "<br><center>Request failed:You have used all your medical leaves<br><a href=\"applyleave.php\">GO BACK</a></center>";
			exit();
		}

		else if($s < $days)
		{
			echo "<br><center>Request failed:You have only '".$s."' medical leaves left.So,categorize them in sick, earned or casual leaves accordingly<br><a href=\"applyleave.php\">GO BACK</a></center>";
			exit();
		}

		else
		{
			$sql1="INSERT into leave_requests(username,dateofrequest,leave_type,leave_from,leave_to,days,reason) VALUES('".$uname."','".$date."','".$type."','".$from."','".$to."','".$days."','".$reason."')" or die("failure");

			if($conn->query($sql1)==TRUE)
			{
				header("Location:a1.php");
 
			}	


			else
			{
          
				echo "Error: " . $sql . "<br>" . $conn->error;

			}
        
		}
	}

	if($type == 'earned')
	{
		$e = $re['setearnedleave'];
		
		if($e == 0)
		{
			echo "<br><center>Request failed:You have used all your earned leaves<br><a href=\"applyleave.php\">GO BACK</a></center>";
			exit();
		}
		else if($e < $days)
		{
			echo "<br><center>Request failed:You have only '".$e."' earned leaves<br><a href=\"applyleave.php\">GO BACK</center></a>";
			exit();
		}
		else
		{
			$sql1="INSERT into leave_requests(username,dateofrequest,leave_type,leave_from,leave_to,days,reason) VALUES('".$uname."','".$date."','".$type."','".$from."','".$to."','".$days."','".$reason."')" or die("failure");

			if($conn->query($sql1)==TRUE)
			{
				header("Location:a1.php");
 
			}	


			else
			{
          
				echo "Error: " . $sql . "<br>" . $conn->error;

			}
        
		}
	}
    
}

?>
</body>
</html>	
