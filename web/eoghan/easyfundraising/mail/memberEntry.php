<?php
   
$clubName=$_POST['clubName'];
$playerName = $_POST['playerName'];
$playerEmail = $_POST['email'];
$playerPhone = $_POST['phone'];
$question1 = $_POST['question1'];
$question2 = $_POST['question2'];
$question3 = $_POST['question3'];
$question4 = $_POST['question4'];
$question5 = $_POST['question5'];
$question6 = $_POST['question6'];
$question7 = $_POST['question7'];


$file = fopen("text.txt","w");
fwrite($file,"Hello World. Tefffffffffgggggggggggfsting!");
fwrite($file,'<br/>');
fwrite($file,$clubName);
fwrite($file,'<br/>');
fwrite($file,$playerName);
fwrite($file,'<br/>');
fwrite($file,$playerEmail);
fwrite($file,'<br/>');
fwrite($file,$playerPhone);
fwrite($file,'<br/>');
fwrite($file,$question1);
fwrite($file,'<br/>');
fwrite($file,$question2);
fwrite($file,'<br/>');
fwrite($file,$question3);
fwrite($file,'<br/>');
fwrite($file,$question4);
fwrite($file,'<br/>');
fwrite($file,$question5);
fwrite($file,'<br/>');
fwrite($file,$question6);
fwrite($file,'<br/>');
fwrite($file,$question7);
fwrite($file,'<br/>');



  
$conn = mysql_connect("hostingmysql304.webapps.net","42dec4-dbuser","easy*?123");
$conn1 = mysql_select_db("42dec4-easy",$conn);

$sql1 = "SELECT entryNumber FROM election ORDER BY entryNumber DESC";
$result1 = mysql_query($sql1,$conn) or die(mysql_error());
$next = mysql_fetch_row($result1);
$nextEntry = $next[0]+1;

$sql = "INSERT INTO election (clubName,entryNumber,playerName,playerEmail,playerPhone,q1,q2,q3,q4,q5,q6,q7,paid) values('".$clubName ."','".$nextEntry ."','".$playerName ."','".$playerEmail . "','".$playerPhone . "','".$question1 . "','".$question2 ."','".$question3 ."','".$question4 ."','".$question5."','".$question6."','".$question7."','N')";
//good$sql = "INSERT INTO clubs (clubName,clubContact,clubEmail,clubPhone,clubWeb) values('".$clubName ."','".$clubContact ."','".$clubEmail ."')";
//clubEmail,clubPhone,clubWeb,clubFacebook,clubTwitter,clubUsername,clubPwd) values('" . $clubName. "','". $clubContact. "','". $clubEmail. "','". $clubPhone. "','". $clubName. "','". $clubName. "','". $clubName. "','". $clubName. "','". $clubName. "','". $clubName. "','");
//print "sqllllllll ". $sql;
$result = mysql_query($sql,$conn) or die(mysql_error());
//"','".$clubContact .
fwrite($file,$sql);
fclose($file);
$returnString = "thanks again";
echo $nextEntry;
//	return true;	
		
?>