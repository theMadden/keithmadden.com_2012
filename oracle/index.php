<!DOCTYPE HTML>
<html>
<head>

<title> Oracle Vision | The Social Cloud </title>

<!-- SEO & OG -->
<meta name="description" content="Oracle Vision is a fun take on the way Oracle can benefit you and your workplace. Watch the videos and play for your chance to win social media rewards">
<link rel="canonical" href="http://madden.webelevate.eu/site/" />
<meta property="og:title" content="Video Player" />
<meta property="og:type" content="website" />
<meta property="og:image" content="img/oracle-logo.gif" />
<meta property="og:url" content="http://madden.webelevate.eu/site/" />
<meta property="og:description" content="Oracle Vision is a fun take on the way Oracle can benefit you and your workplace. Watch the videos and play for your chance to win social media rewards" />

<link rel="stylesheet" href="css/reset.min.css">
<link rel="stylesheet" href="css/style.min.css">
<link rel="stylesheet" href="css/cloud.min.css" />

<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0-alpha.1/jquery.mobile-1.2.0-alpha.1.min.css" />
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.2.0-alpha.1/jquery.mobile-1.2.0-alpha.1.min.js"></script>
	
	<!--External Video.js jScript&CSS-->
	<link href="http://vjs.zencdn.net/c/video-js.css" rel="stylesheet">
	<script src="http://vjs.zencdn.net/c/video.js"></script>

</head>



