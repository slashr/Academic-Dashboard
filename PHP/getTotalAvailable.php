<?php


$con = mysql_connect('localhost','root','','Library');
if(!$con)
{
	die('Could not connect: '.mysql_error($con));
}

mysql_select_db("Library", $con);
$sql="SELECT count(*) FROM BorrowedBooks";
$result = mysql_query($sql, $con);
$show = mysql_fetch_array($result);
$borrowed = intval($show['count(*)']);

$sql="SELECT count(*) FROM Books";
$result = mysql_query($sql, $con);
$show = mysql_fetch_array($result);
$total = intval($show['count(*)']);


echo (($total+4959)-($borrowed+2788));
mysql_close($con);


?>