<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>instance / Class Member</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    <h1>Demonstrate the Instance Members and Class Members (static + const) [ $this and self ]</h1>
    <div class="container border border-primary rounded border-5 p-3 mt-5">
      <?php
      class Myclass
      {
        var $instance;
        static $staticNum = 0;
        const CONSTNUM = "This is constant";

        function __construct($inst)
        {
          $this->instance = $inst;
        }
        function getConst()
        {
          echo "<h3> Const: " . self::CONSTNUM . "</h3>";
        }
        function getStatic()
        {
          echo "<h3> Static: " . self::$staticNum . "</h3>";
        }
        function getInst()
        {
          echo "<h3> Static: " . $this->instance . "</h3>";
        }
        function updateStatic()
        {
          self::$staticNum++;
        }
      }

      $obj = new Myclass("This is Instance Variable - 1");
      $obj2 = new Myclass("This is Instance Variable - 2");
      $obj->getConst();
      $obj->getInst();
      $obj2->getInst();
      echo "This is CONSTANT var: " . Myclass::CONSTNUM;
      echo "<br>This is Static var: " . Myclass::$staticNum;
      $obj->updateStatic();
      $obj->getStatic();
      $obj2->updateStatic();
      $obj2->getStatic();
      ?>
    </div>
  </div>
</body>

</html>