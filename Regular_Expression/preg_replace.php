<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $str="Visit Online";
    $pattern="/online/i";
    echo preg_replace($pattern,"PHP",$str);
    ?>
</body>
</html>