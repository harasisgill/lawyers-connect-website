<?php
    include_once("mysqli-connection.php");

$btn=$_GET["btn"];

if($btn=="signup")
{
    doSignup($dbcon);
}
function doSignup($dbcon)
{
    $uid=$_GET["uid"];
    $pwd=$_GET["pwd"];
    $mobile=$_GET["mobile"];

    $query="insert into users(uid,pwd,mobile,dos,tos) values('$uid','$pwd','$mobile',current_date,current_time)";

    mysqli_query($dbcon,$query);
    if(mysqli_error($dbcon)=="")
        echo "Record Submitted";
    else
        echo mysqli_error($dbcon);

    }


?>
