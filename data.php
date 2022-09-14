<?php
require_once("connection.php");
echo "Data.php page<br/>";
$cnt_len = $_POST['cnt_length'];
$cnt_arr = array();
for($i = 0; $i<$cnt_len; $i++){
    $cnt_name = "cnt_val".$i;
    $cnt_arr[$i] = $_POST[$cnt_name];
}

for($i = 0; $i<$cnt_len; $i++){
    echo "cnt_arr.$i = $cnt_arr[$i]<br/>";
}
exit;

$sql="insert into empinfodetail(empName) values('$user_name')";
//echo $sql;
if(mysqli_query($con,$sql))
{
    echo "saved";
}
else
echo "error<br/>$sql";
?>