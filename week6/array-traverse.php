<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Traversing Array</title>
  <link rel="stylesheet" href="style.css">
</head>

<body class="lskyblue">
  <h1>Traversing Array</h1>
  <?php
  $arr1 = array(1, 9, 45, 87, 32, 147, 12);
  $arr2 = array("gujarat" => "gandhinagar", "maharastra" => "mumbai", "rajasthan" => "jaypur", "karnataka" => "bengaluru", "tamilnadu" => "chennai");
  ?>
  <div class="tables">
    <?php
    echo "<table><tr><th colspan='2'>Traversing Indexed Array</th></tr>";
    foreach ($arr1 as $key => $val) {
      echo "<tr>
        <td>$key</td>
        <td>$val</td>
        </tr>";
    }
    echo "</table>";
    ?>
    <?php
    echo "<table><tr><th colspan='2'>Traversing Associative Array</th></tr>";
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