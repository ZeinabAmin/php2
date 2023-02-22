<?php 
$name='hassan';
if($name =='kareem'){
    echo 'hello kareem';
}elseif ($name =='hassan') {
    echo 'hello hassan';
}else {
    echo 'I do not know you';
}
echo "<br>";
///////////////////////////////////
$name='kareem';
switch($name){
    case 'kareem';
    echo 'hello kareem';
    break;

    case 'hassan';
    echo 'hello hassan';
    break;

    default;
    echo 'I do not know you';

}
echo "<br>";
echo "<br>";
//////////////////////////////////////////////////
//php syntax
$numberofletter=20;
$oil=80;
switch($oil):
 case 80:
    echo $numberofletter*1;
    break;
 case 90:
    echo $numberofletter*2;
     break;
 case 92:
   echo $numberofletter*3;
   break;
 default:
    echo "no....";
 endswitch;
?>