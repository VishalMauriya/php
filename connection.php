<?php
$server="localhost";//127.0.0.1
$db_userid="root";
$db_password="";
$database="test";
$con=mysqli_connect($server,$db_userid,$db_password,$database);
if(!$con)
echo "server connection error";

?>