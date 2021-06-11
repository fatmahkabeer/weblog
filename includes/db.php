<?php 
$server='localhost';
$username='fatma';
$password='1234';
$db='mine';
$conn=mysqli_connect($server,$username,$password,$db);
 if(!$conn)
   die("Connection Failed !");

@mysql_query("SET NAMES 'utf8'");
?>
