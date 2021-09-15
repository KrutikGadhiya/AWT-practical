<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Returning Function from another function</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>Returning Function from another function</h1>
  <?php
  function multipler()
  {
    $table =  function ($x) {
      for ($i = 1; $i <= 10; $i++) {
        echo "<p>$x * $i = " . $i * $x . "</p>";
      }
    };
    return $table;
  }
  $table = multipler();
  $table(5);
  ?>
</body>

</html>