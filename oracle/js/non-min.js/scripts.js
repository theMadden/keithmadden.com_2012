var reveal = function (div1, div2) {
	$video = document.getElementsByTagName('video')[0];
	$v_src = $video.getAttribute("src");
	if($v_src.indexOf("_a") >= 0) {
		$(div1).css('display','none');
		$("#bad-choice").css('display','inline');
	} else {
		$(div1).css('display', 'none');
		$(div2).css('display','inline');
	}
};



var choice = function(pick) {
	$video =  document.getElementsByTagName('video')[0];
	$v_src = $video.getAttribute("src");
	if(pick==="yes") {
		if ($v_src.indexOf("4.") >= 0) {
			window.location="quiz.php";
		} else {
			console.log($v_src);
			$next_video = increment($v_src);
			console.log($next_video);
			$video.src = $next_video;
			$video.play();
			setCookie("current_video",$video.src,30);
			$("#title-choice").css('display', 'none');
			$("h1#title").css('display','inline');
			$("#iframe").slideto({highlight: false});
		}
	} else if(pick==="no"){
			$split = $v_src.split(".");
			$split[0] += "_a";
			$bad_video = $split.join(".");
			$video.src = $bad_video;
			$video.play();
			$next_video = increment($v_src);
			$("#title-choice").css('display', 'none');
			$("h1#title").css('display','inline');
	} else if(pick==="next") {
		$split = $v_src.split(".");
		$split[0] = $split[0].replace(/_a/g, "");
		$_video = $split.join(".");
		$next_video = increment($_video);
		$video.src = $next_video;
		$video.play();
		setCookie("current_video",$video.src,30);
		$("#bad-choice").css('display', 'none');
		$("h1#title").css('display','inline');
	}
}

var playListVideo = function(url,img){

        $video =  document.getElementsByTagName('video')[0];
		$video.src = url;		
		$video.load();
		var cookie = [url, img];
		moveX('#under-list', 0);
		setCookie("current_video",cookie,30);
		$mascot = $( ".mascot-gif" )
		$mascot.attr('src','img/'+img+'.gif');
		$mascot.attr('id',img);
		$("#overframe").show();
		$next_video = increment(url);
		setCookie("next_video",$next_video,30);
}

var moveX = function(div, val) {
	var position = $(div).position();
	var posLeft = position.left;
	if(posLeft>600) {
		move(div).ease('out').x(val).end();
	} else {
		move(div).ease('in').x(0).end();
	}
}

var increment = function(url) {
	var split_a = url.split("/");  //breaks into video,big_data,0.mp4 (0.mp4 is indicative)
	var result_a = split_a[2].split("."); //into 0,mp4
	split_a.pop(); //becomes video,big_data
	result_a[0] = parseInt(result_a[0])+1; //increment the video numeric
	result_a = result_a.join("."); //1.mp4
	split_a = split_a.concat(result_a); //becomes video,big_data,1.mp4
	var next_video= split_a.join("/"); //becomes video/big_data/1.mp4 (VALID URL)
	return next_video;
}

var setPopupVideo = function(id) {
	$video =  document.getElementsByTagName('video')[0];
	$v_src = $video.getAttribute("src");
	var split_a = $v_src.split("/");  //breaks into video,big_data,0.mp4 (0.mp4 is indicative)
	var result_a = split_a[2].split("."); //into 0,mp4
	split_a.pop(); //becomes video,big_data
	if(result_a[0]!==id) {
		result_a[0] = id; //add the id as the video numeric
		result_a = result_a.join("."); //1.mp4
		split_a = split_a.concat(result_a); //becomes video,big_data/1.mp4
		$video_join= split_a.join("/"); //becomes video/big_data/1.mp4 (VALID URL)
		$video.src = $video_join;
	}
	$video.play();
}

/* Event Handler Methods */
$( "#overframe" ).click(function(){
	$(this).hide();
	document.getElementsByTagName('video')[0].play();
});

/* For Use with Cloud.Oracle Code */
$( ".pullDownLink" ).hover(function(){
	$menu = ".menuPullDown";
	jQuery(this).children($menu).toggle();
});

$( "#popupVideo" ).bind({
   popupafterclose: function() { 
		$video =  document.getElementsByTagName('video')[0];
		$video.pause();
   }
});

$('#overframe').hover(function() {
	$(this).css('cursor','pointer');
	}, function() {
	$(this).css('cursor','auto');
});

$('.no-style-center-ul li').hover(function() {
	$rbg = $('#right-bg');
	if(this.id==="video-icon") {
		$rbg.attr('src', 'img/hover/videos-hover.png');
		$rbg.fadeIn('slow');
	}
	else if(this.id==="expert-icon") {
		$rbg.attr('src', 'img/hover/garst-hover.png');
		$rbg.fadeIn('slow');
	}
	else if(this.id==="mascot-icon") {
		$rbg.attr('src', 'img/hover/mascot-hover.png');
		$rbg.fadeIn('slow');
	}
	else if(this.id==="quiz-icon"){
		$rbg.attr('src', 'img/hover/quiz-hover.png');
		$rbg.fadeIn('slow');
	}
	
	}, function() {
	$rbg.css('display','none');
});
