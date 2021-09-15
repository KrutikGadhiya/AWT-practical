<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Anonymous Function</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>Anonymous Function</h1>
  <form method="post">
    <div class="form-control">
      <input type="number" name="num1">
    </div>
    <div class="form-control">
      <input type="submit" value="Submit" name="Submit">
    </div>
  </form>
  <?php
  $squr = function ($n) {
    return $n * $n;
  };

  if ($_POST["Submit"] == "Submit") {
    echo "<p>Square of " . $_POST['num1'] . " is: " . $squr($_POST['num1']) . "</p>";
  }
  ?>
</body>

</html>