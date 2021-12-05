<?php

declare(strict_types=1);

////Example 1
$l1 = new ListNode(9);
$l1->next = new ListNode(9);
$l1->next->next = new ListNode(9);
$l1->next->next->next = new ListNode(9);
$l1->next->next->next->next = new ListNode(9);
$l1->next->next->next->next->next  = new ListNode(9);
$l1->next->next->next->next->next->next  = new ListNode(9);

$l2 = new ListNode(9);
$l2->next = new ListNode(9);
$l2->next->next = new ListNode(9);
$l2->next->next->next = new ListNode(9);
print_(add($l1, $l2),1);

////Example 2
$l1 = new ListNode(0);
$l2 = new ListNode(0);
print_(add($l1, $l2),2);

////Example 3
$l1 = new ListNode(2);
$l1->next = new ListNode(4);
$l1->next->next = new ListNode(3);

$l2 = new ListNode(5);
$l2->next = new ListNode(6);
$l2->next->next = new ListNode(4);
print_(add($l1, $l2),3);

function print_(ListNode $ln, int $count)
{
    printf("Example %d: ", $count);

    while($ln !== null)
    {
        printf("%d", $ln->temp);
        $ln = $ln->next;
    }
    printf("\n");
}

 class ListNode {
     public $count = 0;
     public $temp = 0;
     public $next = null;
     function __construct($temp = 0, $next = null, $count = 0) {
         $this->temp = $temp;
         $this->next = $next;
         $this->count = $count;
     }
 }

    function add($l1, $l2) {
    $list = new ListNode(0);
    $curr = $list;
    $carry = 0;
        while ($l1 != null || $l2 != null) {
            if($l1 != null) $x = $l1->temp;
            if($l2 != null) $y = $l2->temp;
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
