<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $color=array("red","green","blue","yellow");
    foreach($color as $i){
        if($i=="blue") continue;
        echo "$i <br>";
    }
    ?>
</body>
</html>