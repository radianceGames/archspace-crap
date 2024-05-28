<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="Content-Style-Type" content="text/css">

<link rel="top" href="./index.php?sid=f548b3b3883c7bb3acaa5155870f0a49" title="Archspace Forum Index" />
<link rel="search" href="./search.php?sid=f548b3b3883c7bb3acaa5155870f0a49" title="Search" />
<link rel="help" href="./faq.php?sid=f548b3b3883c7bb3acaa5155870f0a49" title="FAQ" />
<link rel="author" href="./memberlist.php?sid=f548b3b3883c7bb3acaa5155870f0a49" title="Memberlist" />

<title>Archspace :: Search</title>
<link rel="stylesheet" href="templates/SpacePilot3K/SpacePilot3K.css" type="text/css">
<body bgcolor="#000000" text="#DDDDDD" link="#8BC7FF" vlink="#5493B4">



<script language="Javascript" type="text/javascript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
</script>



<script language="Javascript" type="text/javascript">
<!--
function rollover(name, source)  {

  document.images[name].src = source;

}
//-->
</script>

<script language="JavaScript" src="templates/SpacePilot3K/fade.js"></script>

<!-- SNOW CRAP !-->
<script>
// Set the number of snowflakes (more than 30 - 40 not recommended)
var snowmax=14

// Set the colors for the snow. Add as many colors as you like
var snowcolor=new Array("#aaaacc","#ddddFF","#ccccDD")

// Set the fonts, that create the snowflakes. Add as many fonts as you like
var snowtype=new Array("Arial Black","Arial Narrow","Times","Comic Sans MS")

// Set the letter that creates your snowflake (recommended:*)
var snowletter="*" // (use "*" for snow flakes)

// Set the speed of sinking (recommended values range from 0.3 to 2)
var sinkspeed=0.5

// Set the maximal-size of your snowflaxes
var snowmaxsize=30

// Set the minimal-size of your snowflaxes
var snowminsize=10

// Set the snowing-zone
// Set 1 for all-over-snowing, set 2 for left-side-snowing
// Set 3 for center-snowing, set 4 for right-side-snowing
var snowingzone=1

///////////////////////////////////////////////////////////////////////////
// CONFIGURATION ENDS HERE
///////////////////////////////////////////////////////////////////////////


// Do not edit below this line
var snow=new Array()
var marginbottom
var marginright
var timer
var i_snow=0
var x_mv=new Array();
var crds=new Array();
var lftrght=new Array();
var browserinfos=navigator.userAgent
var ie5=document.all&&document.getElementById&&!browserinfos.match(/Opera/)
var ns6=document.getElementById&&!document.all
var opera=browserinfos.match(/Opera/)
var browserok=ie5||ns6||opera

function randommaker(range) {
   rand=Math.floor(range*Math.random())
    return rand
}

function initsnow() {
   if (ie5 || opera) {
      marginbottom = document.body.clientHeight
      marginright = document.body.clientWidth
   }
   else if (ns6) {
      marginbottom = window.innerHeight
      marginright = window.innerWidth
   }
   var snowsizerange=snowmaxsize-snowminsize
   for (i=0;i<=snowmax;i++) {
      crds[i] = 0;
       lftrght[i] = Math.random()*15;
       x_mv[i] = 0.03 + Math.random()/10;
      snow[i]=document.getElementById("s"+i)
      snow[i].style.fontFamily=snowtype[randommaker(snowtype.length)]
      snow[i].size=randommaker(snowsizerange)+snowminsize
      snow[i].style.fontSize=snow[i].size
      snow[i].style.color=snowcolor[randommaker(snowcolor.length)]
      snow[i].sink=sinkspeed*snow[i].size/5
      if (snowingzone==1) {snow[i].posx=randommaker(marginright-snow[i].size)}
      if (snowingzone==2) {snow[i].posx=randommaker(marginright/2-snow[i].size)}
      if (snowingzone==3) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/4}
      if (snowingzone==4) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/2}
      snow[i].posy=randommaker(2*marginbottom-marginbottom-2*snow[i].size)
      snow[i].style.left=snow[i].posx
      snow[i].style.top=snow[i].posy
   }
   movesnow()
}

