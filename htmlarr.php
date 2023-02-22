<?php
$ass=[
    'kareem'=>'backend',
    'ahmed'=>'frontend',
    'mohammed'=>'android',
];

// echo"<ul>";
// foreach ($ass as $value) {
//     echo "<li> $value </li>";
// }
// echo"</ul>";


//<?php echo // <?=
?>
<html>
    <head>

    </head>
    <body>
       <ul>
<?php foreach ($ass as $key => $value) { ?>
 <li> <?php echo $key." is ".$value ?> </li>
<?php  } ?>

       </ul> 
    </body>
</html>