<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> <html xmlns="http://www.w3.org/1999/xhtml"> <head>   <script type="text/javascript" src="/static/js/analytics.js"></script> <script type="text/javascript">archive_analytics.values.server_name="wwwb-app6.us.archive.org";archive_analytics.values.server_ms=410;</script> <link type="text/css" rel="stylesheet" href="/static/css/banner-styles.css"/>   	<title>WordPress &raquo; Registration Form</title> 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 	 	<style type="text/css"> 	#user_email, #user_login, #submit { 		font-size: 1.7em; 	} 	</style> </head>  <body>    <script type="text/javascript" src="/static/js/disclaim-element.js" ></script> <script type="text/javascript" src="/static/js/graph-calc.js" ></script> <script type="text/javascript">//<![CDATA[ var __wm = (function(imgWidth,imgHeight,yearImgWidth,monthImgWidth){ var wbPrefix = "/web/"; var wbCurrentUrl = "http://www.bluehatseo.com/wp-register.php?";  var firstYear = 1996; var displayDay = "10"; var displayMonth = "May"; var displayYear = "2013"; var prettyMonths = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"]; var $D=document,$=function(n){return document.getElementById(n)}; var trackerVal,curYear = -1,curMonth = -1; var yearTracker,monthTracker; function showTrackers(val) {   if (val===trackerVal) return;   var $ipp=$("wm-ipp");   var $y=$("displayYearEl"),$m=$("displayMonthEl"),$d=$("displayDayEl");   if (val) {     $ipp.className="hi";   } else {     $ipp.className="";     $y.innerHTML=displayYear;$m.innerHTML=displayMonth;$d.innerHTML=displayDay;   }   yearTracker.style.display=val?"inline":"none";   monthTracker.style.display=val?"inline":"none";   trackerVal = val; } function trackMouseMove(event,element) {   var eventX = getEventX(event);   var elementX = getElementX(element);   var xOff = Math.min(Math.max(0, eventX - elementX),imgWidth);   var monthOff = xOff % yearImgWidth;    var year = Math.floor(xOff / yearImgWidth);   var monthOfYear = Math.min(11,Math.floor(monthOff / monthImgWidth));   // 1 extra border pixel at the left edge of the year:   var month = (year * 12) + monthOfYear;   var day = monthOff % 2==1?15:1;   var dateString = zeroPad(year + firstYear) + zeroPad(monthOfYear+1,2) +     zeroPad(day,2) + "000000";    $("displayYearEl").innerHTML=year+firstYear;   $("displayMonthEl").innerHTML=prettyMonths[monthOfYear];   // looks too jarring when it changes..   //$("displayDayEl").innerHTML=zeroPad(day,2);   var url = wbPrefix + dateString + '/' +  wbCurrentUrl;   $("wm-graph-anchor").href=url;    if(curYear != year) {     var yrOff = year * yearImgWidth;     yearTracker.style.left = yrOff + "px";     curYear = year;   }   if(curMonth != month) {     var mtOff = year + (month * monthImgWidth) + 1;     monthTracker.style.left = mtOff + "px";     curMonth = month;   } } function hideToolbar() {   $("wm-ipp").style.display="none"; } function bootstrap() {   var $spk=$("wm-ipp-sparkline");   yearTracker=$D.createElement('div');   yearTracker.className='yt';   with(yearTracker.style){     display='none';width=yearImgWidth+"px";height=imgHeight+"px";   }   monthTracker=$D.createElement('div');   monthTracker.className='mt';   with(monthTracker.style){     display='none';width=monthImgWidth+"px";height=imgHeight+"px";   }   $spk.appendChild(yearTracker);   $spk.appendChild(monthTracker);    var $ipp=$("wm-ipp");   $ipp&&disclaimElement($ipp); } return{st:showTrackers,mv:trackMouseMove,h:hideToolbar,bt:bootstrap}; })(550, 27, 25, 2);//]]> </script> </style> <div id="wm-ipp" lang="en" style="display:none;"></div> </script>   <div id="login"> <h1><a href="http://wordpress.org">WordPress</a></h1> <h2>Register for this blog</h2> <form method="post" action="wp-register.php" id="registerform"> 	<p><input type="hidden" name="action" value="register" /> 	<label for="user_login">Username:</label><br /> <input type="text" name="user_login" id="user_login" size="20" maxlength="20" value="" /><br /></p> 	<p><label for="user_email">E-mail:</label><br /> <input type="text" name="user_email" id="user_email" size="25" maxlength="100" value="" /></p> 	<p>A password will be emailed to you.</p> 	<p class="submit"><input type="submit" value="Register &raquo;" id="submit" name="submit" /></p> </form> <ul> 	<li><a href="/" title="Are you lost?">&laquo; Back to blog</a></li> 	<li><a href="/wp-login.php">Login</a></li> 	<li></a></li> </ul> </div>  </body> </html>      <!--       7:27:44 May 10, 2013        21:34:13 Jan 26, 2017.                    --> 