<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // and operator
    $a = 100;  
    $b = 50;

    if ($a == 100 and $b == 50) {
        echo "Hello world!";
    }
    echo "<br>";
    
    // or operator
    $c = 100;  
    $d = 50;

    if ($c == 100 or $d == 80) {
        echo "Hello world!";
    }
    echo "<br>";

    // xor operator
    $e = 100;  
    $f = 50;

    if ($e == 100 xor $f == 80) {
        echo "Hello world!";
    }
    echo "<br>";

    // && operator
    $g = 100;  
    $h = 50;

    if ($g == 100 && $h == 50) {
        echo "Hello world!";
    }
    echo "<br>";

    // || operator
    $i = 100;  
    $j = 50;

    if ($i == 100 || $j == 80) {
        echo "Hello world!";
    }
    echo "<br>";
    
    // ! operator
    $k = 100;  

    if (!($k == 90)) {
        echo "Hello world!";
    }
?> 

</body>
</html>