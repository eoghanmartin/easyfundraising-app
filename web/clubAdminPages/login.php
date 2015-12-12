<?php
session_start();

$conn = mysql_connect("hostingmysql304.webapps.net","42dec4-dbuser","easy*?123");
$conn1 = mysql_select_db("42dec4-easy",$conn);
if($logged_in == 1) {
	die('You are already logged in, '.$_SESSION['username'].'.');

}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<link href="images/site.css" rel="stylesheet" type="text/css" />
<style type="text/css">

</style>
//--> </script> </head> <body> 
<?php
$baderror = "N";
if (isset($_POST['submit'])) { // if form has been submitted

  //check they filled in what they were supposed to and authenticate */
	if(!$_POST['clubname']  | !$_POST['uname'] | !$_POST['passwd']) {
		$errorMessage = "You did not fill in a required field. ";
		$baderror = "Y";
	}
	
	if (!get_magic_quotes_gpc()) {
		$_POST['uname'] = addslashes($_POST['uname']);
	}
	$sql = "SELECT clubUsername, clubPwd, clubName FROM clubs WHERE clubName = '".$_POST['clubname']."'";
	$name_check = mysql_query($sql,$conn) or die(mysql_error());
	$info = mysql_fetch_row($name_check);
	$size = sizeOf($info);
	
if ($size == 1) {
		$errorMessage = "Sorry, the club name : ".$_POST['clubname']." does not exist.";
		$baderror = "Y";
		}
		
		if ($_POST['passwd'] != $info[1]) {
	$errorMessage = "Incorrect passowrd";
		$baderror = "Y";
	}
		
	if ($baderror == "Y") {
		
		
		?>
<table width="850" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    </tr>
  <tr>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td valign="top"><table width="844" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="6" valign="top" style="background-repeat:repeat-y; background-image:url(images/in-08.jpg)"><img src="images/in-01.jpg" width="6" height="6" /></td>
          <td width="830" valign="top" style="background-repeat:repeat-x; background-image:url(images/in-02.jpg)">&nbsp;</td>
        <td width="8" valign="top" style="background-repeat:repeat-y; background-image:url(images/in-04.jpg)"><img src="images/in-03.jpg" width="7" height="6" /></td>
      </tr>
      <tr>
        <td valign="top" style="background-repeat:repeat-y; background-image:url(images/in-08.jpg)"><img src="images/in-08.jpg" width="6" height="6" /></td>
        <td height="300" align="left" valign="top" bgcolor="#FFFFFF"><table width="830" border="0" cellspacing="0" cellpadding="0">
          <tr>
                <td width="830">&nbsp;</td>
          </tr>
          <tr>
            <td><table width="700" border="0" align="center" cellpadding="0">
                    <tr> 
                      <td height="39"><font size="5" face="Comic Sans MS">Login 
                        to your Club Page</font></td>
                    </tr>
                    <tr> 
                      <td height="78"><p><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $errorMessage; ?> 
                          Click <a href="login.php">here</a> to try 
                          again.</font></p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p><font size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
                          </font></p></td>
                    </tr>
                    <tr> 
                      <td>&nbsp;</td>
                    </tr>
                  </table></td>
          </tr>
        </table></td>
        <td valign="top" style="background-repeat:repeat-y; background-image:url(images/in-04.jpg)"><img src="images/in-04.jpg" width="7" height="6" /></td>
      </tr>
      <tr>
        <td height="6" valign="top"><img src="images/in-07.jpg" width="6" height="6" /></td>
        <td valign="top" bgcolor="#F0F0F0" style="background-repeat:repeat-x; background-image:url(images/in-06.jpg)"><img src="images/in-06.jpg" width="7" height="6" /></td>
        <td valign="top"><img src="images/in-05.jpg" width="7" height="6" /></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="60" valign="middle">&nbsp;</td>
  </tr>
  
  <tr></tr>
</table>

<?php


}




else {
	// if we get here username and password are correct, 
	//register session variables 

			
	//$sql = "SELECT userid FROM user WHERE username = '".$_POST['uname']."'";
	//$nameid = mysql_query($sql,$conn) or die(mysql_error());
	//$id = mysql_fetch_row($nameid);
	
	
	$_POST['uname'] = stripslashes($_POST['uname']);
	$_SESSION['username'] = $_POST['uname'];
	$_SESSION['password'] = $_POST['passwd'];
	$_SESSION['clubname'] = $_POST['clubname'];
	//$_SESSION['id'] = $id[0];
	$logged_in = 1;
	
	
	?>
	
<table width="582" border="0" cellpadding="0" cellspacing="0">
  <tr> 
    <td height="39" colspan="9"><b>Welcome to the admin pages for <?php echo $info[2] ;?>. Click 
      <a href="linkpage.php?tn=<?php echo $info[2]?>">here</a> to continue</b></td>
	  //a href="tickets.php?tn=<?php echo $ticketNumber[$c]?>"><?php echo $early[$c] ?>
    <td width="3">&nbsp;</td>
  </tr>
  <tr>
    <td height="39" colspan="9">&nbsp;</td>
    <td width="3">&nbsp;</td>
  </tr>
  <tr>
    <td height="39" colspan="9">&nbsp;</td>
    <td width="3">&nbsp;</td>
  </tr>
  <tr>
    <td height="39" colspan="9">&nbsp;</td>
    <td width="3">&nbsp;</td>
  </tr>
  <tr> 
    <td height="39"><font face="Comic Sans MS" size="5"><a href="logout.php">logout</a></font></td>
    <td width="1"><img src="images/innerhead-01.jpg" width="1" height="64" /></td>
    <td width="206">&nbsp;</td>
    <td width="1"><img src="images/innerhead-02.jpg" width="1" height="64" /></td>
    <td width="92">&nbsp;</td>
    <td width="1"><img src="images/innerhead-03.jpg" width="1" height="64" /></td>
    <td width="99">&nbsp;</td>
    <td width="1"><img src="images/header-07.jpg" width="1" height="64" /></td>
    <td width="92">&nbsp;</td>
    <td width="3"><img src="images/header-08.jpg" width="3" height="64" /></td>
  </tr>
</table>
		<?php 
	
?>



<onload="MM_preloadImages('images/home-01.jpg','images/register-01.jpg','images/stats-01.jpg','images/options-01.jpg','images/login-01.jpg')">
<table width="850" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="850"><table width="850" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="268" rowspan="2">&nbsp;</td>
          <td width="582" height="119" align="left">&nbsp;</td>
        </tr>
        <tr>
          <td><table width="582" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td width="86">&nbsp;</td>
              <td width="1"><img src="images/innerhead-01.jpg" width="1" height="64" /></td>
                <td width="206">&nbsp;</td>
              <td width="1"><img src="images/innerhead-02.jpg" width="1" height="64" /></td>
                <td width="92">&nbsp;</td>
              <td width="1"><img src="images/innerhead-03.jpg" width="1" height="64" /></td>
                <td width="99">&nbsp;</td>
              <td width="1"><img src="images/header-07.jpg" width="1" height="64" /></td>
                <td width="92">&nbsp;</td>
              <td width="3"><img src="images/header-08.jpg" width="3" height="64" /></td>
            </tr>
          </table></td>
        </tr>
      </table></td></tr>
  <tr>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td valign="top"><table width="844" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="6" valign="top" style="background-repeat:repeat-y; background-image:url(images/in-08.jpg)"><img src="images/in-01.jpg" width="6" height="6" /></td>
          <td width="830" valign="top" style="background-repeat:repeat-x; background-image:url(images/in-02.jpg)">&nbsp;</td>
        <td width="8" valign="top" style="background-repeat:repeat-y; background-image:url(images/in-04.jpg)"><img src="images/in-03.jpg" width="7" height="6" /></td>
      </tr>
      <tr>
        <td valign="top" style="background-repeat:repeat-y; background-image:url(images/in-08.jpg)"><img src="images/in-08.jpg" width="6" height="6" /></td>
        <td height="300" align="left" valign="top" bgcolor="#FFFFFF">
            <table width="830" border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td width="830">&nbsp;</td>
              </tr>
              <tr> 
                <td>&nbsp;</td>
              </tr>
            </table>
          </td>
        <td valign="top" style="background-repeat:repeat-y; background-image:url(images/in-04.jpg)"><img src="images/in-04.jpg" width="7" height="6" /></td>
      </tr>
      <tr>
        <td height="6" valign="top"><img src="images/in-07.jpg" width="6" height="6" /></td>
        <td valign="top" bgcolor="#F0F0F0" style="background-repeat:repeat-x; background-image:url(images/in-06.jpg)"><img src="images/in-06.jpg" width="7" height="6" /></td>
        <td valign="top"><img src="images/in-05.jpg" width="7" height="6" /></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="60" valign="middle">&nbsp;</td>
  </tr>
  
  <tr></tr>
</table>




<?php
}
}
else {	// if form hasn't been submitted

?>


<table width="850" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="850"><table width="850" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="268" rowspan="2">&nbsp;</td>
          <td width="582" height="119" align="left">&nbsp;</td>
        </tr>
        <tr>
          <td height="68"> 
            <table width="582" border="0" cellpadding="0" cellspacing="0">
              <tr> 
                <td width="3"><img src="images/header-08.jpg" width="3" height="64" /></td>
              </tr>
            </table>
          </td>
        </tr>
      </table></td></tr>
  <tr>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td valign="top"><table width="844" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="6" valign="top" style="background-repeat:repeat-y; background-image:url(images/in-08.jpg)"><img src="images/in-01.jpg" width="6" height="6" /></td>
          <td width="830" valign="top" style="background-repeat:repeat-x; background-image:url(images/in-02.jpg)">&nbsp;</td>
        <td width="8" valign="top" style="background-repeat:repeat-y; background-image:url(images/in-04.jpg)"><img src="images/in-03.jpg" width="7" height="6" /></td>
      </tr>
      <tr>
        <td valign="top" style="background-repeat:repeat-y; background-image:url(images/in-08.jpg)"><img src="images/in-08.jpg" width="6" height="6" /></td>
        <td height="300" align="left" valign="top" bgcolor="#FFFFFF"><table width="830" border="0" cellspacing="0" cellpadding="0">
          <tr>
                <td width="830">&nbsp;</td>
          </tr>
          <tr>
            <td><table width="700" border="0" align="center" cellpadding="0">
                    <tr> 
                      <td height="39"><font size="5" face="Comic Sans MS">Login 
                        to your Club Page</font></td>
                    </tr>
                    <tr> 
                      <td height="78">
                        <p>&nbsp;</p>
                        <p><font size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
                          </font></p></td>
                    </tr>
                    <tr> 
                      <td>&nbsp;</td>
                    </tr>
                    <tr> 
                      <td valign="top"> <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="form1" id="form1">
                          <div align="center"> 
                            <table width="313" border="0" cellspacing="0" cellpadding="5">
                              <tr>
                                <td width="155" class="textboxor">
                                  <div align="right">club name</div>
                                </td>
                                <td width="154">
                                  <input name="clubname" type="text" class="textbox1" id="uname" />
                                </td>
                              </tr>
                              <tr> 
                                <td width="155" class="textboxor">
                                  <div align="right">username </div>
                                </td>
                                <td width="154">
                                  <input name="uname" type="text" class="textbox1" id="uname" />
                                </td>
                              </tr>
                              <tr> 
                                <td class="textboxor">
                                  <div align="right">password</div>
                                </td>
                                <td>
                                  <input name="passwd" type="password" class="textbox1" id="passwd" />
                                </td>
                              </tr>
                            </table>
                            <p> 
                              <input name="submit" type="submit" id="submit" value="submit" />
                            </p>
                          </div>
                          <table width="252" border="0" align="center" cellpadding="1" cellspacing="0">
                            <tr> 
                              <td width="15"> 
                                <div align="center"><font size="2"></font></div>
                              </td>
                              <td width="233">
<div align="center"><font size="2"><strong><a href="forgot.php">forgot 
                                  password</a> ?</strong></font></div></td>
                            </tr>
                          </table>
                          <p>&nbsp;</p>
                        </form></td>
                    </tr>
                    <tr> 
                      <td><div align="center" class="lottotable"></div></td>
                    </tr>
                    <tr> 
                      <td height="12" valign="top"> <p align="center" class="lottotable">&nbsp;</p></td>
                    </tr>
                  </table></td>
          </tr>
        </table></td>
        <td valign="top" style="background-repeat:repeat-y; background-image:url(images/in-04.jpg)"><img src="images/in-04.jpg" width="7" height="6" /></td>
      </tr>
      <tr>
        <td height="6" valign="top"><img src="images/in-07.jpg" width="6" height="6" /></td>
        <td valign="top" bgcolor="#F0F0F0" style="background-repeat:repeat-x; background-image:url(images/in-06.jpg)"><img src="images/in-06.jpg" width="7" height="6" /></td>
        <td valign="top"><img src="images/in-05.jpg" width="7" height="6" /></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="60" valign="middle">&nbsp;</td>
  </tr>
  
  <tr></tr>
</table>


</body>
</html>

<?php
}
?>