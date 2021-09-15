<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Function with and without argument</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>Function with and without argument</h1>
  <form method="POST">
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
  function printHello()
  {
    echo "<p>Hello Krutik &#128077;</p>";
  }
  function addition($num1, $num2)
  {
    $sum = $num1 + $num2;
    echo "<h3>Addition of $num1 + $num2 = $sum</h3>";
  }
  if ($_POST["Submit"] == "Submit") {
    printHello();
    addition($_POST['num1'], $_POST['num2']);
  }

  ?>
</body>

</html>