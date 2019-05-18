<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <style>
            body{
                color: white;
                background: rgba(2, 1, 0, .5);
            }
        </style>
    </head>
<body onload="assess();">
    <?php
    error_reporting(E_ALL); // or E_STRICT
    ini_set("display_errors",1);
    ini_set("memory_limit","3000M");
    
    $uniqueId = "1557380441-927466603";
    
    
?>
    <br>
    <div id="analysis">Assessing images in folder <?php echo $uniqueId; ?> ...</div>
    <script>
        function assess(){
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("analysis").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "analyze.php?folder=<?php echo($uniqueId);?>", true);
            xhttp.send();
        }
    </script>
        </body>

</html>

