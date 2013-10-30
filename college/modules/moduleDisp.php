<?php
$q=$_GET["q"];

$con=mysql_connect("mysql1555int.cp.blacknight.com", "u1254715_root", "u1254715_root");

mysql_select_db("db1254715_collegeData", $con);
$result=mysql_query("SELECT * FROM moduleTable WHERE moduleNo='".$q."'");
	while($row=mysql_fetch_array($result)) {
		echo "<table>";
		echo "<tr><td>Module Name</td><td>".$row[moduleName]."</td></tr><tr><td>Credits</td><td>".$row[credits]."</td></tr><tr><td>Website</td><td><a href=\"http://".$row[website]."\">".$row[website]."</a></td></tr><tr><td>Due Date</td><td>".$row[dueDate]."</td></tr><tr><td>Location</td><td>".$row[location]."</td></tr>";
		echo "</table>";
	}
mysql_close($con);
?>