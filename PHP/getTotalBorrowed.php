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
$total=intval($show['count(*)']);
echo $total+2788;

/*while ($show = mysql_fetch_array($result))
{
    $field01 = $show['BookName'];
    $field02 = $show['Copies'];
    echo "Name: {$field01}<br>";
    echo "Copies: {$field02}<p>";
}*/


mysql_close($con);


?>