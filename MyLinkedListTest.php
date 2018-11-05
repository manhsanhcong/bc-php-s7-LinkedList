<?php
/**
 * Created by PhpStorm.
 * User: hoanltm
 * Date: 05/11/2018
 * Time: 08:22
 */


include 'MyLinkedList.php';

$linkedList = new MyLinkedList();
$linkedList->addFirst(1);
$linkedList->addFirst(2);
$linkedList->addLast(5);
$linkedList->addLast(9);
$linkedList->addIndex(2, 8);

echo implode('-', $linkedList->printList()) . '<br>';

echo $linkedList->contains(9) . '<br>';

echo $linkedList->indexOf(18) . '<br>';

$linkedList->reverse();
echo implode('-', $linkedList->printList()) . '<br>';
