<?php
$host="localhost";
$user="marky";
$password="tsus2312";
$db="interrupt";
$connect = new mysqli($host,$user,$password,$db);
if(mysqli_connect_errno())
{
	echo mysqli_connect_error();
}
?>
