<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pass by value vs Pass by Reference</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>Pass by value vs Pass by Reference</h1>
  <?php
  $num1 = 10;
  $num2 = 20;
  echo "<p>Before Swapping \$num1 = $num1 and \$num2 = $num2</p>";
  function passByValue($n1, $n2)
  {
    $temp = $n1;
    $n1 = $n2;
    $n2 = $temp;
  }
  passByValue($num1, $num2);
  echo "<p>After Swapping\$num1 = $num1 and \$num2 = $num2</p>";
  echo "<p>Before Swapping \$num1 = $num1 and \$num2 = $num2</p>";
  function passByRef(&$n1, &$n2)
  {
    $temp = $n1;
    $n1 = $n2;
    $n2 = $temp;
  }
  passByRef($num1, $num2);
  echo "<p>After Swapping\$num1 = $num1 and \$num2 = $num2</p>";
  ?>
</body>

</html>