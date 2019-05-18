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
<body>
    <?php
    error_reporting(E_ALL); // or E_STRICT
    ini_set("display_errors",1);
    ini_set("memory_limit","1024M");


    extract($_POST);
    $error=array();
    $extension=array("jpeg","jpg","png","gif");
    foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name) {
        $file_name=$_FILES["files"]["name"][$key];
        $file_tmp=$_FILES["files"]["tmp_name"][$key];
        $ext=pathinfo($file_name,PATHINFO_EXTENSION);
        
        if(in_array($ext,$extension)) {
            if(!file_exists("uploads/".$file_name)) {
                if(move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"uploads/".$file_name)){
                    echo"Uploading ".$file_name." was successful 1<br>";
                    /* echo"Score: ". analyze($file_name) . "<br><br>";*/
                }
                else{
                    echo"Failed Upload 1<br>";
                }
            }
            else {
                $filename=basename($file_name,$ext);
                $newFileName=$filename.time().".".$ext;
               if( move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"uploads/".$newFileName)){
                   echo"Upload was successful 2<br>";
                   /* echo"Score: ". analyze($file_name) . "<br><br>";*/
               }else{
                   echo"Failed Upload 2<br>";
               }
            }
        }
        else {
            array_push($error,"$file_name, ");
        }
    }
    

    function analyze($name){
        $old = getcwd();
        chdir('image-quality-assessment');
        

        exec('sudo ./predict  --docker-image nima-cpu --base-model-name MobileNet --weights-file $(pwd)/models/MobileNet/weights_mobilenet_technical_0.11.hdf5 --image-source /var/www/html/uploads/'. $name, $output, $return);
        echo "<br> cd: ". implode(" ",$output) . " return: ". $return;
        
        chdir($old);
        

    }
?>
        </body>

</html>

