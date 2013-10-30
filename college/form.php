<html>
<head>
<title>
Assignment - Keith Madden
</title>
<link rel="icon" type="image/ico" href="images/favicon.ico">
<link rel="stylesheet" type="text/css" href="css/reset.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<?php include 'functions/nav.php'; ?>
<?php
$response="";
if(isset($_POST['first'])&&isset($_POST['last'])&&isset($_POST['email'])) {

	function  checkEmail($email) {
		$email=trim($email);
		$email=stripslashes($email);
		if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {
			return false;
		}
		return true;
	}

	if(checkEmail($_POST["email"])==TRUE) {
		if($_POST['first']==TRUE && $_POST['last']==TRUE) {
			$response="Thank you $_POST[first], We will contact you at $_POST[email] shortly.";
		}
		else {
			$response="Please enter your name.";
		}
	}
	else {
		$response="Please enter a valid email address.";
	}

}
?>
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
<p>Welcome to The DIT Help Desk page, please send us your query</p><br />
<form action="form.php" method="POST">
<p>Please enter your details<br>
<input type="text" name="first" id="first" placeholder="First Name"></input><br/>
<input type="text" name="last" id="last" placeholder="Surname"></input><br/>
<input type="text" name="email" id="email" placeholder="Email Address"></input><br/><br/>
<input type="text" name="subject" id="subject" placeholder="Subject"></input><br/>
<textarea name="message" rows=3 cols=17 placeholder="Your Message"></textarea><br/>
<input type="submit" value="Send Details" />
</form>
<br/>
<?php echo $response; ?>
</p>
<div><!--container-->
<div><!--wrapper-->
</body>
</html>