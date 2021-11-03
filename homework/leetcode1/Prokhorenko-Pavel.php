<?php 

declare(strict_types=1);

function isPalindrome(int $x): bool {     
      
    $sx = strval($x);
    $sxLenth = strlen($sx) -1 ;
    $f = 0;  

    for ( ;$sxLenth - $f > 0 && $sxLenth - $f > $f; ) { 

        if($sx[$f] !== $sx[$sxLenth - $f]){
           
            return false;

        }     

        $f++;

    } 


    return true;
    
}




 

