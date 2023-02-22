<?php
$names=['hassan','kareem','ali','mai'];
foreach ($names as $index => $name) {
    echo "value at index $index is $name <br>";
}
echo "<br>";
////////////////////////////////////////
$names=['hassan','kareem','ali','mai',];
$found=false;
foreach ($names as $index => $name) {
    if($name == 'kareem'){
    echo "found in index $index ";
    $found=true;
    break;
    }
}
if(!$found){echo 'not found';}
//if($found == false){echo 'not found';}
echo "<br>";
////////////////////////////////////////
$msg='not found';
foreach ($names as $index => $name) {
    if($name == 'kareem'){
        $msg= "found in index $index";
    break;
    }
}
echo $msg;
echo "<br>";
////////////////////////////////////////
echo "<table border='1'>";
for ($i=1; $i<=8 ; $i++) { 
    echo "<tr>";
    for ($x=1; $x<=8 ; $x++) { 
if (($x+$i)%2) {
    echo "<td bgcolor='black'>$x</td>";
}else{
    echo "<td bgcolor='white'>$x</td>";
}
    }
    echo "</tr>";
}
echo "</table>";
echo "<br>";
////////////////////////////////////////
for ($i=0; $i<10; $i++) { 
if ($i==5) {
echo "Ali <br>";
continue;
}
echo $i."<br>";
}
echo "<br>";
////////////////////////////////////////
