<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $x=1.9e411;
    var_dump(is_finite($x));
    
    echo "<br>";
    echo "<br>";
    
    var_dump(is_infinite($x));
    ?>
</body>
</html>