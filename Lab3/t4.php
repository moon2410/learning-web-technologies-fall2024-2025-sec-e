<?php

    $n1=10;
    $n2=15;
    $n3=100;

    Print('Numbers are '. $n1.' ' . $n2.' '. $n3.'<br>' );

    if($n1>=$n2 && $n1>=$n3){
        print('The largest number is '. $n1);
    }
    else if($n2>=$n1 && $n2>=$n3){
        print('The largest number is '.$n2);

    }
    else{
        print('The largest number is '.$n3);
    }
?>