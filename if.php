<?php
$x=3;
$msg='';
if($x==3){
$msg='hello';
}
echo $msg;
echo "<br>";
//////////////////////////////////////////////////
$x=3;
if($x==3){
$msg='hello';
echo $msg;
}
echo "<br>";
//////////////////////////////////////////////////
$x=3;
if($x==3){
$msg='hello';
echo $msg;
}else {
    //echo $msg=null;
//  or  echo $msg="";
}
echo "<br>";
//////////////////////////////////////////////////
$data=[1,2,3];
if(is_array($data)){
    echo "data is array and length is" . count($data);
    }else if (is_string($data)) {
        echo "data is string and length is" . strlen($data);
    }else {
        echo "not array or string";
    }
echo "<br>";
//////////////////////////////////////////////////
$grade=80;
if($grade >=0 and $grade <=100){
    if ($grade < 50) {
       echo 'fail';
    }elseif ($grade < 70) {
       echo 'pass';
    }else {
        echo 'good';
    }
}
echo "<br>";
//////////////////////////////////////////////////
if($grade >=0 and $grade < 50){
       echo 'fail';
    }elseif ($grade >=50 and $grade < 70) {
       echo 'pass';
    }elseif ($grade >=70 and $grade <= 100) {
        echo 'good';
    }
    else {
        echo 'not valid';
    }
echo "<br>";
//////////////////////////////////////////////////
$z=30;
if($z >=0 and $z <= 50){
    echo 'hello';
}
echo "<br>";

if(!($z >=0 and $z <= 50)){
    echo 'hello';
}
echo "<br>";

if($z < 0 or $z > 50){
    echo 'hello';
}
echo "<br>";
//////////////////////////////////////////////////
//php syntax
if(true):
    echo 'Ali';
endif;
echo "<br>";
//////////////////////////////////////////////////
//php syntax
$numberofletter=20;
$oil=80;
if($oil==80):
    echo $numberofletter*1;
    elseif($oil==90):
    echo $numberofletter*2;
    elseif($oil==92):
    echo $numberofletter*3;
endif;
