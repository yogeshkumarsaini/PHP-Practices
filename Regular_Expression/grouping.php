<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $str="Apple and banana are fruits.";
    $pattern="/ba(na){2}/i";
    echo preg_match($pattern,$str);
    ?>
</body>
</html>