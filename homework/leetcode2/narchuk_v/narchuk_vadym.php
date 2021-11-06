<?php


declare(strict_types=1);
/**
 * @param ListNode $l1
 * @param ListNode $l2
 * @return ListNode
 */
function addTwoNumbers(ListNode $l1, ListNode $l2): ListNode
{
    $newNode = new ListNode(0);
    $left = $l1;
    $right = $l2;
    $iter = $newNode;
    $mem = 0;
    while ($left != null || $right != null) {
        $x = ($left != null) ? $left->val : 0;
        $y = ($right != null) ? $right->val : 0;

        $sum = $mem + $x + $y;

        $mem = (int)($sum / 10);

        $iter->next = new ListNode($sum % 10);
        $iter = $iter->next;

        if ($left != null) $left = $left->next;
        if ($right != null) $right = $right->next;
    }
    if ($mem > 0) {
        $iter->next = new ListNode($mem);
    }
    return $newNode->next;
}


