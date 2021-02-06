<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer -if Statement</title>
</head>
<body>
    <h3 style="color: red"></h3>
    <?php
        echo '<h2>If Statement</h2>';

        $grade=40;

        if($grade>=50){
            echo '<h3 style="color: green">You have passed</h3>';

        }

        else{

            echo '<h3 style="color: red">You have failed</h3>';
        }

        $grade='A';

        if($grade=='A'){

            echo '<h2>You are a superstar</h2>';
        }
        elseif($grade=='B'){

            echo '<h2>You are a good</h2>';   
        }
        else{
            echo '<h2>You are a good</h2>';
        }


    ?>


</body>
</html>