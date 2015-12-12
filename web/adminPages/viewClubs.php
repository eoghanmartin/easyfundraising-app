<html>
<head>
<title>view Clubs</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<?php

$k=0;
$conn = mysql_connect("hostingmysql304.webapps.net","42dec4-dbuser","easy*?123");
$conn1 = mysql_select_db("42dec4-easy",$conn);
$sql = "SELECT * from clubs";
$result = mysql_query($sql,$conn) or die(mysql_error());
while ($clubInfo = mysql_fetch_array($result))
	{
	$j=0;
	$indexArray[$k] = $clubInfo[$j];
	$j++;
	$clubNameArray[$k]  = $clubInfo[$j];
	$j++;
	$clubTypeArray[$k]  = $clubInfo[$j];
	$j++;
	$clubContactArray[$k]  = $clubInfo[$j];
	$j++;
	$clubEmailArray[$k]  = $clubInfo[$j];
	$j++;
	$clubPhoneArray[$k]  = $clubInfo[$j];
	$j++;
	$clubWebArray[$k]  = $clubInfo[$j];
	$j++;
	$clubFacebookArray[$k]  = $clubInfo[$j];
	$j++;
	$clubTwitterArray[$k]  = $clubInfo[$j];
	$j++;
	$k++;
	}

			
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
          <td>Club</td>
          <td>Contact</td>
          <td>&nbsp;</td>
        </tr>
		<?php
		
		for ($g=0; $g<sizeOf($clubNameArray); $g++) 
		{
		?>
        <tr>
          <td><?php echo $clubNameArray[$g];?></td>
          <td><?php echo $clubContactArray[$g];?></td>
          <td><a href="viewClubs_detail.php?tn=<?php echo $clubNameArray[$g]?>">view details</a></td>
        </tr>
		<?php
		}
		?>
		
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
