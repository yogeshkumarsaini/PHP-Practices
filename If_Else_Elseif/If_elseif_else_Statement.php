<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $t=date("H");
    if($t<"10"){
        echo "Good Morning";
    }elseif($t<"20"){
        echo "Good Day";
    }else{
        echo "Good Night";
    }
    ?>
</body>
</html>