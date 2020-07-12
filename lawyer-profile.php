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

    <title>WELCOME!</title>
  <style>
      b
      {
          color:lightcyan;
      }
        #BB {
            margin-top: 30px;
            margin-left: 450px;
            box-shadow: 5px -5px 30px black;
            border: 1px black solid;
            width: 400px;
            height: 550px;
        }

        body {
            background-image: url(Pictures/69238252-lawyer-wallpapers.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }

        #SU {
            margin-left: 10px;
            color: black;
        }
      #waitt
      {
          display: none;
      }
    </style>
    <script src="Bootstrap/Css/bootstrap.css"></script>
    <script src="Bootstrap/JS/bootstrap.js"></script>
    <script src="Bootstrap/JS/jquery-1.9.1.js"></script>
    <script type="text/javascript">
            $(document).ajaxStart(function(){
                $("#waitt").show();
            });
            
            $(document).ajaxStop(function(){
                $("#waitt").hide();
            });

        
        
        
        $(document).ready(function() {
                    $("#btn").click(function() {
                        $a = $("#frm").serialize();
                        $url = "lawyer-profile-process.php?" + $a;
                        $.get($url,function(response) {
                            alert(response);
                            
                });
        
    </script>
</head>

<body>
   <!-- Image and text -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="Pictures/advLogo.png" width="30" height="35" class="d-inline-block align-top" alt="">
    Lawyers Connect
  </a><form action="logout.php">
      <input type="submit" value="Logout" class="bg-dark" style="color:white">
    </form>
   </nav>
    <div class="container" id="BB">
        <div class="col-md-4">
            <h1><label id="SU"><u>Profile</u></label></h1>
        </div><br><br>
        
        <form action="lawyer-profile-process.php" name="frm">
        
                <div>
                    <label><b>Name:</b></label>
                    <input type="text" id="name" name="name" required style="border-radius: 5px 5px 5px 5px;;border: 1px black solid;margin-left:90px"autofocus><div id="waitt">#</div>
                </div><br>
                <div id="SUcf"></div>
                 <div style="margin-left:6px;">
                <label style="margin-left:0px"><b>Type of Lawyer:</b></label>

    

                <select id="lt" name="lt" style="border:1px black solid;margin-left:15px">
                <option value="Criminal Lawyer">Criminal Lawyer</option>
                <option value="Public Interest Lawyer">Public Interest Lawyer</option>
                <option value="Tax Lawyer">Tax Lawyer</option>
                <option value="Immigration Lawyer">Immigration Lawyer</option>
                <option value="Employment Lawyer">Employment Lawyer</option>
                <option value="Corporate Lawyer">Corporate Lawyer</option>
                <option value="Contract Lawyer">Contract Lawyer</option>
                <option value="Government Lawyer">Government Lawyer</option>
                <option value="Trial Lawyer">Trial Lawyer</option>
            </select>
                
            </div><br>
                <div >
                    <label><b>Office Address:</b></label>
                    <input type="text" id="oa" name="oa" style="border-radius: 5px 5px 5px 5px;;border: 1px black solid;margin-left:30px" >
                </div><br>
                <div id="mn"></div><br>
                <div >
                    <label><b>Contact Number </b></label>
                    <input type="text" id="cn" name="cn" style="border-radius: 5px 5px 5px 5px;border: 1px black solid;margin-left:5px">
                </div>
                <br>
                 <div >
                    <label><b>E-mail:</b></label>
                    <input type="text" id="email" name="email" style="border-radius: 5px 5px 5px 5px;border: 1px black solid;margin-left:90px" placeholder=" eg:- abc@law.com">
                </div><br>
                 <div>
                    <label><b>Experience</b></label>
                    <input type="text" id="exp"  name="exp"style="border-radius: 5px 5px 5px 5px;border: 1px black solid;margin-left:60px" placeholder=" in years">
                </div>
                <div id="was"></div><br>
                <div>
                     <button type="submit" class="btn bg-white" id="btn" value="save" name="btn" >Save</button>
                     <!--<button type="submit" class="btn bg-white" name="btn" value="delete" id="btn">Delete</button>-->
                     <button type="submit" class="btn bg-white" name="btn" value="update"id="btn">Update</button>                
                </div>
                
                


        </form>
    </div>

</body>
</html>