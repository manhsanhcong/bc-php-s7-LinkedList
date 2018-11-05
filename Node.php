<?php
/**
 * Created by PhpStorm.
 * User: hoanltm
 * Date: 05/11/2018
 * Time: 08:16
 */

class Node
{
    public $data;
    public $next;

    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }

    public function getData()
    {
        return $this->data;
    }
}