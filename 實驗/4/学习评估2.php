<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex2</title>
</head>
<body>
    <?php
    function bigger($a,$b){
        if ($a!=$b){
            if ($a>$b){
                echo $a;
            }
            else echo $b;
        }
        else echo "相等";
    }

    bigger(-5,-3);
    ?>
</body>
</html>