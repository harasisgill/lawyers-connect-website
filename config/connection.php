<?php
session_start();
$dbcon=mysqli_connect("localhost","root","","sohalmixers");
if(mysqli_connect_errno())
{
    echo "Failed" .mysqli_connect_errno();
}
