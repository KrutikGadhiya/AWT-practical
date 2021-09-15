<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nesting of Functions (Function call another function inside function body)</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>Nesting of Functions (Function call another function inside function body)</h1>
  <form method="post">
    <div class="form-control">
      <input type="number" name="num1">
    </div>
    <div class="form-control">
      <input type="number" name="num2">
    </div>
    <div class="form-control">
      <input type="submit" value="Submit" name="Submit">
    </div>
  </form>
  <?php
  function addNum($n)
  {
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
      $sum += $i;
    }
    return $sum;
  }
  function compSum($n1, $n2)
  {
    if (addNum($n1) > addNum($n2)) {
      echo "Sum of $n1 is Greater than $n2";
    } else {
      echo "Sum of $n2 is Greater than $n1";
    }
  }

  if ($_POST["Submit"] == "Submit") {
    compSum($_POST['num1'], $_POST['num2']);
  }
  ?>
</body>

</html>