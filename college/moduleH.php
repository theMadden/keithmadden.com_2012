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
<h2>Registration</h2>
<form action="register.php" method=POST>
<p>Course No: <input type="text" name="courseID"><br/>
<input type="submit" value="Enter" />
</p>
</form>
<p>Example Course Number: 999001</p>
</div><!--container-->
</div><!--wrapper-->

</body>
</html>