function movesnow() {
   for (i=0;i<=snowmax;i++) {
      crds[i] += x_mv[i];
      snow[i].posy+=snow[i].sink
      snow[i].style.left=snow[i].posx+lftrght[i]*Math.sin(crds[i]);
      snow[i].style.top=snow[i].posy

      if (snow[i].posy>=marginbottom-2*snow[i].size || parseInt(snow[i].style.left)>(marginright-3*lftrght[i])){
         if (snowingzone==1) {snow[i].posx=randommaker(marginright-snow[i].size)}
         if (snowingzone==2) {snow[i].posx=randommaker(marginright/2-snow[i].size)}
         if (snowingzone==3) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/4}
         if (snowingzone==4) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/2}
         snow[i].posy=0
      }
   }
   var timer=setTimeout("movesnow()",50)
}

for (i=0;i<=snowmax;i++) {
   document.write("<span id='s"+i+"' style='position:absolute;top:-"+snowmaxsize+"'>"+snowletter+"</span>")
}
if (browserok) {
   window.onload=initsnow
}
</script>
<!-- End of Snow crap !-->

</head>
<body />

<a name="top"></a>

<table width="100%" cellspacing="0" cellpadding="10" border="0" align="center">
	<tr>
		<td align="center">
			<script type="text/javascript"><!--
			google_ad_client = "pub-9347639997854244";
			google_ad_width = 728;
			google_ad_height = 90;
			google_ad_format = "728x90_as";
			google_ad_type = "image";
			google_ad_channel ="";
			google_color_border = "6699CC";
			google_color_bg = "003366";
			google_color_link = "FFFFFF";
			google_color_url = "AECCEB";
			google_color_text = "AECCEB";
			//--></script>
			<script type="text/javascript"
			  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
			</script>
		</td>
	</tr>
	<tr>
		<td class="bodyline"><table width="100%" cellspacing="0" cellpadding="0" border="0">
			<tr>
				<td><a href="index.php?sid=f548b3b3883c7bb3acaa5155870f0a49"><span class="maintitle"><img src="templates/SpacePilot3K/images/logo_sp3k.gif" border="0" alt="Archspace Forum Index" vspace="1" /></span></a></td>
				<td align="center" width="100%" valign="middle"><span class="maintitle">Archspace</span><br /><span class="gen">Archspace Forums<br />&nbsp; </span>
				<table cellspacing="0" cellpadding="2" border="0">
					<tr>
						<td align="center" valign="top" nowrap="nowrap"><span class="mainmenu">&nbsp;<a href="faq.php?sid=f548b3b3883c7bb3acaa5155870f0a49" class="mainmenu"><img src="templates/SpacePilot3K/images/icon_mini_faq.gif" width="14" height="14" border="0" alt="FAQ" hspace="3" />FAQ</a></span><span class="mainmenu">&nbsp; &nbsp;<a href="search.php?sid=f548b3b3883c7bb3acaa5155870f0a49" class="mainmenu"><img src="templates/SpacePilot3K/images/icon_mini_search.gif" width="14" height="14" border="0" alt="Search" hspace="3" />Search</a>&nbsp; &nbsp;<a href="memberlist.php?sid=f548b3b3883c7bb3acaa5155870f0a49" class="mainmenu"><img src="templates/SpacePilot3K/images/icon_mini_members.gif" width="14" height="14" border="0" alt="Memberlist" hspace="3" />Memberlist</a>&nbsp; &nbsp;<a href="groupcp.php?sid=f548b3b3883c7bb3acaa5155870f0a49" class="mainmenu"><img src="templates/SpacePilot3K/images/icon_mini_groups.gif" width="14" height="14" border="0" alt="Usergroups" hspace="3" />Usergroups</a>&nbsp;
						&nbsp;<a href="profile.php?mode=register&amp;sid=f548b3b3883c7bb3acaa5155870f0a49" class="mainmenu"><img src="templates/SpacePilot3K/images/icon_mini_register.gif" width="14" height="14" border="0" alt="Register" hspace="3" />Register</a></span>&nbsp;
						</td>
					</tr>
					<tr>
						<td height="25" align="center" valign="top" nowrap="nowrap"><span class="mainmenu">&nbsp;<a href="profile.php?mode=editprofile&amp;sid=f548b3b3883c7bb3acaa5155870f0a49" class="mainmenu"><img src="templates/SpacePilot3K/images/icon_mini_profile.gif" width="14" height="14" border="0" alt="Profile" hspace="3" />Profile</a>&nbsp; &nbsp;<a href="privmsg.php?folder=inbox&amp;sid=f548b3b3883c7bb3acaa5155870f0a49" class="mainmenu"><img src="templates/SpacePilot3K/images/icon_mini_message.gif" width="14" height="14" border="0" alt="Log in to check your private messages" hspace="3" />Log in to check your private messages</a>&nbsp; &nbsp;<a href="login.php?sid=f548b3b3883c7bb3acaa5155870f0a49" class="mainmenu"><img src="templates/SpacePilot3K/images/icon_mini_login.gif" width="14" height="14" border="0" alt="Log in" hspace="3" />Log in</a>&nbsp;</span></td>
					</tr>
				</table></td>
			</tr>
		</table>

		<br />


