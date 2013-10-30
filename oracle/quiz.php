<?php include "quiz-array.php";?>
<!DOCTYPE HTML>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Oracle Cloud Quiz | Are You Looking in the Right Places?</title>

<link rel="stylesheet" href="css/reset.min.css" />
<link rel="stylesheet" href="css/style.min.css" />
<link rel="stylesheet" href="css/cloud.min.css" />

<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0-alpha.1/jquery.mobile-1.2.0-alpha.1.min.css" />
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.2.0-alpha.1/jquery.mobile-1.2.0-alpha.1.min.js"></script>

	<!--External Video Player jScript&CSS-->
	<link href="http://vjs.zencdn.net/c/video-js.css" rel="stylesheet" />
	<script src="http://vjs.zencdn.net/c/video.js"></script>
</head>



<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
		(function() {
		var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
		po.src = 'https://apis.google.com/js/plusone.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
		})();
	</script>
	<div data-role="page" id="main-page">
		<header>
			<a href="index.php" data-ajax="false"><img src="img/oracle-logo.gif" /></a>
			<nav> <p><a href="index.php" data-ajax="false">Home</a> <a href="about.html" data-ajax="false">About</a> <a href="contact.php" data-ajax="false">Contact</a></p> </nav>
		</header>
		<div id="frame-bg">
			<img src="img/faces/4-face.png" id="right-bg"/>
		</div>
		<div id="wrapper">
			<div id="iframe">
				<form action="quiz1.php" id="formq12" method="POST">
					<a class="popup-button" id="0" href="#popupVideo" data-role="button" data-rel="popup" data-icon="cloud" data-iconpos="notext" data-mini="true" data-position-to="window" onclick="setPopupVideo(this.id)">Rewatch</a>
					<fieldset id="Question1" data-role="controlgroup">
						<legend>Q1. What Does the I in IaaS stand for?</legend>
							<input type="radio" name="q1" id="q1-a" value="a" checked="checked" />
							<label for="q1-a">A. Infrastructure</label>

							<input type="radio" name="q1" id="q1-b" value="b"  />
							<label for="q1-b">B. Infarction</label>

							<input type="radio" name="q1" id="q1-c" value="c"  />
							<label for="q1-c">C. Information</label>
					</fieldset>
					<a class="popup-button" id="1" href="#popupVideo" data-role="button" data-rel="popup" data-icon="cloud" data-iconpos="notext" data-mini="true" data-position-to="window" onclick="setPopupVideo(this.id)">Rewatch</a>
					<fieldset id="Question2" data-role="controlgroup">
						<legend>Q2. What are Oracle's 3 Cloud Model Choices?</legend>
						
							<input type="radio" name="q2" id="q2-a" value="a" checked="checked" />
							<label for="q2-a">A. Customised, Maintained, Software</label>

							<input type="radio" name="q2" id="q2-b" value="b"  />
							<label for="q2-b">B. Build, Managed, Subscribe</label>

							<input type="radio" name="q2" id="q2-c" value="c"  />
							<label for="q2-c">C. Build, Maintained, Aggregated</label>
					</fieldset>
					<br />
					<a href="#" data-role="button" data-inline="true" onclick="formq12.submit()">Submit</a>
				</form>
				
			</div><!--/iFrame-->
			
		<div id="long-list">
				<ul class="no-style-center-ul">
				<li id="video-icon"><a href="index.php" data-ajax="false"><img src="img/buttons/videos-w.png" /></a></li><hr/>
				<li id="expert-icon"><a href="expert.html" data-ajax="false" ><img src="img/buttons/expert-b.png" /></li><hr/>
				<li onClick="moveX('#mascot-list', -160)" id="mascot-icon"><a href="#"><img src="img/buttons/mascot-b.png" /></a></li><hr/>
				<li id="quiz-icon"><a href="quiz.php" data-ajax="false"><img src="img/buttons/quiz-b.png" /></a></li>
			</ul>
		</div><!--/long-list-->
		
		<div id="mascot-list">
			<ul class="no-style-center-ul">
				<li id="oracle-man"><a href="character0.html" data-ajax="false"><img src="img/faces/oracle-man-smile.png" /></a></li><hr/>
				<li id="ninja"><a href="character1.html" data-ajax="false"><img src="img/faces/ninja.png" /></a></li><hr/>
				<li id="zombie"><a href="character2.html" data-ajax="false"><img src="img/faces/zombie.png" /></a></li><hr/>
				<li id="tentakills"><a href="character3.html" data-ajax="false"><img src="img/faces/tentakills.png" /></a></li><hr/>
				<li id="orc"><a href="character4.html" data-ajax="false"><img src="img/faces/orc.png" /></a></li>
			</ul>
		</div><!--/mascot-list-->
		
		<div id="twitter-search">
				<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
				<script>
				new TWTR.Widget({
				  version: 2,
				  type: 'search',
				  search: '#OracleCloud',
				  interval: 30000,
				  title: 'Tweet About the Cloud',
				  subject: '#OracleCloud',
				  width: 250,
				  height: 212,
				  theme: {
					shell: {
					  background: '#d2e5e4',
					  color: '#333'
					},
					tweets: {
					  background: '#ffffff',
					  color: '#444444',
					  links: '#1985b5'
					}
				  },
				  features: {
					scrollbar: true,
					loop: true,
					live: true,
					behavior: 'default'
				  }
				}).render().start();
				</script>
			</div><!--/twitter-search-->
		
		<div id="info-pane">
		
			<h1 id="title">The Quiz</h1>
			<p id="para1">
			Show off your knowledge and collect the Mascots, just for being right! </p>
			<p>Play the video excerpts to review the Expert information.
			</p><p>
			‘Like’ our Page, share the videos with your friends ...Spread those Cloud Wings and Tweet the Word!</p>
			<div id ="quiz-details"></div>
			<div id="social-media">
				<div class="fb-like" data-href="http://www.facebook.com/Oracle" data-send="false" data-layout="box_count" data-width="100" data-show-faces="false"></div>
				<script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
				<script type="IN/Share" data-counter="top"></script>
				<a href="https://twitter.com/share" class="twitter-share-button" data-text="Watching the Skies on Oracle Vision" data-via="Oracle" data-hashtags="OracleCloud" data-count="vertical" >Tweet</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				<div class="g-plus" data-action="share" data-annotation="vertical-bubble" data-height="62"></div>
			</div>
		</div><!--/info-pane-->
		
		<div data-role="popup" id="popupVideo" data-overlay-theme="a" class="ui-corner-all" >
			<video id="the-video" class="video-js vjs-default-skin" controls width="650" height="366" data-setup="{}">
				<source src="video/cloud/0.mp4" type="video/mp4"/>
				<p>Unsupported format</p>
			</video>
		</div>
					
		</div><!--wrapper-->
		
		<footer id="xfooter">
			<hgroup>
		<a href="https://cloud.oracle.com/mycloud/f?p=service:home:0" data-ajax="false" id="uLogo"><img src="img/oracle-small.png" alt="Oracle" /> CLOUD</a>
		<nav><ul><li class="current"><a href="index.php" data-ajax="false">Home</a></li><li class="pullDownLink"><div id="menu_solutions" class="menuPullDown"><ul><li><a href="https://cloud.oracle.com/mycloud/f?p=service:crm:0">Fusion CRM<span>Sell smarter with Fusion CRM in the cloud.</span></a></li><li><a href="https://cloud.oracle.com/mycloud/f?p=service:hcm:0">Fusion HCM<span>Bring power to your people with Fusion HCM.</span></a></li><li><a href="https://cloud.oracle.com/mycloud/f?p=service:social:0">Social Network<span>A secure collaboration tool for everyone you work with.</span></a></li><li><a href="https://cloud.oracle.com/mycloud/f?p=service:java:0">Java<span>All the productivity of Java, without the IT.</span></a></li><li><a href="https://cloud.oracle.com/mycloud/f?p=service:database:0">Database<span>The Oracle database you love, now in the cloud.</span></a></li></ul></div><a id="solutions" href="#">Offerings <img src="img/upArrow.png" /></a></li><li ><a href="https://cloud.oracle.com/mycloud/f?p=service:how_it_works:0">How it Works</a></li><li ><a href="https://cloud.oracle.com/mycloud/f?p=service:why_oracle:0">Why Oracle?</a></li><li class="pullDownLink"><a id="resources" href="#">Resources <img src="img/upArrow.png" alt="" /></a><div id="menu_resources" class="menuPullDown" style="width: 160px;"><ul><li><a href="https://cloud.oracle.com/mycloud/f?p=service:faq:0"><span>FAQ</span></a></li><li><a href="https://cloud.oracle.com/mycloud/f?p=service:architecture:0"><span>Architecture</span></a></li><li><a href="https://cloud.oracle.com/mycloud/f?p=service:videos:0"><span>Videos</span></a></li></ul></div></li><li></li></ul></nav>
			</hgroup>
		</footer>
	</div><!--/main-page-->

<script src="js/move.min.js"></script>
<script src="js/scripts.min.js"></script>
</body>
</html>