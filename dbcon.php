<?php
$dbServername="remotemysql.com";
$dbUsername="VVM1l1CnNR";
$dbPassword="Vr1Dq4ju2f";
$dbname="VVM1l1CnNR";
 

$dbh=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbname);

if(!$dbh)
{
	die(mysqli_errno($dbh)."did not connect");
}
?>
