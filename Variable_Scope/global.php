<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Global Variable</h1>
    <?php
    $x=5;
    function test(){
        echo "Variable x inside the Fuction:$x";
    }
    test();
    echo "Varibale x outside the function: $x";
    ?>
    <h1>Global Keyword</h1>
    <?php
    $x=5;
    function test1(){
        global $x;
        echo "Variable x inside the function: $x<br>";
    }
    test1();
    echo "Varibale x outside the function: $x";
    ?>
</body>
</html>