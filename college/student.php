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

<!--Taken from W3Schools AJAX tutorial-->	
<script type="text/javascript">
function showModule(str)
{
if (str=="")
  {
  document.getElementById("moduleDisplay").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("moduleDisplay").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","modules/moduleDisp.php?q="+str,true);
xmlhttp.send();
}
</script>
<!--/W3S-->

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

$con=mysql_connect('mysql1555int.cp.blacknight.com', 'u1254715_root', 'u1254715_root');

mysql_select_db("db1254715_collegeData", $con);
if($_POST['studentID']!=NULL) {
	$result=mysql_query("SELECT * FROM studentTable WHERE studentID='$_POST[studentID]'");
	while($row=mysql_fetch_array($result)) {
		if($_POST['password']==strrev($row['studentID'])) {
			echo "<h2>Hello ".$row['firstName']." ".$row['lastName']."</h2>";?>
			<form>Your Modules are:<select name="mods" onChange="showModule(this.value)" ><option value=""></option><option value="<?php echo $row['moduleNo1'] ?>"><?php echo $row['moduleNo1']?></option><option value="<?php echo $row['moduleNo2']?>"><?php echo $row['moduleNo2']?></option></select></form><?php
		}
		else {
			echo "<p>Sorry that password is incorrect,<br />Please wait to be re-directed.</p>";
			echo "<script>setTimeout(\"location.href='studentH.php'\",1500);</script>";
		}
	}
}
else {
	echo "<script>location.href='studentH.php';</script>";
}
mysql_close($con);

?>
<div id="moduleDisplay"></div><!--moduleDisplay-->
</div><!--container-->
</div><!--wrapper-->

</body>
</html>