<?php
$data=null;//no data
//$data='';// print empty string
//$data='  ';// print empty string
if($data !== null){
    echo $data;
}else {
    echo 'no data';
}
echo "<br>";
////////////////////
$data=3;//7
//$data='';//6
//$data='  ';//6
if($data != '3'){ // != and !== both true
    echo '6';
}
else{
    echo '7';
}
echo "<br>";
////////////////////
$data='hello world';
echo $data?? 'no data';
echo "<br>";//hello woorld
?>