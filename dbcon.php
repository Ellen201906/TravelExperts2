<?php
$dbServername="remotemysql.com";
$dbUsername="UN6AGWHSo2";
$dbPassword="O3AyO1IXuu";
$dbname="UN6AGWHSo2";
 

$dbh=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbname);

if(!$dbh)
{
	die(mysqli_errno($dbh)."did not connect");
}
?>