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
<?php include '../functions/nav.php'; ?>
</head>

<body>
<div id="wrapper">
<header>
<a href="../index.php"><img src="../images/logo.jpg"></a>
<nav>
<?php navBarM(); ?>
</nav>
</header>
<div id="container">
<?php
$q=$_POST['module'];

$con=mysql_connect('mysql1555int.cp.blacknight.com', 'u1254715_root', 'u1254715_root');

mysql_select_db("db1254715_collegeData", $con);
$result=mysql_query("SELECT * FROM moduleTable WHERE moduleNo='".$q."'");
	while($row=mysql_fetch_array($result)) {
		echo "<div id=\"moduleEdit\"><form action=\"update.php\" method=POST>";
		echo "<input type=\"hidden\" value=\"".$q."\" name=\"moduleNo\"readonly=\"readonly\"/><br />";
		echo "<label>Module Name</label><input type=\"text\" value=\"".$row[moduleName]."\" name=\"moduleName\" /><br />";
		echo "<label>Credits</label><input type=\"text\" value=\"".$row[credits]."\" name=\"credits\" /><br />";
		echo "<label>Website</label><input type=\"text\" value=\"".$row[website]."\" name=\"website\" /><br />";
		echo "<label>Due Date</label><input type=\"text\" value=\"".$row[dueDate]."\" name=\"dueDate\" /><br />";
		echo "<label>Location</label><input type=\"text\" value=\"".$row[location]."\" name=\"location\" /><br />";
		echo "<input type=\"submit\" value=\"Update\" name=\"submit\" />";
		echo "</form></div><!--mEdit-->";
	}
mysql_close($con);
?>
</div><!--container-->
</div><!--wrapper-->

</body>
</html>