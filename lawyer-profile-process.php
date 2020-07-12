<?php

include_once("mysqli-connection.php");
$btn=$_GET["btn"];

if($btn=="save")
{
    doSave($dbcon);
}
else
    if($btn=="delete")
    {
    doDelete($dbcon);
    }
else
    doUpdate($dbcon);


function doUpdate($dbcon)
{
    $name=$_GET["name"];
    $oa=$_GET["oa"];
    $cno=$_GET["cn"];
    $email=$_GET["email"];
    $exp=$_GET["exp"];

    $query="update profile set oadd='$oa',cno='$cno',email='$email',exp='$exp' where name='$name'";

    mysqli_query($dbcon,$query);
    if(mysqli_error($dbcon)=="")
    {
        if(mysqli_affected_rows($dbcon)!=0)
        echo "<script>window.location='lawyer-profile.php';alert('Successfully Updated');</script>";
        else
        echo "Invalid uid";
    }
    else
        echo mysqli_error($dbcon);

    }

function doDelete($dbcon)
{
    $name=$_GET["name"];

$query="delete from profile where name='$name'";

mysqli_query($dbcon,$query);
if(mysqli_error($dbcon)=="")
{
    if(mysqli_affected_rows($dbcon)!=0)
        echo "Record Deleted....";
    else
        echo "Invalid uid";
}
else
    echo mysqli_error($dbcon);

}



function doSave($dbcon)
{
    $name=$_GET["name"];
    $oa=$_GET["oa"];
    $cno=$_GET["cn"];
    $email=$_GET["email"];
    $exp=$_GET["exp"];
    $lt=$_GET["lt"];

$query="insert into profile(name,oadd,cno,email,exp,lt) values('$name','$oa','$cno','$email','$exp','$lt')";

 mysqli_query($dbcon,$query);
    if(mysqli_error($dbcon)=="")
        echo "<script>window.location='lawyer-profile.php';alert('Successfully Saved');</script>";
    else
        echo mysqli_error($dbcon);
}
    
?>