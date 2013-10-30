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
$courseID=$_POST['courseID'];
$con=mysql_connect('mysql1555int.cp.blacknight.com', 'u1254715_root', 'u1254715_root');
mysql_select_db("db1254715_collegeData", $con);
$courseTable=mysql_query("SELECT * FROM studentTable WHERE courseID='$_POST[courseID]'") or die("Please enter a valid Course No. <br /><a href=\"moduleH.php\">Return</a>");
$studentTable=mysql_query("Select * FROM studentTable");
$moduleTable1=mysql_query("SELECT * FROM moduleTable");
$moduleTable2=mysql_query("SELECT * FROM moduleTable");
$stu_num=mysql_num_rows($studentTable)+123;
$course=mysql_fetch_array($courseTable);
		
?>		
		<form action="modules/studentAdd.php" method=POST>
		<input type="hidden" name="courseID" value="<?php echo $courseID ?>" />
		<label>Student ID</label><input type="text" name="studentID" value="<?php echo $stu_num; ?>" readonly="readonly" /><br />
		<label>First Name</label><input type="text" name="firstName" /><br />
		<label>Last Name</label><input type="text" name="lastName" /><br />
		<label>Module 1</label><select name="moduleNo1"><?php while($mod=mysql_fetch_array($moduleTable1)){ echo "<option value=\"".$mod['moduleNo']."\" >".$mod['moduleNo']."</option>"; } ?></select><br />
		<label>Module 2</label><select name="moduleNo2"><?php while($mod=mysql_fetch_array($moduleTable2)){ echo "<option value=\"".$mod['moduleNo']."\" >".$mod['moduleNo']."</option>"; } ?></select><br />
		<input type="submit" value="Enroll" />
		</form> 
<?php		
mysql_close($con);
?>
</div><!--container-->
</div><!--wrapper-->
</body>
</html>