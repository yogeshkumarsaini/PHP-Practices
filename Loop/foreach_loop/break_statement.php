<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $color=array("red","yellow","green","blue");
    foreach($color as $i){
        if($i=="green") break;
        echo "$i <br>";
    }
    ?>
</body>
</html>