<body onload="currentVideo()">
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		
	<div data-role="page" id="main-page">	
		<header>
			<a href="index.php" data-ajax="false" title="Oracle Social Cloud Vison"><img src="img/oracle-logo.gif" /></a>
			<nav> <p><a href="http://madden.webelevate.eu/site/" title="Oracle Social Cloud Vison" rel="nofollow">Home</a> <a href="about.html" data-ajax="false">About</a> <a href="contact.php" data-ajax="false">Contact</a></p> </nav>
		</header>
		
		<div id="frame-bg">
			<img src="img/faces/4-face.png" id="right-bg"/>
		</div>
		
		<div id="wrapper">
		<div id="iframe">
			<video id="the-video" class="video-js vjs-default-skin video-player" controls
			preload="auto" onEnded="reveal('h1#title', '#title-choice')" width="650" height="365" data-setup="{}">
				<source src="video/big_data/0.mp4" type="video/mp4"/>
				<p>Unsupported format</p>
			</video>
		</div><!--/iFrame-->
		<div id="overframe">
			<img class="mascot-gif" id="cloud" alt="The Episode Mascot" src="img/cloudLong.png" />
		</div><!--/OF-->
		<div id="long-list">
			<ul class="no-style-center-ul">
				<li onClick="moveX('#under-list', -160)" id="video-icon"><a href="#"><img src="img/buttons/videos-w.png" /></a></li><hr/>
				<li id="expert-icon"><a href="expert.html" data-ajax="false" ><img src="img/buttons/expert-b.png" /></li><hr/>
				<li onClick="moveX('#mascot-list', -160)" id="mascot-icon"><a href="#"><img src="img/buttons/mascot-b.png" /></a></li><hr/>
				<li id="quiz-icon"><a href="quiz.php" data-ajax="false"><img src="img/buttons/quiz-b.png" /></a></li>
				
			</ul>
		</div><!--/long-list-->
		<div id="under-list">
			<ul class="no-style-center-ul">
				<li onclick='playListVideo("video/big_data/0.mp4","oracle-man-black")' id="oracle-man"><a href="#main-page"><img src="img/faces/oracle-man.png" /><p>Episode 1</p></a></li><hr/>
				<li onclick='playListVideo("video/big_data/1.mp4","ninja")' id="ninja"><a href="#main-page"><img src="img/faces/ninja.png" /><p>Episode 2</p></a></li><hr/>
				<li onclick='playListVideo("video/big_data/2.mp4","zombie")' id="zombie"><a href="#main-page"><img src="img/faces/zombie.png" /><p>Episode 3</p></a></li><hr/>
				<li onclick='playListVideo("video/big_data/3.mp4","tenticles-black")' id="tentakills"><a href="#main-page"><img src="img/faces/tentakills.png" /><p>Episode 4</p></a></li><hr/>
				<li onclick='playListVideo("video/big_data/4.mp4","orc")' id="orc"><a href="#main-page"><img src="img/faces/orc.png" /><p>Episode 5</p></a></li>
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
			<h1 id="title">Cloud Comedy</h1>
			<div id="title-choice">
			<a class="choice" id="yes" data-role="button" data-inline="true" href="#" onClick="choice(id)">Embrace The Cloud</a>
			<a class="choice" id="no" data-role="button" data-inline="true" href="#" onClick="choice(id)">No!!!</a>
			</div><!--/title-choice-->
			<div id="bad-choice">
			<p>Well that didn't go as planned, do you wan to watch the next video anyway?</p>
			<a class="choice" id="next" data-role="button" data-inline="true" href="#" onClick="choice(this.id)">Next Video</a>
			</div><!--/title-choice-->
			<p>Welcome to the ORACLE Vision website!  Learn about ORACLE’s new products and services, show off what you know and collect awesome, fantabuloso, mascots and prizes for your Social Media pages. </p>
 
			<p>So, What does O’Cloud Man, have to do with Cloud Computing anyway? Watch and find out. The video webisodes tell you everything you ever wanted to know about the Cloud but were afraid to ask!  From Security issues to SaaS (Software as a Service) </p>

			<p>Visit <a href="https:\\cloud.oracle.com" data-ajax="false" taget="_blank">Oracle Cloud</a> to register for Cloud Services or to find out more </p>
			
			<div id="social-media">
				<div class="fb-like" data-href="http://www.facebook.com/Oracle" data-send="false" data-layout="box_count" data-width="100" data-show-faces="false"></div>
				<script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
				<script type="IN/Share" data-counter="top"></script>
				<a href="https://twitter.com/share" class="twitter-share-button" data-text="Watching the Skies on Oracle Vision" data-via="Oracle" data-hashtags="OracleCloud" data-count="vertical" >Tweet</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				<div class="g-plus" data-action="share" data-annotation="vertical-bubble" data-height="62"></div>
			</div>
		</div><!--/info-pane-->
		
		</div><!--wrapper-->
		

		<!-- cloud.oracle.com code. EDITED AND INSTALLED FROM THEIR SITE -->
		<footer id="xfooter">
			<hgroup>
		<a href="https://cloud.oracle.com/mycloud/f?p=service:home:0" data-ajax="false" id="uLogo"><img src="img/oracle-small.png" alt="Oracle" /> CLOUD</a>
		<nav><ul><li class="current"><a href="index.php" data-ajax="false">Home</a></li><li class="pullDownLink"><div id="menu_solutions" class="menuPullDown"><ul><li><a href="https://cloud.oracle.com/mycloud/f?p=service:crm:0">Fusion CRM<span>Sell smarter with Fusion CRM in the cloud.</span></a></li><li><a href="https://cloud.oracle.com/mycloud/f?p=service:hcm:0">Fusion HCM<span>Bring power to your people with Fusion HCM.</span></a></li><li><a href="https://cloud.oracle.com/mycloud/f?p=service:social:0">Social Network<span>A secure collaboration tool for everyone you work with.</span></a></li><li><a href="https://cloud.oracle.com/mycloud/f?p=service:java:0">Java<span>All the productivity of Java, without the IT.</span></a></li><li><a href="https://cloud.oracle.com/mycloud/f?p=service:database:0">Database<span>The Oracle database you love, now in the cloud.</span></a></li></ul></div><a id="solutions" href="#">Offerings <img src="img/upArrow.png" /></a></li><li ><a href="https://cloud.oracle.com/mycloud/f?p=service:how_it_works:0">How it Works</a></li><li ><a href="https://cloud.oracle.com/mycloud/f?p=service:why_oracle:0">Why Oracle?</a></li><li class="pullDownLink"><a id="resources" href="#">Resources <img src="img/upArrow.png" alt="" /></a><div id="menu_resources" class="menuPullDown" style="width: 160px;"><ul><li><a href="https://cloud.oracle.com/mycloud/f?p=service:faq:0"><span>FAQ</span></a></li><li><a href="https://cloud.oracle.com/mycloud/f?p=service:architecture:0"><span>Architecture</span></a></li><li><a href="https://cloud.oracle.com/mycloud/f?p=service:videos:0"><span>Videos</span></a></li></ul></div></li><li></li></ul></nav>
			</hgroup>
		</footer>
	</div><!--/main-page-->

<script src="js/cookie.min.js"></script>
<script src="js/move.min.js"></script>
<script src="js/scripts.min.js"></script>
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38583123-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>