<form action="search.php?mode=results&amp;sid=f548b3b3883c7bb3acaa5155870f0a49" method="POST"><table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
	<tr>
		<td align="left"><span class="nav"><a href="index.php?sid=f548b3b3883c7bb3acaa5155870f0a49" class="nav">Archspace Forum Index</a></span></td>
	</tr>
</table>

<table class="forumline" width="100%" cellpadding="4" cellspacing="1" border="0">
	<tr>
		<th class="thHead" colspan="4" height="25">Search Query</th>
	</tr>
	<tr>
		<td class="row1" colspan="2" width="50%"><span class="gen">Search for Keywords:</span><br /><span class="gensmall">You can use <u>AND</u> to define words which must be in the results, <u>OR</u> to define words which may be in the result and <u>NOT</u> to define words which should not be in the result. Use * as a wildcard for partial matches</span></td>
		<td class="row2" colspan="2" valign="top"><span class="genmed"><input type="text" style="width: 300px" class="post" name="search_keywords" size="30" /><br /><input type="radio" name="search_terms" value="any" checked="checked" /> Search for any terms or use query as entered<br /><input type="radio" name="search_terms" value="all" /> Search for all terms</span></td>
	</tr>
	<tr>
		<td class="row1" colspan="2"><span class="gen">Search for Author:</span><br /><span class="gensmall">Use * as a wildcard for partial matches</span></td>
		<td class="row2" colspan="2" valign="middle"><span class="genmed"><input type="text" style="width: 300px" class="post" name="search_author" size="30" /></span></td>
	</tr>
	<tr>
		<th class="thHead" colspan="4" height="25">Search Options</th>
	</tr>
	<tr>
		<td class="row1" align="right"><span class="gen">Forum:&nbsp;</span></td>
		<td class="row2"><span class="genmed"><select class="post" name="search_forum"><option value="-1">All available</option><option value="1">News</option><option value="13">Change Log</option><option value="3">Player Board</option><option value="4">Bug Board</option><option value="5">Suggestion Board</option><option value="8">Help Board</option><option value="11">Recruiting</option><option value="12">Community Art and Literature</option><option value="9">Politics/Religion Forum</option><option value="14">Archspace 2.0</option><option value="15">Programming</option></select></span></td>
		<td class="row1" align="right" nowrap="nowrap"><span class="gen">Search previous:&nbsp;</span></td>
		<td class="row2" valign="middle"><span class="genmed"><select class="post" name="search_time"><option value="0" selected="selected">All Posts</option><option value="1">1 Day</option><option value="7">7 Days</option><option value="14">2 Weeks</option><option value="30">1 Month</option><option value="90">3 Months</option><option value="180">6 Months</option><option value="364">1 Year</option></select><br /><input type="radio" name="search_fields" value="all" checked="checked" /> Search topic title and message text<br /><input type="radio" name="search_fields" value="msgonly" /> Search message text only</span></td>
	</tr>
	<tr>
		<td class="row1" align="right"><span class="gen">Category:&nbsp;</span></td>
		<td class="row2"><span class="genmed"><select class="post" name="search_cat"><option value="-1">All available</option><option value="2">Archspace - Public</option>
		</select></span></td>
		<td class="row1" align="right"><span class="gen">Sort by:&nbsp;</span></td>
		<td class="row2" valign="middle" nowrap="nowrap"><span class="genmed"><select class="post" name="sort_by"><option value="0">Post Time</option><option value="1">Post Subject</option><option value="2">Topic Title</option><option value="3">Author</option><option value="4">Forum</option></select><br /><input type="radio" name="sort_dir" value="ASC" /> Ascending<br /><input type="radio" name="sort_dir" value="DESC" checked /> Descending</span>&nbsp;</td>
	</tr>
	<tr>
		<td class="row1" align="right" nowrap="nowrap"><span class="gen">Display results as:&nbsp;</span></td>
		<td class="row2" nowrap="nowrap"><input type="radio" name="show_results" value="posts" /><span class="genmed">Posts<input type="radio" name="show_results" value="topics" checked="checked" />Topics</span></td>
		<td class="row1" align="right"><span class="gen">Return first</span></td>
		<td class="row2"><span class="genmed"><select class="post" name="return_chars"><option value="-1">All available</option><option value="0">0</option><option value="25">25</option><option value="50">50</option><option value="100">100</option><option value="200" selected="selected">200</option><option value="300">300</option><option value="400">400</option><option value="500">500</option><option value="600">600</option><option value="700">700</option><option value="800">800</option><option value="900">900</option><option value="1000">1000</option></select> characters of posts</span></td>
	</tr>
	<tr>
		<td class="catBottom" colspan="4" align="center" height="28"><input class="liteoption" type="submit" value="Search" /></td>
	</tr>
