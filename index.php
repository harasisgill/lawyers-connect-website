<?php
session_start();
if(isset($_SESSION["luid"])==true)
{
    header("location:dashboard.php");
}


?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/Footer.css">
    <link rel="stylesheet" href="CSS/Footer2.css">
    <link rel="stylesheet" href="CSS/SohalMixtures.css">
    <link rel="stylesheet" href="CSS/what.css">
    <link rel="stylesheet" href="CSS/AboutUs.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="JS/jquery-1.9.1.js"></script>
    <link rel="stylesheet" href="Bootstrap/Css/bootstrap.css">
    <script>
    var f1,f2,f3;
    function chkUid()
    {
	    
	    /* Nice Website */
        /*var ref=document.getElementById("uid");
        var val=ref.value;
        alert(val);*/
        var uid=document.getElementById("uid").value;
        if(uid=="")
            {
                f1=false;
                document.getElementById("uid").style.backgroundColor="yellow";
                document.getElementById("errUid").style.color="red";
                
                document.getElementById("errUid").innerHTML="Fill uid plz..";
                
            }
        else
            {
                f1=true;
                document.getElementById("uid").style.backgroundColor="white";
                document.getElementById("errUid").innerHTML="ok";
            document.getElementById("errUid").style.color="green";
            }
    }
    function chkPassword(pwd,err)
    {
        var len=pwd.length;
        if(len==0)
            {
                f2=false;
                return;
            }
        f2=true;
        if(len>=1 && len<4)
         {   err.innerHTML="Weak";
            err.style.color = "red";
         }else
        if(len>=4 && len<7)
        {err.innerHTML="Average";
            err.style.color = "#ffd700";
        }else
            if(len>=7)
            {var r=/(?=^.{8,}$)(?=.*\d)(?=.*[!@#$%^&*]+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/;
                if(r.test(pwd)==true)
            { err.innerHTML="Strong";
             err.style.color = "green";
            f2=true;
             
             
            }
        else
            {
                err.innerHTML="Average";
                err.style.color = "#ffd700";
                f2=false;
            }
             };
      
        
     /*   var r=/(?=^.{8,}$)(?=.*\d)(?=.*[!@#$%^&*]+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/;
        if(r.test(pwd)==true)
            { err.innerHTML="Valid";
            f2=true;
             
             
            }
        else
            {
                err.innerHTML="In-Valid";
                f2=false;
            }*/

            
    }
    
    function chkMobile(mob,err)
    {
        var r=/^[7-9]{1}[0-9]{9}$/;
			var bool=r.test(mob);
			
			if(bool==true)
         {
             err.innerHTML="Correct";
             err.style.color="green";
             f3=true;
         }
          else
            {
            f3=false;
            err.innerHTML="Incorrect";
                err.style.color="red";
    }
        }
    function subm()
    {
        if (f1==true && f2==true && f3==true)
            alert("Signup Completed");
        else
            alert("Fill valid data please");
    }
    </script>
    <script src="JS/jquery-1.9.1.js"></script>
    <!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>-->
    <script src="Bootstrap/JS/bootstrap.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $(document).ajaxStart(function() {
                $("#waitt").show();
            });

            $(document).ajaxStop(function() {
                $("#waitt").hide();
            });
                        $("#btnContact").on('click', function(event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function() {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });

            $("#btnAbout").on('click', function(event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function() {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });





            $(document).ready(function() {
                $("#btnl").click(function() {
                    $a = $("#frm2").serialize();
                    $url = "chk-id.php?" + $a;
                     
                    $.get($url, function(response) {
                        
            
                       
                        response=response.trim();
                        if(response == "client")
                            
                                {  
//                                    /*$b=$("#rd").val();*/
//                                     //alert($b);
                                    
                                    window.location="dashboard2.php";
            
                                   // header("location:dashboard.php");
                                }
                        else if(response=="lawyer")
                    window.location="dashboard.php";
                        else
                        $("#inv").html("Invalid Id or Pwd");     
                        
                    });

 

                });


            });
            
            
            
            $("#uid").blur(function() {
                $uid = $("#uid").val();
                $.get("ajax-check-uid.php?uid=" + $uid, function(response) {
                    $("#res").html(response);
                });
            });



            $("#ajaxSave").click(function() {

                $qs2 = $("#frm").serialize();
                $url = "ajax-signup-process.php?" + $qs2;
                $.get($url, function(response) {

                    $("#result").html(response);

                });
            });
        });

    </script>

    <style>
        #inv {
            color: red;
        }

        #waitt {
            margin-left: 170px;
            width: 10px;
            float: none;
            height: 10px;
            display: none;
        }

    </style>


    <title>Lawyers Connect</title>
    <link rel="shortcut icon" href="PICS/advocate.jpg">
    <style type="text/css">
        body {
            background-image: url(Pictures/bg2.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }



        #head {
            margin top: 0px;
            border: 0px;
            background-color: black;
            opacity: 0.7;
            margin-left: 0px;
            width: 100%;
            font-family: serif;
            color: white;
            font-size: 45px;
            height: 70px;
        }

        #detail {
            font-family: serif;
            color: black;
            font-size: 35px;
            margin-top: 50px;
            width: 805px;
            height: 0px;
            margin-left: 15px;

        }

        #btn {
            margin-top: 350px;
            margin-left: 340px;
        }
        #signup
        {
            border: 1px black solid;
        }
        
        #login
        {
            margin-left: 10px;
            border: 1px black solid;
        }
        
        #signup:hover
        {
            border: 1px black solid;
            transform: scale(1.1,1.1);
        }
        
        #login:hover
        {
            border: 1px black solid;
            transform: scale(1.1,1.1);
        }
        #signup:active
        {
            transform: translate(2px,2px);
            border: 1px black solid;
        }
        
        #login:active
        {
            transform: translate(2px,2px);
            border: 1px black solid;
        }

        i
        {
            color: blue;
            margin-left: 10px;
        }
        
    </style>
