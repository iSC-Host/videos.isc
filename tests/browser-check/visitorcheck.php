<?php
/************************************************************************/
/* PHP VisitorCheck v1.0                                                */
/* ===========================                                          */
/*                                                                      */
/*   Written by Steve Dawson - http://www.stevedawson.com               */
/*   Freelance Web Developer - PHP, Perl and Javascript programming     */
/*   Website Design and Search Engine Submission Services               */
/*   This program is free software. You can redistribute it and/or      */
/*   modify as long as the return link is in place                      */
/************************************************************************/
## GET THE DETAILS 
$date       = (date ("F j, Y")); ## Current date
$time		= (date ("H:i:s")); ##  Current time
$IPnumber	= getenv("REMOTE_ADDR"); ## IP Number assigned to your DUN
$Browser	= $_SERVER["HTTP_USER_AGENT"]; ## Browser agent
$ReferURL	= $_SERVER["HTTP_REFERER"]; ##  Refferal URL
$ServerName	= $_SERVER["SERVER_NAME"]; ##
$ServerSoftware	= $_SERVER["SERVER_SOFTWARE"]; ##
 
?>
<html>
<head>
<title>PHP Visitor Browser Check</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
P {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-weight: BOLD;
}
P.text {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	font-weight: NORMAL;	
	}
A {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	font-weight: NORMAL;
	color: #000099;	
	}
INPUT {
FONT-SIZE: 11; 
FONT-FAMILY: Verdana;
COLOR: #ffffff;
BACKGROUND : #a19797;
CURSOR: HAND;
}	
H1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 20px;
	font-weight: NORMAL;	
	}
-->
</style>
</head>
<body><h1>Visitor Browser Check</h1>
<br>
<p>
<?php 
if (isset($_POST["op"]) && ($_POST["op"]=="visitorcheck"))
{
print "<table width=\"700\" border=\"0\" cellspacing=\"1\" cellpadding=\"4\" BGCOLOR=\"#CCCCCC\">";
print "<tr><td width=\"125\" BGCOLOR=\"#F3F3F3\"><p>CURRENT DATE:</p></td><td BGCOLOR=\"#FFFFFF\">
<p class=\"text\">$date <i>at</i> $time</p></td>
</tr><tr>
<td BGCOLOR=\"#F3F3F3\"><p>YOUR IP NUMBER:</p></td><td BGCOLOR=\"#FFFFFF\">
<p class=\"text\"><a target=new href=\"http://$IPnumber\">$IPnumber</a></p></td>
</tr>
<tr> 
<td BGCOLOR=\"#F3F3F3\"><p>SERVER NAME:</p></td><td BGCOLOR=\"#FFFFFF\"><p class=\"text\">$ServerName</p>
</td></tr>
<tr> 
<td BGCOLOR=\"#F3F3F3\"><p>SERVER SOFTWARE:</p></td><td BGCOLOR=\"#FFFFFF\"><p class=\"text\">$ServerSoftware</p>
</td></tr><tr> 
<td BGCOLOR=\"#F3F3F3\"><p>YOUR BROWSER:</p></td><td BGCOLOR=\"#FFFFFF\"><p class=\"text\">$Browser</p>
</td></tr>
<tr><td BGCOLOR=\"#F3F3F3\"><p>PAGE REFERRER:</p></td><td BGCOLOR=\"#FFFFFF\">
<p class=\"text\"><a href=\"$ReferURL\">$ReferURL</a></p></td></tr>
</table>
";

}
?>
</p>
<br>
<p align="center">Click the button below to see your Browser Statistics:</p>
<form method="post">
<input name="op" type="hidden" value="visitorcheck">
<input type="submit" value="Click here to check your details"></form>
<br><br>
<p align="center">Powered by <a target="new" href="http://www.stevedawson.com">stevedawson.com</a></p>
</body>
</html>
