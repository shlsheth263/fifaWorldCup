<?php
    session_start();
?>
<!DOCTYPE <!DOCTYPE html>
<html>
<meta charset="UTF-8">  
<head>        
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>    
    <link rel="stylesheet" type="text/css" href="css/players.css">
    <link rel="stylesheet" type="text/css" href="css/teams.css">
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" />      
    <link rel="stylesheet" href="css/navbar.css">
    <script>
        var app=angular.module("root",[]);
        app.controller("ctrl",["$scope",function($scope){ 
            $scope.username="<?php if(COUNT($_SESSION)!=0)echo $_SESSION['username'];?>";                                       
        }])
    </script>        
    <script src="js/display_table.js"></script>    
    <script src="js/navbar.js"></script>
</head>
<body ng-app="root" ng-controller="ctrl">  
    <navbar active="#teams" username="username"></navbar>  
    <div class="container" style="margin-top:3em;margin-bottom:3em">
        <h1 class="display-4" style="border-bottom: 1px solid black;padding:0.4em;">All Teams</h1>
    </div>                
    <display-table tablename="'team'" type="teams"></display-table>
</body>
</html>