function getCookie(c_name)
{
var i,x,y,ARRcookies=document.cookie.split(";");
for (i=0;i<ARRcookies.length;i++)
  {
  x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
  y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
  x=x.replace(/^\s+|\s+$/g,"");
  if (x==c_name)
    {
    return unescape(y);
    }
  }
}

function setCookie(c_name,value,exdays)
{
	var exdate=new Date();
	exdate.setDate(exdate.getDate() + exdays);
	var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
	document.cookie=c_name + "=" + c_value;
}

function currentVideo()
{
	var current_video=getCookie("current_video").split(",");
	if(current_video!==undefined) {
		$url = current_video[0];
		$img = current_video[1];
		$video =  document.getElementsByTagName('video')[0];
		$video.src = $url;
		$video.load();
		$mascot = $( ".mascot-gif" )
		$mascot.attr('src','img/'+$img+'.gif');
		$mascot.attr('id',$img);
	}
}
