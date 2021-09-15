<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Function Chaining</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>Function Chaining</h1>
  <p>Instead of Storing the function in variable we directly invoke it</p>
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
  multipler()(10);
  ?>
</body>

</html>