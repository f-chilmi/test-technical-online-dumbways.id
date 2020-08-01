<?php

function pascal_function($val){
    
    for ($y = 1; $y <= $val; $y ++){
        for ($x = 1; $x <= $y; $x ++){
          if($x == 1){
            print_r ($number[$y][$x] = 1); // start with 1
            
          }elseif($x == $y){
            print_r ($number[$y][$x] = 1); // end with 1
          }else{
            print_r ($number[$y][$x] = $number[$y-1][$x-1] + $number[$y-1][$x]);
          }
        			
        } 
        echo " <br> ";
      }
    }
pascal_function(5);

?>