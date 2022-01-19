
<?php
include_once "ArrayList.php";

$array = new ArrayList();
 $array->add(1);
 $array->add(2);
 $array->add(3);


echo "Phần tử của mảng tại vị trí= ". $array->get(2);
echo "<br>";
echo $array->remove(1);