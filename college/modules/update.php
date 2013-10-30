<html>
<!DOCTYPE=html>
<charset=utf-8>
<head>
<title>
Assignment - Keith Madden
</title>
<link rel="icon" type="image/ico" href="../images/favicon.ico">
<link rel="stylesheet" type="text/css" href="../css/reset.css" />
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<?php include '../functions/nav.php'; 
	  include '../functions/assArray.php';
?>

</head>

<body>
<div id="wrapper">
<header>
<a href="index.php"><img src="../images/logo.jpg"></a>
<nav>
<?php navBarM(); ?>
</nav>
</header>
<div id="container">
<?php
	$object=associate("moduleNo", "moduleName", "credits", "website", "dueDate", "location");

	$con = mysql_connect("mysql1555int.cp.blacknight.com", "u1254715_root", "u1254715_root");

	mysql_select_db("db1254715_collegeData", $con);
	mysql_query("UPDATE moduleTable SET moduleName='".$object['moduleName']."', credits='".$object['credits']."', website='".$object['website']."', dueDate='".$object['dueDate']."', location='".$object['location']."' WHERE moduleNo='".$object['moduleNo']."'") or die("failed");

	mysql_close($con);

echo "The Module ".$object['moduleNo']." has been succesfully updated.";
echo "<br /><a href=\"../index.php\"><b>Return Home</b></a>";
?>
</div><!--container-->
</div><!--wrapper-->

</body>
</html>