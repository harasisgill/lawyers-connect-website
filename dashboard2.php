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

<body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="index.php">
    <img src="Pictures/advLogo.png" width="30" height="35" class="d-inline-block align-top" alt="">
    Lawyers Connect
  </a><form action="logout.php">
      <input type="submit" value="Logout" class="bg-dark" style="color:white">
    </form>
    </nav><br>
    <div class="container">
        <div class="card-deck" style="width:500px;margin-left:330px">
            <div class="card"><a href="client2.php">
                <img class="card-img-top" src="Pictures/handshake.jpg" alt="Card image cap" style="width:300px;margin-left:80px"></a>
                <div class="card-body">
                    <h5 class="card-title">Search Lawyers</h5>
                    <p class="card-text">Get the best lawyers here. Search for the right lawyer according to your case.</p>
                   <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>-->
                </div>
            </div>
           <!-- <div class="card"><a href="client.php">
                <img class="card-img-top"  src="Pictures/question-mark-temporary-tattoo-jb.jpg" style="width:300px;margin-left:130px;height:300px" alt="Card image cap"></a>
                <div class="card-body">
                    <h5 class="card-title">Queries</h5>
                    <p class="card-text">Let the lawyers reach you on the basis of case's description that you will provide. </p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>-->
        </div>

    </div>
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
</body>

</html>
