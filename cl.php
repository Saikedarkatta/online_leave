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
	echo "<marquee>";echo "<font size=5px color='red'>";echo "welcome";echo " ";
	echo  $_SESSION['username']; echo "</font>"; echo "</marquee>";
?>

</center>

<?php
$a=$_SESSION['userName'];
$d=$_SESSION['days'];
$l=$_SESSION['leaveid'];

$q="SELECT * from staff_details WHERE username='$a'";
$result=$conn->query($q);
$res=mysqli_fetch_array($result);

$c=$res['setcasualleave'];
$cl=$c-$d;

$sql="UPDATE staff_details SET setcasualleave='$cl' WHERE Username='$a'";
$sql1="UPDATE leave_requests SET status='approved' WHERE leaveid='$l'";

	if(($conn->query($sql) == TRUE) && ($conn->query($sql1) == TRUE))
	{
		header('Location:al.php');
 
		$_SESSION['days']=$d;
	}


	else
	{
          
		echo "Error: " . $sql . "<br>" . $conn->error;

	}
        

?>

</body>
</html>

