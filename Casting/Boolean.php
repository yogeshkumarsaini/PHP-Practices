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
    $c=0;
    $d=-1;
    $e=0.1;
    $f="hello";
    $g="";
    $h=true;
    $i=NULL;

    $a=(bool)$a;
    $b=(bool)$b;
    $c=(bool)$c;
    $d=(bool)$d;
    $e=(bool)$e;
    $f=(bool)$f;
    $g=(bool)$g;
    $h=(bool)$h;
    $i=(bool)$i;

    var_dump($a);
    var_dump($b);
    var_dump($c);
    var_dump($d);
    var_dump($e);
    var_dump($f);
    var_dump($g);
    var_dump($h);
    var_dump($i);
    ?>
</body>
</html>