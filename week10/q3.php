<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iinheritence parent keyword</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container text-center">
    <?php
    class Car
    {
      public $name;
      public $color;
      static $type = "Petrol";
      public function __construct($name, $color)
      {
        $this->name = $name;
        $this->color = $color;
      }
      public function details()
      {
        echo "<h1>The company is {$this->name} and the color is {$this->color}.</h1>";
      }
    }
    // Strawberry is inherited from Fruit
    class Maruti extends Car
    {
      public function message()
      {
        echo "<h1>This is Maruti's Baleno Car </h1>";
      }
      public function carType()
      {
        echo "<h1>Type: " . parent::$type . "</h1>";
      }
    }
    $strawberry = new Maruti("Maruti", "White");
    $strawberry->message();
    $strawberry->details();
    $strawberry->carType();
    ?>
  </div>
</body>

</html>