<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function fun(){
        $GLOBALS["x"]=100;
    }
    fun();
    echo $GLOBALS["x"];
    echo $x;
    ?>
</body>
</html>