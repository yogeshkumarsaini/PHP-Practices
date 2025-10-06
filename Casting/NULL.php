<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $a=5;
    $b=5.34;
    $c="hello";
    $d=true;
    $e=NULL;

    unset($a, $b, $c, $d, $e);

    var_dump($a);
    var_dump($b);
    var_dump($c);
    var_dump($d);
    var_dump($e);

    ?>
</body>
</html>