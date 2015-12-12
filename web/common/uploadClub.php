<html>
<head>
<title>UploadClub</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<?php

$clubName = $_POST["clubName"];
$clubType = $_POST["clubType"];
$clubContact = $_POST["clubContact"];
$clubEmail = $_POST["clubEmail"];
$clubPhone = $_POST["clubPhone"];
$clubWeb = $_POST["clubWeb"];
$clubFacebook = $_POST["clubFacebook"];
$clubTwitter = $_POST["clubTwitter"];
$clubUsername = $_POST["clubUsername"];
$clubPwd = $_POST["clubPwd"];



$conn = mysql_connect("hostingmysql304.webapps.net","42dec4-dbuser","easy*?123");
$conn1 = mysql_select_db("42dec4-easy",$conn);
$sql = "INSERT INTO clubs (clubName,clubType, clubContact, clubEmail, clubPhone, clubWeb, clubFacebook, clubTwitter, clubUsername, clubPwd) 
values('" . $clubName. "','". $clubType. "','". $clubContact. "','". $clubEmail. "','". $clubPhone. "','". $clubWeb. "','". $clubFacebook. "','". $clubTwitter. "','". $clubUsername. "','". $clubPwd. "')";

//$result = mysql_query($sql,$conn)or die(mysql_error());
$result = mysql_query($sql,$conn) or die(mysql_error());




?>

<body bgcolor="#FFFFFF" text="#000000">
<p>&nbsp;</p>
<table width="96%" border="0" align="center">
  <tr> 
    <td colspan="2"><font color="#CC0066"><b>Upload Club</b></font></td>
    <td width="39%">&nbsp;</td>
  </tr>
  <tr> 
    <td width="32%">&nbsp;</td>
    <td width="29%">&nbsp;</td>
    <td width="39%">&nbsp;</td>
  </tr>
  <tr> 
    <td width="32%">&nbsp;</td>
    <td width="29%">&nbsp;</td>
    <td width="39%">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="3" height="246" valign="top">
      <p><br>
      </p>
      <p>Your club details have been loaded into our database.</p>
      </td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
