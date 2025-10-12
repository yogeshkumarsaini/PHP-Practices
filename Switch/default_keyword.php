<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $d=0;
    switch($d){
        default:
        echo "Looking forward to the weekend";
        break;
        case 6:
            echo "Today is saturday";
            break;
        case 0:
            echo "Today is sunday";
            break;
    }
    ?>
</body>
</html>