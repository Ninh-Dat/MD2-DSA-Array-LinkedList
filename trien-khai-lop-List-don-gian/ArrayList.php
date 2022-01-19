<?php

class ArrayList
{
  private array $ArrayList;

    public function __construct($arr=" ")
    {

        if (is_array($arr)){
            $this->ArrayList = $arr;
        }
        else{
            $this->ArrayList=[];
        }


    }
    //thêm một phần tử vào danh sách
    public function add($obj){
        $this->ArrayList[] = $obj;
    }

    //

    public function get($index){
        if ($this->isInteger($index) && $index < $this->size()){
            return $this->ArrayList[$index];
        }
        else{
            die("Error in ArrayList.get");
        }
    }

    //Loại bỏ phần tử ở vị trí đã chỉ định trong danh sách này.
    public function remove($index){
        if ($this->isInteger($index)){
            $newArrayList=[];
            for ($i = 0; $i < $this->size(); $i++) {
                if ($index != $i) $newArrayList[] = $this->get($i);
            }

            $this->ArrayList = $newArrayList;
        } else {
            die("ERROR in ArrayList.remove <br> Integer value required");
        }
        }


    public function size()
    {
        return count($this->ArrayList);
    }

    public function isInteger($toCheck)
    {
        return preg_match("/^[0-9]+$/", $toCheck);
    }

}