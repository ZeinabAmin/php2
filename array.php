<?php
$users=[
    ["firstname"=>"Ali","lastname"=>"Ahmed"],
    ["firstname"=>"Adel","lastname"=>"karam"],
    "skills"=>[
        ["softskills"=>["reading"],
        "tech"=>["php","mysql"],
    ]
    ]
];
echo "<pre>";
print_r($users);
echo "</pre>";

echo "<br>";
// Array
// (
//     [0] => Array
//         (
//             [firstname] => Ali
//             [lastname] => Ahmed
//         )

//     [1] => Array
//         (
//             [firstname] => Adel
//             [lastname] => karam
//         )

//     [skills] => Array
//         (
//             [0] => Array
//                 (
//                     [softskills] => Array
//                         (
//                             [0] => reading
//                         )

//                     [tech] => Array
//                         (
//                             [0] => php
//                             [1] => mysql
//                         )

//                 )

//         )

// )
////////////////////////////////////////
$num=[1,33,65,88,888];

echo "<br>";
print_r(count($num));//5
echo "<br>";
print_r(sizeof($num));//5
echo "<br>";
//print_r(shuffle($num));1
shuffle($num);
print_r($num);//Array ( [0] => 888 [1] => 1 [2] => 65 [3] => 33 [4] => 88 )
echo "<br>";
////////////////////////////////////////
?>