<html>
<!DOCTYPE=html>
<charset=utf-8>
<head>
<title>
Assignment - Keith Madden
</title>
<link rel="icon" type="image/ico" href="images/favicon.ico">
<link rel="stylesheet" type="text/css" href="css/reset.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<?php include 'functions/nav.php'; ?>
</head>

<body>
<div id="wrapper">
<header>
<a href="index.php"><img src="images/logo.jpg"></a>
<nav>
<?php navBar(); ?>
</nav>
</header>
<div id="container">
<h2>Student Log-In</h2>
<form action="student.php" method=POST>
<p>Student Number: <input type="text" name="studentID"><br/>
Password: <input type="password" name="password"><br/>
<input type="submit" value="Enter" />
</p>
</form>
<br />
<center><p>¡ Password is reversed Student ID !<br/>Example User: Kermit Frog sID=123 Password:321</p></center>
</div><!--container-->
</div><!--wrapper-->

</body>
</html>