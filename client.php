<?php
/*
session_start();
if(isset($_SESSION["uid"])==false)
{
    header("location:index.php");
}
*/


?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Bootstrap/Css/bootstrap.css">

    <title>Lawyers Base</title>
    <link rel="shortcut icon" href="PICS/advocate.jpg">
    <style>
        b {
            color:black;
            font-family: hemank;
        }

        #BB {
            margin-top: 48px;
            margin-left: 180px;
            box-shadow: 5px -5px 30px black;
            border: 1px black solid;
            width: 430px;
            height: 492px;
        }

        body {
            background-image: url(Pictures/Backgrounds-03.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }

        #SU {

            color: black;
            margin-left: 47px;
            margin-top: 15px;
            width:300px;
            font-weight:bold;
            
        }

    </style>
    <script type="text/javascript" src="JS/angular.min.js"></script>
 <link rel="stylesheet" href="Bootstrap/Css/bootstrap.css">
 <script src="Bootstrap/JS/jquery-1.9.1.js"></script>
<script src="Bootstrap/JS/bootstrap.js"></script>
    <script src="JS/jquery-1.9.1.js"></script>
<!--    <script src="JS/jquery-1.9.1.js"></script>-->
    <script type="text/javascript">
        $(document).ready(function() {
                $("#subc").click(function() {
                    $a = $("#frm2").serialize();
                    $url = "client-process.php?" + $a;
                    //$url="json-fetch-all.php?"+a;
                    $.get($url, function(response) {
                        alert(response);
                    });

                });
            $("#search").click(function() {
                    $b = $("#frm2").serialize();
                    //$url = "client-process.php?" + $a;
                    $url="json-fetch-all.php?"+a;
                   // $.get($url, function(response) {
                      //  alert(response);
                 //   });

                });

        });
        
          var myapp = angular.module("app", []);
        myapp.controller("mycontroller", function($scope, $http) {
       
            $scope.doFetchJson = function() {
                $http.get("json-fetch-all.php").then(shanti, noshanti);
                    
                function shanti(jsonArray) {
                    //alert(JSON.stringify(response.data));
                    $scope.json = jsonArray.data;
                    
                }

                function noshanti(jsonArray) {
                    alert(jsonArray.data);
                }

            }
                        
        });
    </script>
</head>

<body ng-app="app" ng-controller="mycontroller">
   <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="index.php">
    <img src="Pictures/advLogo.png" width="30" height="35" class="d-inline-block align-top" alt="">
    Lawyers Connect
  </a><form action="logout.php">
      <input type="submit" value="Logout" class="bg-dark" style="color:white">
    </form>
    </nav>
    <div class="container" id="BB">
        <div class="col-md-4">
            <h1><label id="SU">Fill in details</label></h1>
        </div><br>

        <form id="frm2">

            <div style="margin-left:28px;">
                <label><b>Type of Lawyer:</b></label>

    

                <select id="col" name="col" style="border:1px black solid;margin-left:15px">
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
                
            </div>
            <div id="SUcf" style="margin-left:28px;"></div><br>
            <div style="margin-left:28px;">
                <label><b>Mobile No:</b></label>
                <input type="text" id="mb" name="mb" required style="margin-left:47px; border-radius: 5px 5px 5px 5px;;border: 1px black solid">
            </div><br>
            <div style="margin-left:28px;">
                <label><b>E-mail:</b></label>
                <input type="text" id="email" name="email" required style=" margin-left: 76px; border-radius: 5px 5px 5px 5px;border: 1px black solid">
            </div><br>
            <div style="margin-left:28px;">
                <label><b>Details of Case:</b></label>
                <input type="text" id="doc" name="doc" required style="height:100px; margin-left: 17px; border-radius: 5px 5px 5px 5px;border: 1px black solid" >
            </div>
            <div id="was"></div><br><br>
            <div>
                <input type="button" id="subc" name="subc" required  value="Submit" style=" cursor:pointer; margin-left: 208px; background-color: black;color: white;width: 80px;height: 30px;box-shadow: 5px 5px 10px black">
            </div>


        </form>
    </div>
        <!--Filter:<input type="text" ng-model="hint">-->

           <p>
            <input type="button" name="search" id="search" ng-click="doFetchJson();" value="fetch json from table">
        </p>
        <table width="650" border=1>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Contact Number</th>
                <th>E-mail</th>
                <th>Experience(in years)</th>
            </tr>
           <tr ng-repeat="record in json | filter:hint">
                <td>{{record.name}}</td>
                <td>{{record.oadd}}</td>
                <td>{{record.cno}}</td>
                <td>{{record.email}}</td>
                <td>{{record.exp}}</td>
                <th>
                    </th>
            </tr>
        </table>
   

<div class="container">
    <div class="row">
    
        <div class="col-md-3" ng-repeat="record in json| filter:hint">
        <div class="card" >
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{record.uid}}</h5>
                <p class="card-text">
                    <p>{{record.pwd}}</p>
                    <p>{{record.mobile}}</p>
                </p>
                <input type="button"  ng-click="doSms(record.mobile,record.pwd);" class="btn btn-primary" value="Send SMS">
            </div>
        </div>
       </div>
    </div>

</body>

</html>
