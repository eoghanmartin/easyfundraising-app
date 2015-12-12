<?php
   

$clubName = $_POST['name'];
$clubContact = $_POST['clubcontact'];
$clubEmail = $_POST['clubemail'];
$clubWebsite = $_POST['clubwebsite'];
$clubFacebook = $_POST['clubfacebook'];
$clubTwitter = $_POST['clubtwitter'];
$clubUsername = $_POST['clubusername'];
$clubPassword = $_POST['clubpassword'];


$file = fopen("text.txt","w");
fwrite($file,"Hello World. Tefffffffffgggggggggggfsting!");
fwrite($file,'<br/>');
fwrite($file,$clubName);
fwrite($file,'<br/>');
fwrite($file,"Hello World. Tefffffffffgggggggggggfsting!");
fwrite($file,'<br/>');
fwrite($file,$clubContact);
fwrite($file,'<br/>');
fwrite($file,$clubEmail);
fwrite($file,'<br/>');
fwrite($file,$clubWebsite);
fwrite($file,'<br/>');
fwrite($file,$clubFacebook);
fwrite($file,'<br/>');
fwrite($file,$clubTwitter);
fwrite($file,'<br/>');
fwrite($file,$clubUsername);
fwrite($file,'<br/>');
fwrite($file,$clubPassword);
fwrite($file,'<br/>');

  
$conn = mysql_connect("hostingmysql304.webapps.net","42dec4-dbuser","easy*?123");
$conn1 = mysql_select_db("42dec4-easy",$conn);
$sql = "INSERT INTO clubs (clubName,clubContact,clubEmail,clubPhone,clubWeb,clubFacebook,clubTwitter,clubUsername,clubPwd) values('".$clubName ."','".$clubContact ."','".$clubEmail . "','".$clubPhone . "','".$clubWebsite . "','".$clubFacebook ."','".$clubTwitter ."','".$clubUsername ."','".$clubPassword ."')";
//good$sql = "INSERT INTO clubs (clubName,clubContact,clubEmail,clubPhone,clubWeb) values('".$clubName ."','".$clubContact ."','".$clubEmail ."')";
//clubEmail,clubPhone,clubWeb,clubFacebook,clubTwitter,clubUsername,clubPwd) values('" . $clubName. "','". $clubContact. "','". $clubEmail. "','". $clubPhone. "','". $clubName. "','". $clubName. "','". $clubName. "','". $clubName. "','". $clubName. "','". $clubName. "','");
//print "sqllllllll ". $sql;
$result = mysql_query($sql,$conn) or die(mysql_error());
//"','".$clubContact .
fwrite($file,$sql);
fclose($file);

return true;	
		
?>