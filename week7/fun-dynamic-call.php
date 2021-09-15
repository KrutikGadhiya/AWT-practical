<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dynamic Call of Function</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>Dynamic Call of Function</h1>
  <form method="post">
    <div class="form-control">
      <input type="number" name="num1">
    </div>
    <div class="form-control">
      <input type="number" name="num2">
    </div>
    <div class="form-control">
      <select name="operation">
        <option selected value="Addition">Addition</option>
        <option value="Subtraction">Subtraction</option>
      </select>
    </div>
    <div class="form-control">
      <input type="submit" value="Submit" name="Submit">
    </div>
  </form>
  <?php
  $dynamicFun = 'addition';
  function addition($num1, $num2)
  {
    $sum = $num1 + $num2;
    echo "<p>Addition of $num1 + $num2 = $sum</p>";
  }
  function difference($num1, $num2)
  {
    $diff = $num1 - $num2;
    echo "<p>Subtraction of $num1 - $num2 = $diff</p>";
  }

  if ($_POST["operation"] == "Addition") {
    $dynamicFun = 'addition';
  } else {
    $dynamicFun = 'difference';
  }
  $dynamicFun($_POST['num1'], $_POST['num2']);
  ?>
</body>

</html>