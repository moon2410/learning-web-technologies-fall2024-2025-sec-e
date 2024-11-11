<?php

$std =[10, 35, 40, 60, 80 ];
$search=100;
$found=false;

for($i=0; $i<count($std); $i++ ){
    if($search==$std[$i]){

        print($search.' Exist');
        $found=true;
        break;
    }
    
} 

if(!$found=false){
    print($search. ' Not Exist');
}



?>