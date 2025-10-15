<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $cars=array("brand"=>"Ford","model"=>"Mustang");
    $cars +=["color"=>"red","year"=>1964];
    var_dump($cars);
    ?>
</body>
</html>