<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Passing Function as Argument to another function</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>Passing Function as Argument to another function</h1>
  <form method="post">
    <div class="form-control">
      <label for="num1">Value</label>
      <input type="number" name="num1">
    </div>
    <div class="form-control">
      <label for="num2">Power</label>
      <input type="number" name="num2">
    </div>
    <div class="form-control">
      <input type="submit" value="Submit" name="Submit">
    </div>
  </form>
  <?php
  function callBackFun($value, $power)
  {
    $result = 1;
    for ($i = 0; $i < $power; $i++) {
      $result *= $value;
    }
    return $result;
  }
  function mainFun($callback, $val, $pow)
  {
    echo "$val to the Power $pow is: " . $callback($val, $pow);
  }
  if ($_POST["Submit"] == "Submit") {
    mainFun('callBackFun', $_POST['num1'], $_POST['num2']);
  }
  ?>
</body>

</html>