</head>

<body>

    <!--<div class="col-md-12" id="head" style="background-color:#050404">
        <img src="Pictures/advLogo.png" style="width: 50px; height: 60px; float: left; margin-left: 20px; margin-top: 5px; opacity:1;">
        <center>Welcome to Lawyers Connect</center>
    </div>

    <div class="col-md-7" id="detail" style="font-family: hemank;">
        Lawyers Connect is One of the leading Websites of Punjab. We are here to connect clients and lawyers just at few clicks. We are here to provide you the Best Services by our Team.We will help you in Many Ways. Dear Clients And Lawyers, Please Sign Up or Login your Account..

    </div><br><br>-->
       <nav class="navbar navbar-expand-lg navbar-light bg-white" style="margin-top:0px;">
           <a class="navbar-brand" href="#"><div style="margin-top:10px"></div><img src="Pictures/advLogo.png" style="width: 40px; height: 45px; float: left; margin-left: 0px; margin-top: 5px; opacity:1;">
   <!-- <img src="Photos/Webp.net-resizeimage%20(2).png" width="30" height="30" class="d-inline-block align-top" alt="">--><div style="margin-bottom:15px"></div>
    <label id="domainSohal" style="color:black;margin-bottom:-10px"  ><b id="domainMixtures" style="color:black">Lawyers Connect</b></label>
  </a><br>
        <!--<a class="navbar-brand" href="#">Navbar</a>-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#" id="btnHome" style="margin-left: 30px;"> <span class="sr-only">(current)</span></a>
                </li><div style="width-left:50px"></div>

               <!-- <li class="nav-item dropdown" id="btnOurMachines">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Our Machines
        </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Mixtures<img src="Photos/Mixtures.png" style="margin-left: 20px;"></a>
                        <a class="dropdown-item" href="#">Crushers<img src="Photos/Crusher.png" style="margin-left: 20px;"></a>
                        <a class="dropdown-item" href="#">Lifters<img src="Photos/Lifter.png" style="margin-left: 40px;"></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="Machines.html">View All</a>
                    </div>
                </li>-->
                <li class="nav-item" style="margin-left: 15px;">
                    <a class="nav-link" href="#what-we-do" id="btnContact">Services</a>
                </li>
                <li class="nav-item" style="margin-left: 15px;">
                    <a class="nav-link" href="#team" id="btnAbout">About Us</a>
                </li>

            </ul>
            
            <!--
              <a href="#">
				<?php echo $user['first_name'];?>
			</a>
