<?php
class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
       
$reverse = strrev($x);

if($x === $reverse){
return true;
}
else{
return false;
}
    
    }
}
?>
