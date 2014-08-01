<?php


$con = mysql_connect('localhost','root','','Library');
if(!$con)
{
	die('Could not connect: '.mysql_error($con));
}

mysql_select_db("Library", $con);
$sql="SELECT BookName FROM Requests ORDER BY Count DESC LIMIT 5";
$result = mysql_query($sql, $con);
$show = mysql_fetch_array($result);

do
{
    $field01 = $show['BookName'];
	$i=0;
	if($i%2==0)
	{
		echo "<marquee direction=down behaviour=alternate scrollamount=2 height=15%><b>{$field01}<br></b></marquee>";	
		sleep(3);
		$i++;
	}
}while($show = mysql_fetch_array($result));


mysql_close($con);
?>