<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $x = 5985;
    var_dump(is_numeric($x));

    echo "<br>";
    echo "<br>";

    $x = "5985";
    var_dump(is_numeric($x));

    echo "<br>";
    echo "<br>";

    $x = "59.85" + 100;
    var_dump(is_numeric($x));
    echo $x;

    echo "<br>";
    echo "<br>";

    $x = "Hello";
    var_dump(is_numeric($x));
    ?>
</body>
</html>