 <?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root';
// $dbhost = 'mileswebsitesdatabase.cvqlh7kikmh1.us-west-1.rds.amazonaws.com';
// $dbuser = 'mileswebhead';
// $dbpass = 'mileswebhead.db7790';
 $db = 'db_online_feedback';
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $db);
if($mysqli ->connect_errno)
{
  die('Could not connect: ' . mysql_error());
}
 // else
 // 	echo 'Successful connection';

?>