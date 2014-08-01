<?php

$isbn = $_GET['isbn'];
$name = $_GET['name'];
$count = 1;

$con = mysql_connect('localhost','root','','Library');
if(!$con)
{
	die('Could not connect: '.mysql_error($con));
}

mysql_select_db("Library", $con);
$sql="SELECT isbn from requests";
$result = mysql_query($sql, $con);

while($row = mysql_fetch_array($result))
{
	if($row['isbn']==$isbn)
	{
		$count++;
	}
	
}


if($count==1)
$sql= "INSERT into Requests(ISBN, BookName, Count) values('".$isbn."', '".$name."', '".$count."');";
else
$sql = "UPDATE Requests set Count= count+1 WHERE ISBN = '".$isbn."';";


$result = mysql_query($sql, $con);

if($result)
echo "Request Received!";
else
echo "Failed";
mysql_close($con);


?>