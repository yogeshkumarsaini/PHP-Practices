<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $car=array("Brand"=>"Ford","Model"=>"Mustang","Year"=>1964);
    $newArray=array_diff($car,["Mustang",1964]);
    var_dump($newArray);
    ?>
</body>
</html>