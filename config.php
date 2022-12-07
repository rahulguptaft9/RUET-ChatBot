<?php

$host="10.10.7.74";
$user="root";
$pass="a1a1A!A!";
$db="dcapp";

$con=mysqli_connect($host,$user,$pass,$db);

if(!$con)
{
	print("Not Connected<br>".mysql_error());

}
else
{
	echo("Connected");
}






?>
