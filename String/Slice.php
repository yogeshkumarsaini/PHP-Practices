<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
    <?php 
    $x = "Hello World!";
    echo substr($x, 6, 4);

    echo "<br>";
    echo "<br>";
    echo substr($x,6);

    echo "<br>";
    echo "<br>";
    
    echo substr($x,-5,3);

    echo "<br>";
    echo "<br>";

    $y="Hi, how are you?";
    echo substr($y,5,-3);
    ?>
 
</body>
</html>