<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Check Element Exist in Array</title>
  <link rel="stylesheet" href="style.css">
</head>

<body class="lpink">
  <h1>Check Element Exist in Array</h1>
  <?php
  $arr1 = array(1, 9, 45, 87, 32, 147, 12);
  ?>
  <div class="tables">
    <?php
    function keyExist($key, $arr1)
    {
      if (array_key_exists($key, $arr1)) {
        return "$key: True";
      } else {
        return "$key: False";
      }
    }
    echo "<table><tr><th colspan='7'>Array - 1</th></tr><tr>";
    foreach ($arr1 as $key => $val) {
      echo "<td>$key => $val</td>";
    }
    echo "</tr></table>";
    ?>
    <?php
    echo "<table><tr><th colspan='3'>Key Exists?</th></tr><tr>";
    echo "<td>" . keyExist(1, $arr1) . "</td>";
    echo "<td>" . keyExist(35, $arr1) . "</td>";
    echo "<td>" . keyExist(12, $arr1) . "</td>";
    echo "</tr></table>";
    ?>
  </div>
</body>

</html>