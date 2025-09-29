<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Local Variable</h1>
    <?php
    function test(){
        $x=5;
        echo "Varibale x inside function: $x";
    }
    test();
    echo "Variable x outside the function: $x";
    ?>
</body>
</html>