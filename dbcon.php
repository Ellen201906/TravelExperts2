<?php
$dbServername="remotemysql.com";
$dbUsername="Uhj84Kilfk";
$dbPassword="7g5uBO7IOG";
$dbname="Uhj84Kilfk";
 

$dbh=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbname);

if(!$dbh)
{
	die(mysqli_errno($dbh)."did not connect");
}
?>
