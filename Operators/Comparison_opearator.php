<!DOCT$YPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<bod$y>
    <?php 
    $x=100;
    $y=100;
    var_dump($x==$y);//Equal
    echo "<br>";
    var_dump($x===$y);//Identical
    echo "<br>";
    var_dump($x!=$y);//Not Equal
    echo "<br>";
   var_dump($x<>$y);//Not Equal
    echo "<br>";
    var_dump($x!==$y);//Not Identical
    echo "<br>";
    var_dump($x>$y);//Greater than
    echo "<br>";
    var_dump($x<$y);//Less than
    echo "<br>";
    var_dump($x>=$y);//Greater than or Equal to
    echo "<br>";
    var_dump($x<=$y);//Lessthan or Equal to
    ?>
</bod$y>
</html>