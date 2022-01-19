<?php

class MyList
{
    public $size;
    public array $elements;

    public function __construct($size)
    {
        $this->elements = [];
        $this->size = $size;
    }

    //chèn phần tử vào trobg mảng

    public function insert($index, $obj)
    {
        $this->elements[$index]= $obj;
    }


}