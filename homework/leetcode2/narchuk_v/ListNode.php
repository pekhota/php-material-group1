<?php


class ListNode
{
    public int $val;
    public ListNode $next;

    function __construct(int $val = 0, ListNode $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }
}