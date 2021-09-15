<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recursive Function : Factorial</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>Recursive Function : Factorial</h1>
  <form method="post">
    <div class="form-control">
      <input type="number" name="num1">
    </div>
    <div class="form-control">
      <input type="submit" value="Submit" name="Submit">
    </div>
  </form>
  <?php
  function factorial($n)
  {
    if ($n <= 1) {
      return 1;
    }
    return ($n * factorial($n - 1));
  };

  if ($_POST["Submit"] == "Submit") {
    echo "<p>Factorial of " . $_POST['num1'] . " is: " . factorial($_POST['num1']) . "</p>";
  }
  ?>
</body>

</html>