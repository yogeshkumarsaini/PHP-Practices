<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $car=array("Thar","Swift","BMW");
    array_splice($car,1,2);
    var_dump($car);
    ?>
</body>
</html>