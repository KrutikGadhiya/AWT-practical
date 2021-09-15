<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scope of variable in Function (local, global, static)</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>Scope of variable in Function (local, global, static)</h1>
  <?php
  $var1 = "<p>This is Global Variable</p>";
  function varScope()
  {
    global $var1;
    $var2 = "<p>This is Local Variable</p>";
    echo $var2;
    echo $var1; // will give error if global keyword is not used
  }
  function staticVar()
  {
    static $var3 = 0;
    echo "<p>Value of \$var3: $var3</p>";
    $var3++;
  }

  varScope();
  staticVar();
  staticVar();
  staticVar();
  ?>
</body>

</html>