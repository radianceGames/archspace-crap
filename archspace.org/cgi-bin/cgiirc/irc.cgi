<!-- This is part of CGI:IRC 0.5
  == http://cgiirc.sourceforge.net/
  == Copyright (C) 2000-2005 David Leadbeater <cgiirc@dgl.cx>
  == Released under the GNU GPL
  -->

<html>
<head>
<link rel="SHORTCUT ICON" href="/images/favicon.ico">
<script language="JavaScript"><!--
function setjs() {
 if(navigator.product == 'Gecko') {
   document.loginform["interface"].value = 'mozilla';
 }else if(window.opera && document.childNodes) {
   document.loginform["interface"].value = 'opera7';
 }else if(navigator.appName == 'Microsoft Internet Explorer' &&
    navigator.userAgent.indexOf("Mac_PowerPC") > 0) {
    document.loginform["interface"].value = 'konqueror';
 }else if(navigator.appName == 'Microsoft Internet Explorer' &&
 document.getElementById && document.getElementById('ietest').innerHTML) {
   document.loginform["interface"].value = 'ie';
 }else if(navigator.appName == 'Konqueror') {
    document.loginform["interface"].value = 'konqueror';
 }else if(window.opera) {
   document.loginform["interface"].value = 'opera';
 }
}
function nickvalid() {
   var nick = document.loginform.Nickname.value;
   if(nick.match(/^[A-Za-z0-9\[\]\{\}^\\\|\_\-`]{1,32}$/))
      return true;
   alert('Please enter a valid nickname');
   document.loginform.Nickname.value = nick.replace(/[^A-Za-z0-9\[\]\{\}^\\\|\_\-`]/g, '');
   return false;
}
function setcharset() {
	if(document.charset && document.loginform["Character set"])
		document.loginform['Character set'].value = document.charset
}
//-->
</script>
<title>CGI:IRC Login</title>
</head>
<body bgcolor="#ffffff" text="#000000" onload="setcharset();">
<form method="post" action="irc.cgi" name="loginform" onsubmit="setjs();return nickvalid()">
<input type="hidden" name="interface" value="nonjs">
<table border="0" cellpadding="5" cellspacing="0">
<tr><td colspan="2" align="center" bgcolor="#c0c0dd"><b>CGI:IRC
Login</b></td></tr>
<tr><td align="right" bgcolor="#f1f1f1">Nickname</td><td align="left"
bgcolor="#f1f1f1"><input type="text" name="Nickname" value="CGI582"></td></tr>
<tr><td align="right" bgcolor="#f1f1f1">Server</td><td align="left"
bgcolor="#f1f1f1"><input type="text" name="Server" value="irc.archspace.org"></td></tr>
<tr><td align="right" bgcolor="#f1f1f1">Channel</td><td align="left"
bgcolor="#f1f1f1"><input type="text" name="Channel" value="#archspace"></td></tr>
<tr><td align="left" bgcolor="#d9d9d9">
<small><a href="irc.cgi?adv=1">Advanced..</a></small>
</td><td align="right" bgcolor="#d9d9d9">
<input type="submit" value="Login" style="background-color: #d9d9d9">
</td></tr></table></form>

<small id="ietest"><a href="http://cgiirc.sourceforge.net/">CGI:IRC</a> 0.5.6 (2005/01/23)<br />
</small>
</body></html>
