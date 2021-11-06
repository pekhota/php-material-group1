<?php

declare(strict_types=1);

 class ListNode 
 {
    public $val = 0;
    public $next = null;

    function __construct($val = 0, $next = null) 
    {
        $this->val = $val;
        $this->next = $next;
    }
}

function addTwoNumbers(ListNode $l1, ListNode $l2) 
{
    $result = new ListNode(0);
    $temp = $result;

    $sum = 0;

    while ($l1 != null || $l2 != null)
    {
        $x = ($l1 != null) ? $l1->val : 0;
        $y = ($l2 != null) ? $l2->val : 0;

        $sum += $x + $y;

        $temp->next = new ListNode($sum % 10);

        $sum = intval($sum / 10);
        $temp = $temp->next;
        
        if ($l1 !== null)
            $l1 = $l1->next;

        if ($l2 !== null)
            $l2 = $l2->next;
    }  

    if ($sum > 0)
        $temp->next = new ListNode($sum);

        return $result->next;
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