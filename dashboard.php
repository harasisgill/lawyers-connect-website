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
    
    <link rel="stylesheet" href="Bootstrap/Css/bootstrap.css">
    <script src="JS/jquery-1.9.1.js"></script>
    <!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>-->
    <script src="Bootstrap/JS/bootstrap.js"></script>
    <script type="text/javascript"></script>
    <style>
    .card:hover
        {
            transform: scale(1.02,1.02);
        }
        body {
            background-image: url(Pictures/backSky.jpg);
            background-repeat: no-repeat;
            background-size: contain;
        }

    </style>

</head>

<body  >
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="index.php">
    <img src="Pictures/advLogo.png" width="30" height="35" class="d-inline-block align-top" alt="">
    Lawyers Connect
  </a><form action="logout.php">
      <input type="submit" value="Logout" class="bg-dark" style="color:white">
    </form>
    </nav><br>
    <div class="container">
        <div class="card-deck"style="width:500px;margin-left:330px">
            <div class="card"><a href="lawyer-profile.php">
                <img class="card-img-top" src="Pictures/profile.jpg" alt="Card image cap" style="width:300px;margin-left:100px"></a>
                <div class="card-body">
                    <h5 class="card-title">Profile</h5>
                    <p class="card-text">Edit your profile here.Profile includes information about you that would be useful to clients</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>

    </div>
    <div class="container" style="background-image: url(Pictures/Backgrounds-03.jpg);">
        <center><div style="color:#155abc;margin-top:108px"><h2><u>Important Information</u></h2></div></center>
       <div> <ul>
            <h4><li>Please fill in your profile with correct details.</li>
            <li>Once you have saved your data, you can make changes to it if neede(cannot change your name once saved)</li>
            <li>Clients can reach out to you via your provided contact number and e-mail address</li>
            <li>So,do provide the correct information</li>
            <li>All the spoofers please stay away</li>
            <li>This site provides an interface to clients to look up for lawyers</li>

            <li>Please! Let us know if you are getting clients via our website</li>
           </h4> </ul></div>
    </div>
</body>

</html>
