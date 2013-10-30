<?php
	function navBar()
	{
echo <<< EOD
<a href="index.php">Home</a> | <a href="studentH.php">Students</a> | <a href="lecturerH.php">Lecturers</a> | <a href="moduleH.php">Registration</a> | <a href="form.php">Help Desk</a>
EOD;
	}
	
		function navBarM() //for pages in the module folder
	{
echo <<< EOD
<a href="../index.php">Home</a> | <a href="../studentH.php">Students</a> | <a href="../lecturerH.php">Lecturers</a> | <a href="../moduleH.php">Registration</a> | <a href="../form.php">Help Desk</a>
EOD;
	}
?>