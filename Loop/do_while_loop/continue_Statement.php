<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $i=0;
    do{
        $i++;
        if($i==3) continue;
        echo $i;
        
    }while($i<6);
    ?>
</body>
</html>