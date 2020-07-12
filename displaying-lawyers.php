<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script type="text/javascript" src="JS/angular.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Bootstrap/Css/bootstrap.css">
    <script src="Bootstrap/JS/jquery-1.9.1.js"></script>
    <!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>-->
    <script src="Bootstrap/JS/bootstrap.js"></script>
    <script type="text/javascript">
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
    
        <!--Filter:<input type="text" ng-model="hint">-->
        
           <p>
            <input type="button" ng-click="doFetchJson();" value="fetch json from table">
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
   
<!--
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

</div>
-->
</body>
    <hr>

</html>
