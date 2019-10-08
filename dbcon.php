<?php
$dbServername="remotemysql.com";
$dbUsername="FFW73w9rDk";
$dbPassword="U8pGLYjPGX";
$dbname="FFW73w9rDk";
 

$dbh=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbname);

if(!$dbh)
{
	die(mysqli_errno($dbh)."did not connect");
}
?>
