<?php
include_once("mysqli-connection.php");

$lt=$_GET["lt"];

$query="select * from profile where lt='$lt'";

$table=mysqli_query($dbcon,$query);

$all=array();
while($row=mysqli_fetch_array($table))
{
    $all[]= $row;
}

echo json_encode($all);



?>