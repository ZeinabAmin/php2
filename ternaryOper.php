<?php
$age=30;
if ($age>=60) {
   $msg='retired';
}else {
    $msg='go to work';
}
echo $msg;
echo "<br>";
//////////////////////////
$msg=($age>=60)?'retired':'go to work';
echo $msg;
echo "<br>";















?>