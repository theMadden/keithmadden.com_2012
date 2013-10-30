
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
<?php
$readout="Please Enter a valid Username & Password <br /><a href=\"lecturerH.php\">Return</a>";
$con=mysql_connect('mysql1555int.cp.blacknight.com', 'u1254715_root', 'u1254715_root');
if(!$con) {
	die('Could not connect: ' . mysql_error());
}
mysql_select_db("db1254715_collegeData", $con);
$result=mysql_query("SELECT * FROM lecturerTable WHERE staffNumber='$_POST[staffNumber]'");
while($row=mysql_fetch_array($result)) {
	if($_POST['password']==strrev($row['staffNumber'])) {
		echo $readout="<h2>Hello ".$row['firstName']."</h2>";
		echo "To Edit a Module, please select one from below: <br/>";
		?><form action="modules/moduleEdit.php" method=POST><input type="submit" value="<?php echo $row['moduleNo1']?>" name="module"/><input type="submit" value="<?php echo $row['moduleNo2']?>" name="module"/></form><?php
		$readout="";
	}
	else {
		$readout .= "<script>setTimeout(\"location.href='lecturerH.php'\",1500);</script>";
	}
}
mysql_close($con);
echo $readout;
?>
</div><!--container-->
</div><!--wrapper-->

</body>
</html>