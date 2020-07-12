 <?php
include_once("mysqli-connection.php");

   $uid=$_GET["uid"];
    $pwd=$_GET["pwd"];
    $mobile=$_GET["mobile"];
    $type=$_GET["rd"];
    $query="insert into signup(uid,pwd,mob,type) values('$uid','$pwd','$mobile','$type')";

    mysqli_query($dbcon,$query);
    if(mysqli_error($dbcon)=="")
        echo "Sign Up Successfull";
    else
        echo mysqli_error($dbcon);

?>