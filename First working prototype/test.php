<?php
        
        error_reporting(E_ALL); // or E_STRICT
        ini_set("display_errors",1);
        ini_set("memory_limit","1024M");
        
        if(chdir('image-quality-assessment')){
            echo"changed to";
        }else{
            echo "change failed ";
        }
        echo " ". getcwd();

        exec('./test.sh', $output, $return);
        echo "<br> cd: ". implode(" ",$output) . " return: ". $return ;
	echo exec('whoami');
?>
