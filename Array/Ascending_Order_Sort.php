<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $cars=array("Thar","BMW","Swift");
    sort($cars);
    $lenght=count($cars);
    for($i=0;$i<$lenght;$i++){
        echo $cars[$i];
        echo "<br>";
    }
    
    ?>
</body>
</html>