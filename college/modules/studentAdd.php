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
$object=associate("studentID", "firstName", "lastName", "moduleNo1", "moduleNo2", "courseID");

if($object["moduleNo1"]==$object["moduleNo2"]) die("Please register for two different modules.<br /> <a href=\"../moduleH.php\">Return</a>"); //module check

if($object["firstName"]==NULL or $object["lastName"]==NULL) {die("Please enter a full name.<br /> <a href=\"../moduleH.php\">Return</a>");} //name check
	
	if($object["courseID"]==NULL) { //courseID check (page refresh can lose the $_POST[courseID])
		$con=mysql_connect('mysql1555int.cp.blacknight.com', 'u1254715_root', 'u1254715_root');
		mysql_select_db("db1254715_collegeData", $con);
		$result=mysql_query("SELECT * FROM studentTable ORDER BY courseID");
		echo "You did not enter a valid course number. <br/> Please select one from below:";
		?><form action="../register.php" method=POST>
		<label>Courses</label><select name="courseID">
		<?php 
		$check="";
		while($mod=mysql_fetch_array($result)){
			if($mod['courseID']!=$check){
			echo "<option value=\"".$mod['courseID']."\" >".$mod['courseID']."</option>"; 
			}
			$check=$mod['courseID'];
		} 
		?>
		</select><br />
		<input type="submit" value="To Enroll" />
		</form>
		<?php
	} else {
$con=mysql_connect('mysql1555int.cp.blacknight.com', 'u1254715_root', 'u1254715_root');
mysql_select_db("db1254715_collegeData", $con);
$add=mysql_query("INSERT INTO studentTable (studentID, firstName, lastName, moduleNo1, moduleNo2, courseID) VALUES ('$object[studentID]', '$object[firstName]', '$object[lastName]', '$object[moduleNo1]', '$object[moduleNo2]', '$object[courseID]')") or die ("Corrupt Entry: ".$object["studentID"]." ".$object["firstName"]." ".$object["lastName"]." ".$object["moduleNo1"]." ".$object["moduleNo2"]." ".$object["courseID"]);

echo "Thank you for registering ".$object["firstName"].", your new student number is: ".$object["studentID"].". <br />You can now head to the <a href=\"../studentH.php\">STUDENTS</a> page and review your modules";
}
?>
</div><!--container-->
</div><!--wrapper-->

</body>
</html>