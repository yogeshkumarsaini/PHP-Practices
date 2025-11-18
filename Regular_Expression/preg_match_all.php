<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $str="The rain in SPAIN stays mainly in the plain";
    $pattern="/ain/i";
    echo preg_match_all($pattern,$str);
    ?>
</body>
</html>