<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer -Switch Statement</title>
</head>
<body>
    <h1>Switch Statements</h1>
    
    <?php 

    $grade='A';

    switch($grade){

        case 'A':

            echo '<h2 style="color: green">You are a superstar</h2>';
            break;
        case 'B':

            echo '<h2  style="color: green">You are a good</h2>';
            break;
        default:
            echo '<h2  style="color: red">You are a failed</h2>';
    }
    
    
    
    ?>
</body>
</html>