--> 
             <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal" id="signup" name="signup">Sign Up</button>
	

            
            <button type="button" class="btn btn-light" data-toggle="modal" data-target="#example2Modal" id="login" name="login">Login</button>
			

        </div>
    </nav>
     <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="no-repeat top center fixed;">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="Pictures/law4.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="Pictures/law1.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="Pictures/law2.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="Pictures/law5.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="Pictures/law3.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="Pictures/law6.jpg" alt="Third slide">
            </div>
            <!--<div class="carousel-item">
                <img class="d-block w-100" src="Photos/7.jpg" alt="Third slide">
            </div>-->
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
         </a><div style="height:10px;background-color:#155aac"></div>
    </div><section id="services" style="background-image:url(Pictures/69238252-lawyer-wallpapers.jpg);background-repeat: no-repeat;
            background-size: cover;">
        <div class="container-fluid">
            <h2 class="section-title mb-2 h1" style="color:white">What are site does?</h2>
        
            <div class="row mt-5">
                <div id="" class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4" >
                    <div class="card" style="width:1000px;height:300px;margin-left:200px;">
                        <div class="card-block block-3" style="background-color:white">
                            <center><h3 class="card-title" style="color:#1159aa">We made looking for lawyers really simple.One can sign-up with our website and search the type of lawyers they want according to their case.We will provide them with the list of lawyers and they can contact them via contact number or e-mail that would be provided by th lawyer.<br>
                            Lawyers can sign-up and add their details to the profile and the signed-up lawyers will be shown to the interested client in the category they are looking for.
                            </h3>
                            </center>
                            <!--<a href="javascript:void();" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>-->
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    <section id="what-we-do" style="background-image: url(Pictures/bg2.jpg);">
       
        <div class="container-fluid">
            <h2 class="section-title mb-2 h1" style="color:#1159aa">Have no clue which lawyer to choose ?</h2>
            <p class="text-center text-muted h5">We are here for you.</p>
            <div class="row mt-5">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4" >
                    <div class="card">
                        <div class="card-block block-3" style="background-color:white">
                            <h3 class="card-title" style="color:#1159aa">Criminal Lawyer</h3>
                            <p class="card-text" style="color:#1159aa">If you or a loved one has been charged with a crime, a criminal lawyer is the type of lawyer you should turn to. A criminal lawyer will be knowledgeable in areas related to criminal law, including issues related to bail, arraignment, arrest, pleas and any issues relating to the criminal trial itself.</p>
                            <!--<a href="javascript:void();" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>-->
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card">
                        <div class="card-block block-3" style="background-color:white">
                            <h3 class="card-title" style="color:#1159aa">Public Interest Lawyer</h3>
                            <p class="card-text" style="color:#1159aa">Public interest law loosely, refers to legal practices undertaken to help poor or marginalized people, or to effect change in social policies in the public interest, on 'not for profit' terms. In general terms it means a legal action initiated in the court of law for the protection of Public Interest.</p>
                            <!--<a href="javascript:void();" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>-->
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card">
                        <div class="card-block block-3" style="background-color:white">
                            <h3 class="card-title" style="color:#1159aa">Tax Lawyer</h3>
                            <p class="card-text" style="color:#1159aa">Getting into trouble with the IRS is no fun. A tax attorney specializes in the many intricacies of federal, state and local tax laws, and should be able to provide advice on the particular tax issue you face.</p>
                            <!--<a href="javascript:void();" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card">
                        <div class="card-block block-3" style="background-color:white">
                            <h3 class="card-title" style="color:#1159aa">Immigration Lawyer</h3>
                            <p class="card-text" style="color:#1159aa">When you’re dealing with immigration issues, you’ll want to consult with an immigration lawyer. This type of lawyer should be well versed in dealing with immigration issues such as visas, citizenship, refugee or asylum and green cards.</p>
                            <!--<a href="javascript:void();" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>-->
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card">
                        <div class="card-block block-3" style="background-color:white">
                            <h3 class="card-title" style="color:#1159aa">Employment Lawyer</h3>
                            <p class="card-text" style="color:#1159aa">Whether you’re a company that’s having a problem with an employee, or an individual who’s having problems with the company you work for, an employment lawyer can generally provide advice about legal issues which arise from an employment contract or within an employment relationship.</p>
                            <!--<a href="javascript:void();" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>-->
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4" >
                    <div class="card">
                        <div class="card-block block-3" style="background-color:white">
                            <h3 class="card-title" style="color:#1159aa">Corporate Lawyer</h3>
                            <p class="card-text" style="color:#1159aa">If you own a corporation, you’ll likely find yourself consulting with a corporate attorney on many different occasions. A corporate lawyer will be able to help you with issues related to the formation of your corporation, general corporate governance issues and corporate compliance issues.</p>
                            <!--<a href="javascript:void();" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>-->
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4" >
                    <div class="card">
                        <div class="card-block block-3" style="background-color:white">
                            <h3 class="card-title" style="color:#1159aa">Contract Lawyer</h3>
                            <p class="card-text" style="color:#1159aa">A contract lawyer specializes in the handling of issues arising from contracts, and can be consulted for a wide range of contract-related issues. Whether you’re unsure if you should sign a particular contract, or if something has gone wrong with a contract you’ve already signed.</p>
                            <!--<a href="javascript:void();" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>-->
                        </div>
                    </div>
                </div><div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4" >
                    <div class="card">
                        <div class="card-block block-3" style="background-color:white" >
                            <h3 class="card-title" style="color:#1159aa">Government Lawyer</h3>
                            <p class="card-text" style="color:#1159aa">Government lawyers are qualified solicitors and barristers who act on the behalf of and give legal advice to government ministers and administrative staff. Entry can be competitive but many government lawyers get a sense of satisfaction from providing a public service.</p>
                            <!--<a href="javascript:void();" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>-->
                        </div>
                    </div>
                </div><div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card">
                        <div class="card-block block-3"style="background-color:white">
                            <h3 class="card-title" style="color:#1159aa">Trial Lawyer</h3>
                            <p class="card-text" style="color:#1159aa">Trial lawyers meet with clients and agree to represent them in court cases. After performing legal research, trial lawyers go to court to argue their client's case on their behalf to the judge or jury. A bachelor's degree followed by three years of law school is the necessary education for this vocation.</p>
                            <!--<a href="javascript:void();" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="team" class="pb-5">

        <div class="container" style="color:#1159aa">
            <h5 class="section-title h1" style="color:#1159aa">Developed By</h5>
            <div class="row">
                <!-- Team member -->
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="Pictures/img1.jpg" alt="card image"></p>
                                        <h4 class="card-title" style="color:#e52b28">Harasis Singh Gill</h4>
                                        <p class="card-text">He codes like a ninja in a fight .With his hardwork this site was made possible.</p>
                                        <br><p class="card-text"></p>
                                        <!--<a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>-->
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">Contact info:</h4>
                                        <br>
                                        <p></p>
                                        <p class="card-text"></p>
                                        <br><p class="card-text">+91 8427789929</p>
                                       <!-- <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-google"></i>
                                            </a>
                                            </li>
                                        </ul>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./Team member -->
                <!-- Team member -->
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="Pictures/img2.jpg" alt="card image"></p>
                                        <h4 class="card-title">Hemank Sethi</h4>
                                        <p class="card-text">His Idea made this site possible.With his good presentation skills we look forward in spreading our idea.</p>
                                        <!--<a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>-->
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">Contact Info:</h4>
                                        <br><p></p>
                                        <p class="card-text">+91 9896739096</p>
                                       <!-- <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-google"></i>
                                            </a>
                                            </li>-->
                                        <!--</ul>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./Team member -->
                <!-- Team member -->
            </div>
        </div>
        <center>
           <!-- <h3 style="color:#444547; margin-top: 100px; margin-bottom: -100px; font-size: 34px;" id="secContact">Reach Us</h3>-->
            
            <div class="row">
                <div class="col-xs-12 col-sm-12 c/ol-md-12 mt-2 mt-sm-5">

                    <!--<img src="Photos/Logo.png" alt="Logo" class="center" style="margin-top: -170px; ">-->
                    <h3 style="color:white;  margin-top: -10px;">LawyersConnect</h3>
                    <ul class="list-unstyled list-inline social text-center" style="margin-top: 20px;">
                        <li class="list-inline-item"><a href="https://m.facebook.com/Lawyers-Connect-369107183840841/?ref=bookmarks"><i class="fa fa-facebook"></i></a></li>
                        <!--<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>-->
                        <li class="list-inline-item"><a href="https://www.instagram.com/connectlawyers"><i class="fa fa-instagram"></i></a></li>
                        <!--<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>-->
                    </ul>
                </div>

            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">

                    <p class="h6">&copy All right Reserved.<a class="text-green ml-2"  target="_blank">LawyersConnect</a></p>
                </div>

            </div>
        </center>
    </section>
    
   <!-- <div class="col-md-7" id="btn">
        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal" id="signup" name="signup">Sign Up</button><i>or</i>
        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#example2Modal" id="login" name="login">Login</button>

    </div>-->

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                </div>
                <div class="modal-body">
                    <form action="signup-process.php" id="frm">
                        <div class="form-group">
                            <label for="formGroupExampleInput">User ID</label><span class="text-danger" id="res">*</span>
                            <div id="waitt"><img src="Pictures/loading.gif"></div>
                            <input type="text" class="form-control" id="uid" name="uid" placeholder="Enter User ID" required>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput" >Password</label>                            <span class="text-danger" id="res">*</span>

                            <input type="password" class="form-control" id="pwd" name="pwd" placeholder=" Enter Password" onkeyup="chkPassword(this.value,errPwd);" required><div id="errPwd"></div>
                        </div>
                         <div class="form-group">
                            <label for="formGroupExampleInput">Mobile No.</label>                            <span class="text-danger" id="res">*</span>

                            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile No." onkeyup="chkMobile(this.value,errMob);" required><div id="errMob"></div>
                        </div>
                         <div>
                            <input type="radio" id="rd" name="rd"  value="client">Client
                            <input type="radio" id="rd" name="rd"  value="lawyer">Lawyer
                        </div>
                        <center><span id="result" class="text-primary"></span></center>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="ajaxSave" name="ajaxSave">Sign Up</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="example2Modal" tabindex="-1" role="dialog" aria-labelledby="example2ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="example2ModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                </div>
                <div class="modal-body">
                    <form method="get" id="frm2">
                        <div class="form-group">
                            <label for="formGroupExampleInput">User id</label><span class="text-danger" id="res">*</span>
                            <div id="waitt"><img src="Pictures/loading.gif"></div>
                            <input type="text" class="form-control" id="luid" name="luid" placeholder="User id" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Password</label><span class="text-danger" id="res">*</span>
                            <input type="password" class="form-control" id="lpwd" name="lpwd" placeholder="Password" required>
                        </div>
                        <div id="inv" name="inv"></div>
                        <center><span id="result" class="text-primary"></span></center>
        
                        <div class="modal-footer bg-dark">
                            <center>
                                <button type="button" class="btn bg-white" name="btnl" id="btnl">Login</button>
                                <!--<button type="button" class="btn bg-secondary" name="btn" value="forgot">Forgot Password</button>-->
                            </center>
                        </div>
                        <div id="inv" name="inv"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
