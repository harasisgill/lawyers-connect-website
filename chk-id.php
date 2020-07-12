
<?php

include_once("mysqli-connection.php");
session_start();
    $uid=$_GET["luid"];
    $pwd=$_GET["lpwd"];
    
    
$query="select * from signup where uid='$uid' and pwd='$pwd'";

$table=mysqli_query($dbcon,$query);
if(mysqli_num_rows($table)==0)
{
    echo "Invalid Entry";
    
}

else
{
    $row=mysqli_fetch_array($table);
    $_SESSION["uid"]=$uid;
    echo $row["type"];
}



?>