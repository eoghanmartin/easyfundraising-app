<?php

session_start();

//require 'db_connect.php';	// database connect script.

//$conn = mysql_connect("localhost","d39173_joemul","u1wns78p");
//$conn1 = mysql_select_db("d39173_luck",$conn);


//if ($logged_in == 0) {
//	die('You are not logged in so you cannot log out.');
//}


unset($_SESSION['username']);
unset($_SESSION['password']);
// kill session variables
$_SESSION = array(); // reset session array
session_destroy();   // destroy session.
header('Location: http://www.easyfundraising.ie/clubAdminPages/login.php');
// redirect them to anywhere you like.
?>