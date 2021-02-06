<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Index</title>
</head>
<body>

    <h2>
    
    <ul>
        <li><a href="ifstatement.php">if statement</a></li>
        <li><a href="switchstatement.php">switch statement</a></li>
        <li><a href="forloop.php">forloop</a></li>
        <li><a href="dowhileloop.php">whileloop</a></li>
        <li><a href="arrays.php">arrays</a></li>
        <li><a href="stringmanip.php">Strings</a></li>
    
    </ul>
    </h2>
    <!------- Basic HTML --->
    <h1>Hello World PHP primer</h1>
    <br/>

    <?php

        // Printing to HTML echo
        echo 'Hello PHP';
        echo  '<br/>';
        echo  'second line ';
        echo  '<br/>';

    
    ?>

    <?php 

    //declare variables
    $name='Simbarashe Mhlanga';
    $age=21;

    echo $name;
    echo '<h1>My name is: '.$name.' </h1>';
    echo '<h1>My age is: '.$age.' </h1>';
    echo "<h1>My name is: $name</h1>"


    
    
    
    ?>
</body>
</html>