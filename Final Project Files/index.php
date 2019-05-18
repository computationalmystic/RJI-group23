<!DOCTYPE html>

<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <title>Group23</title>
        
        <!--  Background CSS -->
        <link href='https://fonts.googleapis.com/css?family=Raleway:200,400,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel='stylesheet' href="css/demo.css">
        <link rel="stylesheet" href="css/style.css">
        
        <style>
            /* css comment */
            body{
                
            }
            
            h1{
                float: left;
                margin: 0px;
                padding: 0px;
            }
            
            img{
                width: 150px;
                height: 150px;
                float: left;
                
                margin: 1%;
            }
            
            button{
                color: white;
                background: rgba(2, 1, 0, .5);
                padding: 15px;
                width: 98%;
            }
            
            .headerTile{
                margin: 15px 15px;
                float: left;
            }
            
            .tile{
                float: left;
                margin: 5px;
                padding: 5px;
                width: 32%;
                height: 15%;
                
                min-height: 170px;
                min-width: 300px;
                max-width: 320px;
                
                background: rgba(2, 1, 0, .5);
                border: 1px solid darkgray;
                border-radius: 8px;
               overflow:hidden;
            }
            
            .tile:hover{
                background: rgba(85, 1, 145, .4);
            }
            
            .desc{
                text-overflow: clip;
                width: 45%;
                float: right;
            }
            
            #header{
                margin: 5px auto;
                padding: 5px 10px;
                background: rgba(85, 1, 145, .4);
                border: 1px solid darkgray;
                border-radius: 8px;
                width: 95%;
                height: 55px;
            }
            
            #container{
                position: absolute;
                left: 0px;
                top: 0px;
                padding: 0px;
                
                
                width: 100%;
                height: 100%;
            }
            
            #main{
                margin: 30px auto;
                padding: 0px 0px;
                background: rgba(2, 1, 0, .2);
                border: 1px solid darkgray;
                border-radius: 8px;
                width: 94%;
                height: 90%;
            }
            
            #left{
                height: 100%;
                width: 18%;
                background: rgba(46, 15, 250, .2);
                margin: 0px 0px;
                padding: 15px;
                
                border: 1px solid darkgray;
                border-radius: 8px;
                
                overflow: hidden;
                float: left;
            }
            
            #right{
                height: 100%;
                width: 82%;
                margin: 0px 18%;
                
                border: 1px solid darkgray;
                border-radius: 8px;
            }
            
            #taskbar{
                height: 5%;
                width: 100%;
                background: rgba(191, 1, 1, .2);
                border: 1px solid darkgray;
                border-radius: 8px;
                min-height: 55px;
            }
            
            #search{
                float: right;
                padding: 10px;
                margin: 8px;
                color: white;
                background: rgba(2, 1, 0, .5);
                border: 1px solid darkgray;
            }
            
            #header a{
                color: white;
                padding: 10px;
                background: rgba(2, 1, 0, .5);
                border: 1px solid darkgray;
                border-radius: 8px;
                float: right;
            }
            
            #header a:hover{
                background: rgba(85, 1, 145, .4);
            }
            
            #view{
                height: 95%;
                width: 100%;
                border: 1px solid darkgray;
                border-radius: 8px;
                padding: 10px;
                
                overflow: scroll;
            }
            
            #myForm{
                visibility: hidden;
            }
            
            #sort{
                float: right;
                margin-top: 8px;
                padding: 10px;
                
                color: lightgray;
                background: rgba(2, 1, 0, .5);
                border: 1px solid darkgray;
            }
 
            #upload #upload2{
                visibility: hidden;
                position: absolute;
                width: 80%;
                height: 80%;
                left: 10%;
                top: 10%;
            }
            
            #upload2{
                background: rgba(2, 1, 0, .8);
                border: 1px solid darkgray;
                border-radius: 8px;
            }
            
            .close{
                visibility: hidden;
                position: absolute;
                background: rgba(191, 1, 1, .2);
                padding: 9px;
                left: 85%;
                top: 10%;
                border: 1px solid darkgray;
                border-radius: 8px;
                color:white;
            }
            
            #about{
                visibility: hidden;
                background: rgba(2, 1, 0, .8);
                border: 1px solid darkgray;
                border-radius: 8px;
                
                position: absolute;
                width: 80%;
                height: 80%;
                left: 10%;
                top: 10%;
                color: white;
                padding: 25px;
            }
            
            #directory{
                overflow: scroll;
                height:100%;
            }
            
            a:link{
                color:white;
                text-decoration: none;
            }

            a:visited {
                color: white;
                text-decoration: none;  
            }
            
            
            /* width */
            ::-webkit-scrollbar {
                width: 4px;
            }

            /* Track */
            ::-webkit-scrollbar-track {
                border-color: rgba(2, 1, 0, .0);
            }

            /* Handle */
            ::-webkit-scrollbar-thumb {
                background: darkblue; 
                border-radius: 10px;
            }
            
            #tiles{
                height: 100%;
                width : 100%;
                margin: 0px;
                padding: 0px;
            }
            
            #close2{
                visibility: hidden;
                position: absolute;
                background: rgba(191, 1, 1, .2);
                padding: 9px;
                left: 94%;
                top: 0%;
                border: 1px solid darkgray;
                border-radius: 8px;
                color:white;
            }
            
            
            
        </style>
  
    </head>

    <body>

        <div id="large-header" class="large-header">
            <canvas id="demo-canvas"></canvas>
            <div class="main-title" id="container"> 
                <div id="header">
                    <h1>Group 23</h1> <div class="headerTile">RJI Project</div>
                    <a onclick="openAbout();">About</a>
                    <!--<a href="#contact">Contact</a>
                    <a href="#Login">Login</a>-->
                </div>
                
                <div id="main">
                    <div id="left">
                        <button class="open-button" onclick="openForm();">Upload Images...</button>
                        <div id="directory">
                            <br>Directory: <br>
                            (Shift+Scroll to scroll sideways)<br>
                            <ul>
                                <li>Uploads
                                    <ul>
                                        <?php
                                        error_reporting(E_ALL); // or E_STRICT
                                        ini_set("display_errors",1);
                                        ini_set("memory_limit","1024M");
                                        //path to directory to scan. i have included a wildcard for a subdirectory
                                        $directory = "uploads/*/";
 
                                        //get all image files with a .jpg extension.
                                        $images = glob("" . $directory . "*.jpg");
 
                                        $imgs = '';
                                        // create array
                                        foreach($images as $image){ $imgs[] = "$image"; }
 
                                        //display images
                                        foreach ($imgs as $img) {
                                            $temp = substr($img, strpos($img, "/") + 1);
                                            $temp2 = substr($temp, strpos($temp, "/") + 1); 
                                            echo "<li>'$temp2' </li> ";
                                        }
                                        ?> 
                                    </ul>  
                                </li>
                            </ul>  
                            
                        </div>
                        
                    </div>
                    
                    <div id="right">
                        
                        <div id="taskbar"> 
                            <div id="spacer"></div>
                            <input type="text" placeholder="Search File Name.." id="search" onkeyup="searchMe()">
                            <select id="sort" onChange="searchMe();">
                                <option>A to Z</option>
                                <option>Z to A</option>
                                <option>Technical Score Asc.</option>
                                <option>Technical Score Desc.</option>
                                <option>Aesthetic Score Asc.</option>
                                <option>Aesthetic Score Desc.</option>
                        </select>
                        </div>
                        
                        <div id="view">
                            <ul id="tiles">
                            
                                 
