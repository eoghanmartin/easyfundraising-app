<html>
<head>
<title>admin Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<?php
$clubName = $_GET['tn'];

$conn = mysql_connect("hostingmysql304.webapps.net","42dec4-dbuser","easy*?123");
$conn1 = mysql_select_db("42dec4-easy",$conn);
$sql = "SELECT * FROM clubs WHERE clubName = '" . $clubName ."'";

$result = mysql_query($sql,$conn) or die(mysql_error());
$clubDetails = mysql_fetch_array($result);







?>



<body bgcolor="#FFFFFF" text="#000000">
<p>&nbsp;</p>
<table width="96%" border="0" align="center">
  <tr> 
    <td colspan="2"><font color="#CC0066"><b><font size="4">Clubs</font></b></font></td>
    <td width="39%">&nbsp;</td>
  </tr>
  <tr> 
    <td width="32%"><font color="#00CC66"></font></td>
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
      <table width="100%" border="0">
        <tr> 
          <td width="33%"> 
            <div align="right">Club</div>
          </td>
          <td width="4%">&nbsp;</td>
          <td width="63%"><?php echo $clubDetails[1]; ?></td>
        </tr>
        <tr> 
          <td width="33%"> 
            <div align="right">Type</div>
          </td>
          <td width="4%">&nbsp;</td>
          <td width="63%"><?php echo $clubDetails[2]; ?></td>
        </tr>
        <tr> 
          <td width="33%"> 
            <div align="right">Contact</div>
          </td>
          <td width="4%">&nbsp;</td>
          <td width="63%"><?php echo $clubDetails[3]; ?></td>
        </tr>
        <tr> 
          <td width="33%"> 
            <div align="right">Email</div>
          </td>
          <td width="4%">&nbsp;</td>
          <td width="63%"><?php echo $clubDetails[4]; ?></td>
        </tr>
        <tr> 
          <td height="21" width="33%"> 
            <div align="right">Phone</div>
          </td>
          <td height="21" width="4%">&nbsp;</td>
          <td height="21" width="63%"><?php echo $clubDetails[5]; ?></td>
        </tr>
        <tr> 
          <td width="33%"> 
            <div align="right">Website</div>
          </td>
          <td width="4%">&nbsp;</td>
          <td width="63%"><?php echo $clubDetails[6]; ?></td>
        </tr>
        <tr> 
          <td width="33%"> 
            <div align="right">Facebook Page</div>
          </td>
          <td width="4%">&nbsp;</td>
          <td width="63%"><?php echo $clubDetails[7]; ?></td>
        </tr>
        <tr> 
          <td width="33%"> 
            <div align="right">Twitter</div>
          </td>
          <td width="4%">&nbsp;</td>
          <td width="63%"><?php echo $clubDetails[8]; ?></td>
        </tr>
        <tr> 
          <td width="33%"> 
            <div align="right"></div>
          </td>
          <td width="4%">&nbsp;</td>
          <td width="63%"> </td>
        </tr>
      </table>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      </td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
