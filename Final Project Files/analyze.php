<!DOCTYPE html>

<!--
    Name: Andrew Murphy
    Pawprint: ajmfpn
    Date: 0/0/2019
    Challenge 0:
-->

<html lang="en">
    <head>
        <meta charset="utf-8">
        
        <title>  </title>
        
        <!-- css --> 
        <style>
            /* css comment */
            body{
                color: white;
                background: rgba(2, 1, 0, .5);
            }
        </style>
        
        </head>
    
    <body>
        <?php
        
        error_reporting(E_ALL); // or E_STRICT
    ini_set("display_errors",1);
    ini_set("memory_limit","3000M");
        
        
        $old = getcwd();
        chdir('image-quality-assessment');
        

            $folder = $_GET["folder"];
            
        exec('sudo ./predict  --docker-image nima-cpu --base-model-name MobileNet --weights-file $(pwd)/models/MobileNet/weights_mobilenet_technical_0.11.hdf5 --image-source /var/www/html/uploads/'. $folder, $output, $return);
        
        $outputString = implode(" ",$output);    
            
        echo "Technical: ". implode("<br>",$output) . " return: ". $return;
        
        chdir($old);
        
        
        chdir('uploads/'.$folder);
            
        $myfile = fopen("techScore.txt", "w") or die("Failed to write score");
        fwrite($myfile, implode("\n",$output));
        fclose($myfile);
        
        chdir($old);
        
        //weights_mobilenet_aesthetic_0.07.hdf5
        
        
        chdir('image-quality-assessment');
        

        $folder = $_GET["folder"];
            
        exec('sudo ./predict  --docker-image nima-cpu --base-model-name MobileNet --weights-file $(pwd)/models/MobileNet/weights_mobilenet_aesthetic_0.07.hdf5 --image-source /var/www/html/uploads/'. $folder, $output2, $return);
        
        $outputString = implode(" ",$output2);    
            
        echo "<br> Aesthetic Score: ". implode("<br>",$output2) . " return: ". $return;
        
        chdir($old);
        
        
        chdir('uploads/'.$folder);
            
        $myfile = fopen("aesthScore.txt", "w") or die("Failed to write score");
        fwrite($myfile, implode("\n",$output2));
        fclose($myfile);
        
        chdir($old);
        
    
?>
        
        
    </body>
</html>