<?php
                            foreach ($imgs as $img) {    
                                $temps = explode("/", $img);
                                $folder = $temps[0]."/".$temps[1];
                                
                                //open Technical score file
                                $myfile = fopen($folder."/"."techScore.txt", "r") or die("Unable to open file!");
                                $tech = fread($myfile,filesize($folder."/"."techScore.txt"));
                                fclose($myfile);
                                //get json file
                                $tech = substr($tech, strpos($tech, "[") + 1);
                                $tech = substr($tech, strpos($tech, "["));
                                $tech = json_decode($tech, true);
                                //find score for each file
                                $techScore = "failed";
                                $file = explode(".", $temps[2]);
                                $file = $file[0];
                                foreach ($tech as $ar) {
                                    if ($ar['image_id'] == $file){
                                        $techScore = $ar['mean_score_prediction'];
                                    }
                                }
                                
                                
                                //open Aesthetic score file
                                $myfile = fopen($folder."/"."aesthScore.txt", "r") or die("Unable to open file!");
                                $aesth = fread($myfile,filesize($folder."/"."aesthScore.txt"));
                                fclose($myfile);
                                //get json file
                                $aesth = substr($aesth, strpos($aesth, "[") + 1);
                                $aesth = substr($aesth, strpos($aesth, "["));
                                $aesth = json_decode($aesth, true);
                                //find score for each file
                                $aesthScore = "failed";
                                $file = explode(".", $temps[2]);
                                $file = $file[0];
                                foreach ($aesth as $ar) {
                                    if ($ar['image_id'] == $file){
                                        $aesthScore = $ar['mean_score_prediction'];
                                    }
                                }
                                
                                echo "
                                <li class=\"tile\" id=".$temps[2]." data-tech=\"".$techScore."\" data-aesth=\"".$techScore."\">
                                <img src='$img' alt=\"test\"/>
                                <div class=\"desc\">
                                    Name: ".$temps[2]."<br>
                                    <br>
                                    Technical: ".round($techScore, 2)."<br>
                                    Aesthetic: ".round($aesthScore, 2)."<br>
                                    
                                </div>
                            </li> ";
}
?> 
                            </ul>
                        </div>
                        
                    </div>

                </div>
            </div>
            <div id="upload"> 
                <iframe id = "upload2" src="upload.html"></iframe>
                <div id ="close" class="close" onclick="openForm()"> <a href="#about" >Close</a></div>
            </div>
            
            <div id="about"> 
                
                    <h1>RJI-group23</h1><br><br>
                <h3>Group Members: Eric Lin, Andrew Murphy, Elita Nelson
