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
        <meta charset="utf-8">
        <title>Introduction</title>
        <link href="external/bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/default.css" rel="stylesheet">
    </head>
    <body class="cv-body" onload="cv_animation_underline()">
        <div id="landing">
            <div class="cv-heading1"> ILLUSTRATIVE <div id="heading_animation"> CV </div> </div>
            <a class="glyphicon glyphicon-circle-arrow-down gi-3x" id="down_arrow" href="#introduction"></a>
            
            <div id="introduction" class="introduction_content">
                <img src="images/harshita.png" width="250px" height="250px" style="float: right; border: 5px solid #eee; border-radius: 5px;"/>
                <h1 style="float: left;"> Ahoy<span class="glyphicon glyphicon-exclamation-sign"></span> &nbsp;&nbsp; I am Harshita. </h1> 
                <div style="clear: both;"></div>
                <br><br>
                I am a Full-Stack Developer. This website elaborates about my career, education and hobbies. You can navigate through all sections provided below.
                <br>
                Hope you like it.
            </div>
        </div>
        <nav>
            <ul class="nav nav-justified nav-link">
                <li><a>Hi, This is me. <span class="glyphicon glyphicon-queen"></span></a></li>
                <li><a>Work Road <span class="glyphicon glyphicon-road"></span></a></li>
                <li><a>Educational Qualifications <span class="glyphicon glyphicon-education"></span></a></li>
            </ul>
        </nav>
    </body>
    
    
    <script src="external/jQuery/jquery-3.2.1.js"></script>  
    <script src="external/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
    
    <script text="text/javascript">
        function cv_animation_underline(){
            document.getElementById("heading_animation").style.color = "red";
            document.getElementById("heading_animation").style.transition = "color 5s";
        }
    </script>
</html>