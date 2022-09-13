<?php
require_once("connection.php");
echo "Data.php page<br/>";
$user_name=$_POST['username'];
echo "username=$user_name<br/>";
$sql="insert into empinfo(empname) values('$user_name')";
//echo $sql;
if(mysqli_query($con,$sql))
{
    echo "saved";
}
else
echo "error<br/>$sql";
?>