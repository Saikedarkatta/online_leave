<?php include 'connect.php'?>
<html>
<head>
<title>|| Leave Management System ||</title>
<link href="home1.css" rel="stylesheet" type="text/css" />
</head>

<body>
<center>
<div id="menu">
	<ul>
		<li> <a href="home.html"> Home </a></li>

		<li> <a href="about.php"> About Us </a></li>

		<li> <a href="login1.php">  Admin Login  </a></li>

		<li> <a href="login2.php">  Staff Login  </a></li>		 
     	</ul>
</div>

</center>

<center>
<br><br><br><br><br><br><h2>ADMIN LOGIN</h2></br>
<form action="success.php" method="post">
<p>USERNAME: <input type="text" name="un" required="required"></p>
<p>PASSWORD: <input type="password" name="pass" required="required"></p>
<button>LOGIN</button>
</form>
<form action="home.html">
<input type="submit" value="Back" formaction="home.html"><br></center>
</form>
</center>
</body>
</html>