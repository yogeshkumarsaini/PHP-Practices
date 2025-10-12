<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $d=3;
    switch($d){
        case 1:
        case 2:
        case 3:
            echo "The week so long";
            break;
        case 0:
            echo "Weekend are the best";
            break;
        default:
            echo "Something went wrong";
    }
    ?>
</body>
</html>