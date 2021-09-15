<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sorting Array</title>
  <link rel="stylesheet" href="style.css">
</head>

<body class="lgrey">
  <h1>Sorting Array</h1>
  <?php
  $arr1 = array(1, 9, 45, 87, 32, 147, 12);
  $arr2 = array("gujarat" => "gandhinagar", "maharastra" => "mumbai", "rajasthan" => "jaypur", "karnataka" => "bengaluru", "tamilnadu" => "chennai");
  ?>
  <div class="tables">
    <?php
    echo "<table><tr><th colspan='2'>Indexed Array Unsorted</th></tr>";
    foreach ($arr1 as $key => $val) {
      echo "<tr>
        <td>$key</td>
        <td>$val</td>
        </tr>";
    }
    echo "</table>";
    echo "<table><tr><th colspan='2'>Associative Array Unsorted</th></tr>";
    foreach ($arr2 as $key => $val) {
      echo "<tr>
        <td>$key</td>
        <td>$val</td>
        </tr>";
    }
    echo "</table>";
    ?>
    <?php
    echo "<table><tr><th colspan='2'>Indexed Array Sorted</th></tr>";
    sort($arr1);
    foreach ($arr1 as $key => $val) {
      echo "<tr>
        <td>$key</td>
        <td>$val</td>
        </tr>";
    }
    echo "</table>";
    ?>
    <?php
    echo "<table><tr><th colspan='2'>Associative Array Sorted(value)</th></tr>";
    asort($arr2);
    foreach ($arr2 as $key => $val) {
      echo "<tr>
        <td>$key</td>
        <td>$val</td>
        </tr>";
    }
    echo "</table>";
    ?>
    <?php
    echo "<table><tr><th colspan='2'>Associative Array Sorted(key)</th></tr>";
    ksort($arr2);
    foreach ($arr2 as $key => $val) {
      echo "<tr>
        <td>$key</td>
        <td>$val</td>
        </tr>";
    }
    echo "</table>";
    ?>
  </div>
</body>

</html>