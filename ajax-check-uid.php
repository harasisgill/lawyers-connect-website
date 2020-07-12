<?php

include_once("mysqli-connection.php");
$uid=$_GET["uid"];

$query="select * from signup where uid='$uid'";

$table=mysqli_query($dbcon,$query);

if(mysqli_num_rows($table)==0)
    echo "Available";
else
    echo "Not available";

?>