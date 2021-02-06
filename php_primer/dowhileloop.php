<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer dowhile</title>
</head>
<body>
    <h1>while loop</h1>

    <?php
        $grade=0;
        while($grade<10){

            echo '<p>l am less than 10</p>';
            $grade++;
        }

            echo 'exit loop';

    ?>

    <h1>while loop</h1>
        
     

        <?php
            $grade=0;
            do{

                echo '<p>l am do while loop</p>';
                $grade++;

            }while($grade<10);
            echo 'exit loop';


        ?>

</body>
</html>

