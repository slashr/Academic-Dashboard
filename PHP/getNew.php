<?php


$con = mysql_connect('localhost','root','','Library');
if(!$con)
{
	die('Could not connect: '.mysql_error($con));
}

mysql_select_db("Library", $con);
$sql="SELECT BookName FROM Books ORDER BY DateAdded LIMIT 5";
$result = mysql_query($sql, $con);
$show = mysql_fetch_array($result);

do
{
    $field01 = $show['BookName'];
    echo "{$field01}<br><br>";
}while($show = mysql_fetch_array($result));


mysql_close($con);


?>