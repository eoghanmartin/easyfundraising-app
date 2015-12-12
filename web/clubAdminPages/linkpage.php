<?php 
session_start();


$clubname=$_GET['tn'];
$conn = mysql_connect("hostingmysql304.webapps.net","42dec4-dbuser","easy*?123");
$conn1 = mysql_select_db("42dec4-easy",$conn);

$sql = "SELECT clubUsername, clubPwd, clubName FROM clubs WHERE clubName = '".$clubname."'";
$name_check = mysql_query($sql,$conn) or die(mysql_error());
$info = mysql_fetch_row($name_check);


//print "Login = " . $logged_in  . "<br/>";
if (!isset($_SESSION['username']) || !isset($_SESSION['password'])) {
	$logged_in = 0;
	header('Location: login.php');
	}
	
elseif ($info[2] != $clubname || $info[0] != $_SESSION['username'])
	{
	$logged_in = 0;
	header('Location: login.php');
	}

 else {
?>


<html>
<head>
<title>linkpages</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<p>&nbsp;</p>
<p><font size="+2"><?php echo $clubname ?> Admin Pages</font></p>
<p>&nbsp;</p>
<table width="582" border="0" cellpadding="0" cellspacing="0">
  <tr> 
    <td height="39" colspan="9"><b><font color="#FF0000">Rugby World cup</font></b></td>
    <td width="3">&nbsp;</td>
  </tr>
  <tr> 
    <td height="39" colspan="9"><a href="rwc_current.php?tn=<?php echo $info[2]?>">View Current standings</a></td>
    <td width="3">&nbsp;</td>
  </tr>
  <tr> 
    <td height="39" colspan="9">View Current Stats on RWC Competition</td>
    <td width="3">&nbsp;</td>
  </tr>
  <tr> 
    <td height="39" colspan="9">Add entry (already paid for)</td>
    <td width="3">&nbsp;</td>
  </tr>
  <tr> 
    <td height="39"><font face="Comic Sans MS" size="5"><a href="logout.php">logout</a></font></td>
    <td width="1"><img src="file:///C|/web/easy/web/clanegaa/images/innerhead-01.jpg" width="1" height="64" /></td>
    <td width="206">&nbsp;</td>
    <td width="1"><img src="file:///C|/web/easy/web/clanegaa/images/innerhead-02.jpg" width="1" height="64" /></td>
    <td width="92">&nbsp;</td>
    <td width="1"><img src="file:///C|/web/easy/web/clanegaa/images/innerhead-03.jpg" width="1" height="64" /></td>
    <td width="99">&nbsp;</td>
    <td width="1"><img src="file:///C|/web/easy/web/clanegaa/images/header-07.jpg" width="1" height="64" /></td>
    <td width="92">&nbsp;</td>
    <td width="3"><img src="file:///C|/web/easy/web/clanegaa/images/header-08.jpg" width="3" height="64" /></td>
  </tr>
</table>
</body>
</html>
<?php
}
?>