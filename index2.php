<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type = "text/css" rel = "stylesheet" href="bootstrap.min.css"/>
    <title>Home</title>
<style>
div.minH{
    min-height: 400px;

}


div.m{
    background : skyblue;
    border: 2px solid blue;
    border-radius: 25px;

}
</style>
</head>
<body>

    <div class="container">
        <?php
//include_once("connection1.php");
require_once("connection.php");

        ?>
        <div class="panel panel-primary"> 
            <div class="panel-heading">Details</div>
        <!-- </div>
        
        <div class="panel panel-info">  -->
            <div class="panel-body">
    
     <?php

$cnt_array=Array(
    
    
    Array("Name","text",""),
    /*Array("FatherName","text",""),
    Array("DOB","date",""),
    Array("Mobile","number",""),
    Array("EnailID","email",""),
    Array("Address","text",""),
    Array("City","text",""),
    Array("Technical Skills","text",""),
    Array("Image","file",""),
    Array("Resume","file",""),
    Array("Dis_Qualified Reason","text",""),
    Array("Status","text",""),*/
);

$flag=false;
echo "<form action='data.php' method='post'>";

for($i=0;$i<count($cnt_array);$i++)
{
    $cnt_label=$cnt_array[$i][0];
    $cnt_type=$cnt_array[$i][1];
if($flag)
    echo "<div class='row'>";
    echo "
    <label class='col-md-3'>$cnt_label</label>
<div class='col-md-3'>
<input class='form-control' name='username' type='$cnt_type'/>
</div>

";
if($flag)
{
echo "</div><br/>";
$flag=false;
}else
$flag=true;
}

    ?>
</div>
</div>

<!-- ------------------------------- -->

        <div class="panel panel-primary"> 
            <div class="panel-heading">Qualification</div>
        <!-- </div>
        
        <div class="panel panel-info">  -->
            <div class="panel-body">
    
     <?php
$cnt_array2=Array(
    
 /*   
    Array("id","number",""),
    Array("Postid","number",""),
    Array("Degree Level","text",""),
    Array("Degree","text",""),
    Array("Compulsory","text",""),
    Array("percentage Required","text",""),
    Array("Experience in Months","number",""),
*/
);

$flag=false;

for($i=0;$i<count($cnt_array2);$i++)
{
    $cnt_label=$cnt_array2[$i][0];
    $cnt_type=$cnt_array2[$i][1];
if($flag)
    echo "<div class='row'>";
    echo "
    <label class='col-md-3'>$cnt_label</label>
<div class='col-md-3'>
<input class='form-control' type='$cnt_type'/>
</div>

";
if($flag)
{
echo "</div><br/>";
$flag=false;
}else
$flag=true;
}

    ?>
</div>
</div>


<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4"><input type="submit" name='save' class="btn btn-info" /></div>
    <div class="col-md-4"></div>
</div>
<?php

echo "</form>";

?>
</div>
</body>
</html>