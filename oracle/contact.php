<!DOCTYPE HTML>
<html>
<head>

<title>Oracle Cloud Tube | Get in Touch!</title>

<link rel="stylesheet" href="css/reset.min.css">
<link rel="stylesheet" href="css/style.min.css">
<link rel="stylesheet" href="css/cloud.min.css" />


<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0-alpha.1/jquery.mobile-1.2.0-alpha.1.min.css" />
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.2.0-alpha.1/jquery.mobile-1.2.0-alpha.1.min.js"></script>
	
	<!--External Video.js jScript&CSS-->
	<link href="http://vjs.zencdn.net/c/video-js.css" rel="stylesheet">
	<script src="http://vjs.zencdn.net/c/video.js"></script>
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
	<div data-role="page" id="main-page">	
		<header>
			<a href="index.php" data-ajax="false"><img src="img/oracle-logo.gif" /></a>
			<nav> <p><a href="index.php" data-ajax="false">Home</a> <a href="about.html" data-ajax="false">About</a> <a href="#">Contact</a></p> </nav>
		</header>
		
		<div id="wrapper">
		
		<form action="contact.php" id="contact-form" method="POST" data-ajax="false">
		<h1>Your Oracle Contact</h1>
		<p>If you have a query for the Team, please get in touch with Official Oracle Contact</p>
		<p> Kelly-Marie Moore<br />
			Email: 	ADD EMAIL<br />
			Address: c/o Oracle, East Point Business Park, Dublin 3.<br />
		</p>
		<br />
		<h2>To Submit a Question about this Website, Contact Us Here:</h2>
		<br />
		<h2><?php echo $response; ?></h2>
			<input type="text" name="first" id="first" placeholder="First Name"></input><br/>
			<input type="text" name="last" id="last" placeholder="Surname"></input><br/>
			<input type="text" name="email" id="email" placeholder="Email Address"></input><br/><br/>
			<input type="text" name="subject" id="subject" placeholder="Subject"></input><br/>
			<textarea name="message" rows=3 cols=17 placeholder="Your Message"></textarea><br/>
			<input type="submit" value="Send Details" />
		</form>
		<br/>
		</div><!--wrapper-->
		

		
		<footer id="xfooter">
			<hgroup>
		<a href="https://cloud.oracle.com/mycloud/f?p=service:home:0" data-ajax="false" id="uLogo"><img src="img/oracle-small.png" alt="Oracle" /> CLOUD</a>
		<nav><ul><li class="current"><a href="index.php" data-ajax="false">Home</a></li><li class="pullDownLink"><div id="menu_solutions" class="menuPullDown"><ul><li><a href="https://cloud.oracle.com/mycloud/f?p=service:crm:0">Fusion CRM<span>Sell smarter with Fusion CRM in the cloud.</span></a></li><li><a href="https://cloud.oracle.com/mycloud/f?p=service:hcm:0">Fusion HCM<span>Bring power to your people with Fusion HCM.</span></a></li><li><a href="https://cloud.oracle.com/mycloud/f?p=service:social:0">Social Network<span>A secure collaboration tool for everyone you work with.</span></a></li><li><a href="https://cloud.oracle.com/mycloud/f?p=service:java:0">Java<span>All the productivity of Java, without the IT.</span></a></li><li><a href="https://cloud.oracle.com/mycloud/f?p=service:database:0">Database<span>The Oracle database you love, now in the cloud.</span></a></li></ul></div><a id="solutions" href="#">Offerings <img src="img/upArrow.png" /></a></li><li ><a href="https://cloud.oracle.com/mycloud/f?p=service:how_it_works:0">How it Works</a></li><li ><a href="https://cloud.oracle.com/mycloud/f?p=service:why_oracle:0">Why Oracle?</a></li><li class="pullDownLink"><a id="resources" href="#">Resources <img src="img/upArrow.png" alt="" /></a><div id="menu_resources" class="menuPullDown" style="width: 160px;"><ul><li><a href="https://cloud.oracle.com/mycloud/f?p=service:faq:0"><span>FAQ</span></a></li><li><a href="https://cloud.oracle.com/mycloud/f?p=service:architecture:0"><span>Architecture</span></a></li><li><a href="https://cloud.oracle.com/mycloud/f?p=service:videos:0"><span>Videos</span></a></li></ul></div></li><li></li></ul></nav>
			</hgroup>
		</footer>
	</div><!--/main-page-->

</body>
</html>