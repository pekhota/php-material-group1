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

    function addTwoNumbers($l1, $l2) {
    $list = new ListNode(0);
    $curr = $list;
    $carry = 0;
        while ($l1 != null || $l2 != null) {
            if($l1 != null) $x = $l1->val;
            if($l2 != null) $y = $l2->val;
                $sum = $carry + $x + $y;
                $carry = intval($sum / 10);
                $curr->next = new ListNode($sum % 10);
                $curr = $curr->next;
            if ($l1 != null) $l1 = $l1->next;
            if ($l2 != null) $l2 = $l2->next;
            }
            if ($carry > 0) {
                $curr->next = new ListNode($carry);
            }
    return $list->next;
    }
function show(ListNode $ln)
{
    printf("\$ln: ");

    while($ln !== null)
    {
        printf("%d", $ln->val);
        $ln = $ln->next;
    }
}

$l1 = new ListNode(2);
$l1->next = new ListNode(4);
$l1->next->next = new ListNode(3);

$l2 = new ListNode(5);
$l2->next = new ListNode(6);
$l2->next->next = new ListNode(4);

show(addTwoNumbers($l1, $l2));
