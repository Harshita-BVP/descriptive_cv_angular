<?php 
/* 
 * Created on:  12-July-2017 | 16:23
 * Author:      Harshita
 * Place:       Gurgaon
 */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Introduction</title>
        <style type="text/css">
            .cv-body{
                background-color: darkcyan;
            }
            
            .cv-heading1{
                font: 200px fantasy;
                color: white;
                text-align: center;
                
            }
        </style>
        <script src="<?php echo __DIR__; ?>/external/jQuery/jquery-3.2.1.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    </head>
    <body class="cv-body" onload="cv_animation_underline()">
        <div id="introduction" ng-app="introduction">
            <div class="cv-heading1"> ILLUSTRATED <span id="heading_animation"> STORY </span> </div>
        </div>
        <div class="glyphicon glyphicon-circle-arrow-down"></div>
    </body>
    
    <script text="text/javascript">
        function cv_animation_underline(){
            document.getElementById("heading_animation").style.color = "red";
            document.getElementById("heading_animation").style.transition = "all 5s";
        }
    </script>
</html>