</table>

<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
	<tr>
		<td align="right" valign="middle"><span class="gensmall">All times are GMT - 6 Hours</span></td>
	</tr>
</table> </form>

<table width="100%" border="0">
	<tr>
		<td align="right" valign="top">
<form method="get" name="jumpbox" action="viewforum.php?sid=f548b3b3883c7bb3acaa5155870f0a49" onSubmit="if(document.jumpbox.f.value == -1){return false;}"><table cellspacing="0" cellpadding="0" border="0">
	<tr>
		<td nowrap="nowrap"><span class="gensmall">Jump to:&nbsp;<select name="f" onchange="if(this.options[this.selectedIndex].value != -1){ forms['jumpbox'].submit() }"><option value="-1">Select a forum</option><option value="-1">&nbsp;</option><option value="-1">Archspace - Public</option><option value="-1">----------------</option><option value="1">News</option><option value="13">Change Log</option><option value="3">Player Board</option><option value="4">Bug Board</option><option value="5">Suggestion Board</option><option value="8">Help Board</option><option value="11">Recruiting</option><option value="12">Community Art and Literature</option><option value="9">Politics/Religion Forum</option><option value="14">Archspace 2.0</option><option value="15">Programming</option></select><input type="hidden" name="sid" value="f548b3b3883c7bb3acaa5155870f0a49" />&nbsp;<input type="submit" value="Go" class="liteoption" /></span></td>
	</tr>
</table> </form>

</td>
	</tr>
</table>


<div align="center"><span class="copyright"><br /><br />
<!--
	We request you retain the full copyright notice below including the link to www.phpbb.com.
	This not only gives respect to the large amount of time given freely by the developers
	but also helps build interest, traffic and use of phpBB 2.0. If you cannot (for good
	reason) retain the full copyright we request you at least leave in place the
	Powered by phpBB  line, with phpBB linked to www.phpbb.com. If you refuse
	to include even this then support on our forums may be affected.

	The phpBB Group : 2002
// -->
Space Pilot 3K template by <a href="http://www.jakob-persson.com" class="copyright">Jakob Persson</a>.<br />
Powered by <a href="http://www.phpbb.com/" target="_phpbb" class="copyright">phpBB</a>  &copy; 2001 phpBB Group<br /></span></div>
<div align="center"><span class="copyright">Protected by <a href="http://www.lithiumstudios.org/" target="_blank" class="copyright">Anti-Spam ACP</a></span></div>
		</td>
	</tr>
	<tr>
		<td align="center">
			<script type="text/javascript"><!--
			google_ad_client = "pub-9347639997854244";
			google_ad_width = 728;
			google_ad_height = 90;
			google_ad_format = "728x90_as";
			google_ad_type = "text_image";
			google_ad_channel ="";
			google_color_border = "6699CC";
			google_color_bg = "003366";
			google_color_link = "FFFFFF";
			google_color_url = "AECCEB";
			google_color_text = "AECCEB";
			//--></script>
			<script type="text/javascript"
			  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
			</script>
		</td>
	</tr>
</table>

</body><script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script><script
type="text/javascript">_uacct = "UA-278580-1"; urchinTracker();</script>
</html>

