<?php
$num=[1,33,65,88,888];
echo end($num);//888
echo "<br>";
////////////////////////////////////////
//end();
$num=[1,33,65,88,888];
function getLastElement ($arr)
{
    $size=count($arr);
    return $arr[$size-1];
}
echo getLastElement($num);//888
echo "<br>";
////////////////////////////////////////
//getMax()
function getmax($arr)
{
    $first=$arr[0];
   foreach ($arr as $value) {
    if ($first < $value) {
        $first=$value;
    }
   }
   return $first;
}
echo getmax($num);//888
echo "<br>";
////////////////////////////////////////
//getMin();
function getmin($arr)
{
    $first=$arr[0];
   foreach ($arr as $value) {
    if ($first > $value) {
        $first=$value;
    }
   }
   return $first;
}
echo getmin($num);//1
echo "<br>";
////////////////////////////////////////
$str="Ali kareem";

print_r(str_split($str));
echo "<br>";
////////////////////////////////////////
$arrofstr=explode(" ",$str);

print_r($arrofstr);
echo "<br>";
////////////////////////////////////////
