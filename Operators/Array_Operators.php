<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $x = array("a" => "red", "b" => "green");  
    $y = array("c" => "blue", "d" => "yellow");  

    print_r($x + $y); // union
    echo "<br>";
    var_dump($x==$y);// Equality
    echo "<br>";
    var_dump($x===$y);// Identity
    echo "<br>";
    var_dump($x!=$y);// Inequality
    echo "<br>";
    var_dump($x<>$y);// Inequality
    echo "<br>";
    var_dump($x!==$y);// Non-identity
    ?>
</body>
</html>