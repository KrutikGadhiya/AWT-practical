<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Abstract class and Interface</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container text-center">
    <?php
    abstract class shape
    {
      abstract public function noOfSides();
    }
    interface volume
    {
      public function volume_of_shape();
    }
    class square extends shape implements volume
    {
      public function noOfSides()
      {
        echo "<h1>Number of Sides are 4.</h1>";
      }
      public function volume_of_shape()
      {
        echo "<h1>Volume of Square is L*L</h1>";
      }
    }
    $sqr = new square;
    $sqr->noOfSides();
    $sqr->volume_of_shape();
    ?>
  </div>
</body>

</html>