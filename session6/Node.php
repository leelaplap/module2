<?php


class Node
{
    public $data;
    public $link;

    public function __construct($data, $link)
    {
        $this->data = $data;
        $this->link = $link;
    }
}


class ListNode
{
    public $firstNode;
    public $secondNode;

    public function __construct()
    {
        $this->firstNode =null;
        $this->secondNode =null;
    }

    public function insertFirst($data){
        $node = new Node($data, null);
        if ($this->firstNode == true){
            $this->secondNode = $this->firstNode;
            $node->link = $this->firstNode;
        }else{
            $this->firstNode = $node;
        }
    }
}