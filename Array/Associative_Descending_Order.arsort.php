<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $age=array("Peter"=>"35","Harry"=>"37","Joe"=>"43");
    arsort($age);
    foreach($age as $i=>$i_value){
        echo "Key= ".$i.", Value= ".$i_value;
        echo "<br>";
    }
    ?>
</body>
</html>