<?php

session_start();
if(isset($_SESSION["uid"])==false)
{
    header("location:index.php");
}



?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Bootstrap/Css/bootstrap.css">

    <title>Hello, world!</title>
  <style>
    </style>
    <script src="Bootstrap/Css/bootstrap.css"></script>
    <script src="Bootstrap/JS/bootstrap.js"></script>
    <script src="Bootstrap/JS/jquery-1.9.1.js"></script>
    <script type="text/javascript">
    </script>
</head>

<body>
   <!-- Image and text -->
<nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="index.php">
    <img src="Pictures/advLogo.png" width="30" height="35" class="d-inline-block align-top" alt="">
    Lawyers Connect
  </a><form action="logout.php">
      <input type="submit" value="Logout" class="bg-dark" style="color:white">
    </form>
    </nav>
    <div class="container" id="BB">
        <div id="list">
            <div><h2 style="margin-left: 200px">Here is the list of lawyers based on your search:</h2></div>
            <br>
            <div>
            <table id="table">
                <tr><td><div style="border: 1px red solid">1</div></td></tr>
                <tr><td><div style="border: 1px red solid">1</div></td></tr>
                <tr><td><div style="border: 1px red solid">1</div></td></tr>
                <tr><td><div style="border: 1px red solid">1</div></td></tr>
                <tr><td><div style="border: 1px red solid">1</div></td></tr>
                </table>
            </div>
        </div>
    </div>

</body>
</html>