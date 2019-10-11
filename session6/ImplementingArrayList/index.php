<?php
include_once "MyList.php";
include_once "MyListTest.php";
$mylist = new MyListTest(array());
$mylist->add(10,1);
$mylist->add(17,2);
echo $mylist->get(2);