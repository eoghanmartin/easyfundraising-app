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
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>





<body bgcolor="#FFFFFF" text="#000000">
<p>&nbsp;</p>
<table width="96%" border="0" align="center" valign="top">
  <tr> 
    <td colspan="2"><font color="#CC0066"><b><font size="4">Clane GAA RWC Predictor 
      2015</font></b></font></td>
    <td width="39%">&nbsp;</td>
  </tr>
  <tr> 
    <td width="32%"><font color="#00CC66">Curent standings</font></td>
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
      <p>&nbsp;</p>
      <table width="100%" border="0">
        <tr> 
          <td width="21%" height="25">Name</td>
          <td width="15%" height="25">Points</td>
          <td width="64%" height="25">&nbsp;</td>
        </tr>
        <tr>
          <td width="21%">Joe</td>
          <td width="15%">67</td>
          <td width="64%"><a href="clanegaa_rwc_viewEntry.php">View Entry</a></td>
        </tr>
        <tr> 
          <td width="21%">James</td>
          <td width="15%">66</td>
          <td width="64%">View Entry</td>
        </tr>
        <tr> 
          <td width="21%">John</td>
          <td width="15%">23</td>
          <td width="64%">View Entry</td>
        </tr>
      </table>
      <p>&nbsp;</p>
    </td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
<?php
}
?>