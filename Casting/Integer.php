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
    $e=true;
    $f=NULL;
    $g="hello";

    $a=(int)$a;
    $b=(int)$b;
    $c=(int)$c;
    $d=(int)$d;
    $e=(int)$e;
    $f=(int)$f;
    $g=(int)$g;

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