<br><br>
This program provides a user interface for users to upload and assess the quality of photos. The stakeholder is the Renoylds Journalism Institute, which has an abundance of images and needs a way to sort through and narrow down those options. Idealo image quality assessment program is used to give photos scores based on their technical and aesthetic qualities. Users, primarily photographers and journalists, are able to login, upload photos, and view other photos and their scores.
<br>
                </h3>
                <div id ="close2" class="close" onclick="openAbout()"> <a href="#about" >Close</a></div>
            </div>
        </div>
        <script>
            
            var aboutInt = 0;
            function openAbout(){
                 if(aboutInt==0){
                   aboutInt=1;
                   document.getElementById("about").style.visibility = "visible";
                     document.getElementById("close2").style.visibility = "visible";
                    
                }
                else{
                    aboutInt=0;
                    document.getElementById("about").style.visibility = "hidden";
                    document.getElementById("close2").style.visibility = "hidden";
                }
            }
            
            function searchMe() {
                // Declare variables
                var input, filter, ul, li, a, i, txtValue;
                input = document.getElementById('search');
                filter = input.value.toUpperCase();
                ul = document.getElementById("tiles");
                li = ul.getElementsByTagName('li');
                
                var attr = 'data-tech';
                var e = document.getElementById("sort").options[document.getElementById("sort").selectedIndex].value;
                
                if( e == "A to Z"){
                    sort(li, "alpha", 1);
                }
                else if(e == "Z to A"){
                    sort(li, "alpha", -1);
                }
                else if(e == "Technical Score Asc."){
                    sort(li, "data-tech", 1);
                }
                else if(e == "Technical Score Desc."){
                    sort(li, "data-tech", -1);
                }
                else if(e == "Aesthetic Score Asc."){
                    sort(li, "data-aesth", 1);
                }
                else if(e == "Aesthetic Score Desc."){
                    sort(li, "data-aesth", -1);
                }
                else{
                    sort(li, " ", 0);
                }
                

                // Loop through all list items, and hide those who don't match the search query
                for (i = 0; i < li.length; i++) {
                    a = li[i];
                    txtValue = a.id;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        li[i].style.display = "";
                    } else {
                        li[i].style.display = "none";
                    }
                }
            }
            
            function sort(li, attr, direct){
                var stores_li = li;
                if(attr == "alpha"){
                    attr = "id";
                }
                
                if(direct == 0){
                    return;
                }
                else if(direct == 1){
                    [].slice.call(stores_li).sort(function(a, b) {
                    var textA = a.getAttribute(attr).toLowerCase()
                    var textB = b.getAttribute(attr).toLowerCase()
                    return (textA < textB) ? -1 : (textA > textB) ? 1 : 0;
                    })
                        .forEach(function(el) {el.parentNode.appendChild(el)});
                }
                else if(direct == -1){
                    [].slice.call(stores_li).sort(function(a, b) {
                    var textA = a.getAttribute(attr).toLowerCase()
                    var textB = b.getAttribute(attr).toLowerCase()
                    return (textA < textB) ? 1 : (textA > textB) ? -1 : 0;
                    })
                        .forEach(function(el) {el.parentNode.appendChild(el)});
                }

                
            }
            
            
            var uploadInt = 0;
            function openForm() {
               if(uploadInt==0){
                   uploadInt=1;
                   document.getElementById("upload2").style.visibility = "visible";
                   document.getElementById("close").style.visibility = "visible";
                    document.getElementById('upload2').src="upload.html";
                    
                }
                else{
                    uploadInt=0;
                    document.getElementById("upload2").style.visibility = "hidden";
                    document.getElementById("close").style.visibility =  "hidden";
                }
            }
            
            function aboutPage(){
                
            }
        </script>
        
        
        <!--  Background JS -->
        <script src="js/EasePack.min.js"></script>
        <script src="js/rAF.js"></script>
        <script src="js/TweenLite.min.js"></script>
        <script  src="js/index.js"></script>
        
        

    </body>

</html>
