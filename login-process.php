 <?php
include_once("mysqli-connection.php");

   $uid=$_GET["luid"];
    $pwd=$_GET["lpwd"];
//    $rd=$_GET["rd"];

$query="select pwd from signup where uid='$uid' && pwd='$pwd'";
$table=mysqli_query($dbcon,$query);
if(mysqli_num_rows($table)==0)

    echo "Invalid Entry";


else
    echo "Valid";

?>