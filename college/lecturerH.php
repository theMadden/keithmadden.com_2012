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
<h2>Lecturer Log-In</h2>
<form action="lecturer.php" method=POST>
<p>Staff Number: <input type="text" name="staffNumber"><br/>
Password: <input type="password" name="password"><br/>
<input type="submit" value="Enter" onClick=return "validate()"/>
</p>
</form>
<br />
<center><p>¡ Password is reversed Lecturer ID!<br />Example User: Charlie Cullen lID=123001 Password:100321</p></center>
</div><!--container-->
</div><!--wrapper-->

</body>
</html>