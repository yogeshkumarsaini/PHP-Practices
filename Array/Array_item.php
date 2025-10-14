<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function myFunction(){
        echo "Hello World";
    }
    $myArr=array("Volvo", 15, ["apple", "bananas"], "myFunction");
    $myArr[3]();
    ?>
</body>
</html>