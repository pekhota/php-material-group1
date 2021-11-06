<?php

declare(strict_types=1);

 class ListNode {
    public $val = 0;
    public $next = null;
    function __construct($val = 0, $next = null) {
       $this->val = $val;
     $this->next = $next;
    }
  }
 

 class Solution {

    function addTwoNumbers(ListNode $l1, ListNode $l2): ListNode {
        $lres = new ListNode(0);   
        $curr = $lres;
        $sum = 0;
        
           while ($l1 != null || $l2 != null) {
              
            $x = 0;
            $y = 0;
               
            if($l1 !== null) $x = $l1->val;
            if($l2 !== null) $y = $l2->val;
                 
             $sum = $sum + $x + $y;
                         
            $curr->next = new ListNode($sum % 10);
            $sum = intval($sum/10);
            $curr = $curr->next;
                if ($l2 !== null) $l2 = $l2->next;
                if ($l1 !== null) $l1 = $l1->next;
               
            }
        
            if ($sum > 0) {
            $curr->next = new ListNode($sum);
            }
        
        return $lres->next;
    }
  
}

function show(ListNode $l){

    while($l !== null){
        echo $l->val;
        $l = $l->next;
    }

}


$l1 = new ListNode(2);
$l1->next = new ListNode(4);
$l1->next->next = new ListNode(3);

$l2 = new ListNode(5);
$l2->next = new ListNode(6);
$l2->next->next = new ListNode(4);

$s = new Solution();

show($s->addTwoNumbers($l1,$l2));


