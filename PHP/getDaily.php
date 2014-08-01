<?php


$con = mysql_connect('localhost','root','','Library');
if(!$con)
{
	die('Could not connect: '.mysql_error($con));
}

mysql_select_db("Library", $con);
$sql = "SELECT count(*) FROM Attendance WHERE Date='2013-10-27' AND Attendance='P'";
$result = mysql_query($sql, $con);
$show = mysql_fetch_array($result) or die(mysql_error());
$temp1 = intval($show['count(*)']);

$total = ($temp1/15)*100;


echo ("<b>$total%</b>");
mysql_close($con);


?>