<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $txt1 = "Hello";
    $txt2 = " world!";
    echo $txt1 . $txt2; // Concatenation
    echo "<br>";

    $txt1 .= $txt2;
    echo $txt1; //Concatenation assignment
    ?>
</body>
</html>