<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    Class Car{
        public $color;
        public $model;
        public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
  }
}

    $myCar=new Car("red","BMW");
    foreach($myCar as $x=>$y){
        echo "$x : $y <br>";
    }
    ?>
</body>
</html>