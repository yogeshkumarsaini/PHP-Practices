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
    $c="25 kilometers";
    $d="kilometers 25";
    $e="hello";
    $f=true;
    $g=NULL;

    $a=(float)$a;
    $b=(float)$b;
    $c=(float)$c;
    $d=(float)$d;
    $e=(float)$e;
    $f=(float)$f;
    $g=(float)$g;

    var_dump($a);
    var_dump($b);
    var_dump($c);
    var_dump($d);
    var_dump($e);
    var_dump($f);
    var_dump($g);
    ?>
</body>
</html>