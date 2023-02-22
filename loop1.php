<?php
for ($i = 0; $i < 10; $i++) {
    echo $i;
}
echo "<br>";
////////////////////////////////////////
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
// *
// **
// ***
// ****
// *****
////////////////////////////////////////
$a = 0;
while ($a < 10) {
    echo $a . "<br>";
    $a++;
}
echo "<br>";
////////////////////////////////////////
$a = 0;
do {
    echo $a . "<br>";
    $a++;
} while ($a < 10);
echo "<br>";
////////////////////////////////////////
$users = ['hassan', 'kareem', 'ali', 'mai'];
$count = count($users);
// for ($i=0; $i <$count ; $i++) { 
// }
while ($user = array_pop($users)) {
    echo  $user . "<br>";
}
echo "<br>";
////////////////////////////////////////
for ($i = 1; $i <= 8; $i++) {
    if ($i == 5) {
        echo "zeinab <br>";
    } else {
        echo  $i . "<br>";
    }
}
echo "<br>";
////////////////////////////////////////
$names = ['hassan', 'kareem', 'ali', 'mai'];
for ($i = 0; $i < count($names); $i++) {
    echo $names[$i] . "<br>";
}
echo "<br>";
////////////////////////////////////////
$names = ['hassan', 'kareem', 'ali', 'mai'];
foreach ($names as $key => $value) {
    echo $key . " " . $value . "<br>";
}
echo "<br>";
echo "<br>";
foreach ($names as $name) {
    echo $name . "<br>";
}
////////////////////////////////////////
$ass = [
    'kareem' => 'backend',
    'ahmed' => 'frontend',
    'mohammed' => 'android',
];
foreach ($ass as $key => $value) {
    echo $key . " " . $value . "<br>";
}
echo "<br>";
echo "<br>";
foreach ($ass as $value) {
    echo $value . "<br>";
}
echo "<br>";
////////////////////////////////////////
$names = ['hassan', 'kareem', 'ali', 'mai'];
foreach ($names as $index => $name) {
    if ($name[1] != 'a') {
        unset($names[$index]);
    }
}
echo "<pre>";
print_r($names);
echo "</pre>";
echo "<br>";
////////////////////////////////////////
foreach ($names as $value) {
    if ($value == 'hassan') {
        echo 'mawgood';
    }
}
echo "<br>";
////////////////////////////////////////
$flag = 0;
foreach ($names as $value) {
    if ($value == 'hassan') {
        $flag++;
        echo $flag;
    }
}
echo "<br>";
////////////////////////////////////////
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach ($numbers as $num) {
    if ($num == 5) {
        break;
    }
    echo $num . "<br>";
}
echo "<br>";
////////////////////////////////////////
foreach ($numbers as $num) {
    if ($num == 5) {
        continue;
    }
    echo $num . "<br>";
}
echo "<br>";
////////////////////////////////////////
$nums = [4, 8, 10, 2,];
$sum = 0;
foreach ($nums as $index => $num) {
    $sum += $num;
}
echo $sum . "<br>";
$numsize = $index + 1;
echo "avg is " . ($sum / $numsize);
echo "<br>";
////////////////////////////////////////
$arrsum = [10, 20, 30, 40, 50];
$sum = 0;
foreach ($arrsum as $value) {
    $sum += $value;
}
echo $sum; //150
echo "<br>";
////////////////////////////////////////
$arrsum = [10, 20, 30, 40, 50];
$sum = 0;
$counter = 0;
foreach ($arrsum as $index => $value) {
    $sum += $value;
    $counter++;
}
echo $counter;
echo "<br>";
//  $lenght=$index+1;
echo $sum . "<br>";
echo "avg is " . $sum / $counter;
echo "<br>";
////////////////////////////////////////
