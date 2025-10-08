<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
     $user = "Hello World";
   // if empty($user) = FALSE, set $status = "logged in"
   echo $status = (empty($user)) ? "anonymous" : "logged in $user!"; //Ternary
   echo "<br>";

   // variable $color is "red" if $color does not exist or is null
   echo $color = $color ?? "red";// Null coalescing
    ?>
</body>
</html>