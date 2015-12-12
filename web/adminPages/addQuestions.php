<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<?php
$compName = $_POST["CompName"];
$numQs = $_POST["numQs"];

print " ------------ " . $compName  . "-----" . $numQs . "<br/>";

?>

<body bgcolor="#FFFFFF" text="#000000">
<p>&nbsp;</p>
<table width="96%" border="0" align="center">
  <tr> 
    <td colspan="2"><font color="#CC0066"><b><font size="4">Admin Pages</font></b></font></td>
    <td width="39%">&nbsp;</td>
  </tr>
  <tr> 
    <td width="32%"><font color="#00CC66">Add Questions</font></td>
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
      <form name="form11" method="post" action="addQuestions.php">
        <table width="75%" border="0" align="center">
          <tr> 
            <td width="35%"> 
              <div align="right">Competition Name</div>
            </td>
            <td width="10%">&nbsp;</td>
            <td width="55%"> 
              <div align="left"> 
                <input type="text" name="CompName" size="30" maxlength="30" >
              </div>
            </td>
          </tr>
          <tr> 
            <td width="35%"> 
              <div align="right">Number Of Questions </div>
            </td>
            <td width="10%">&nbsp;</td>
            <td width="55%"> 
              <div align="left"> 
                <input type="text" name="numQs" size="10" maxlength="2">
              </div>
            </td>
          </tr>
          <tr> 
            <td width="35%"> 
              <div align="right"> </div>
            </td>
            <td width="10%">&nbsp;</td>
            <td width="55%"> 
              <div align="left"> </div>
            </td>
          </tr>
          <tr> 
            <td colspan="3" height="24"> 
              <div align="center"></div>
            </td>
          </tr>
        </table>
        <p>&nbsp;</p>
        <p align="center">
          <input type="submit" name="Submit" value="Add">
        </p>
      </form>
      <p>&nbsp;</p>
      </td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
