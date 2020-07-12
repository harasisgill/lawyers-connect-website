<?php

include_once("mysqli-connection.php");

    $lt=$_GET["lt"];
    $mb=$_GET["mb"];
    $email=$_GET["email"];
    $doc=$_GET["doc"];

$query="insert into client(Lawyer,Mobile,Email,DOC) values('$lt','$mb','$email','$doc')";

 mysqli_query($dbcon,$query);
    if(mysqli_error($dbcon)=="")
        echo "Record Submitted....";
    else
        echo "Error";

    
?>