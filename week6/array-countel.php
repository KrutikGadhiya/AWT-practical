<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Counting Array Elements</title>
  <link rel="stylesheet" href="style.css">
</head>

<body class="lskyblue">
  <h1>Coounting Array Elements</h1>
  <?php
  $arr1 = array(1, 9, 45, 87, 32, 147, 12);
  $arr2 = array("gujarat" => "gandhinagar", "maharastra" => "mumbai", "rajasthan" => "jaypur", "karnataka" => "bengaluru", "tamilnadu" => "chennai");
  $arr1_count = count($arr1);
  $arr2_count = count($arr2);
  ?>
  <div class="tables">
    <?php
    echo "<table><tr><th colspan='2'>Indexed Array</th></tr>";
    foreach ($arr1 as $key => $val) {
      echo "<tr>
        <td>$key</td>
        <td>$val</td>
        </tr>";
    }
    echo "</table>";
    ?>
    <?php
    echo "<table><tr><th colspan='2'>Associative Array</th></tr>";
    foreach ($arr2 as $key => $val) {
      echo "<tr>
        <td>$key</td>
        <td>$val</td>
        </tr>";
    }
    echo "</table>";
    ?>
    <?php
    echo "<table><tr><th colspan='2'>Array Element Count</th></tr>";
    echo "<tr>
        <td>Indexed Array Count</td>
        <td>$arr1_count</td>
        </tr>";
    echo "<tr>
        <td>Associative Array Count</td>
        <td>$arr2_count</td>
        </tr>";
    echo "</table>";
    ?>
  </div>
</body>

</html>