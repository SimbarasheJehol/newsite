<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer -Arrays</title>
</head>
<body>
<h1>Arrays</h1>

<?php

//only one data type
    $numbers=array(1,2,3,4,5,6,7,8,9,10,11,22,34,45,56,8);
    echo $numbers[5];
    $size=count($numbers);
    echo "<p>Size of the array is: $size</p>";

    for($count=0;$count<$size;$count++){

        echo " $numbers[$count]";
    }


?>
    
</body>
</html>

