<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modification of Array (adding / removing / updating)</title>
  <link rel="stylesheet" href="style.css">
</head>

<body class="lyellow">
  <h1>Modification of Array (adding / removing / updating)</h1>
  <?php
  $arr1 = array(1, 9, 45, 87, 32, 147, 12);
  $arr2 = array("gujarat" => "gandhinagar", "maharastra" => "mumbai", "rajasthan" => "jaipur", "karnataka" => "bengaluru", "tamilnadu" => "chennai");
  function printArray($arry)
  {
    foreach ($arry as $key => $val) {
      echo "<tr>
        <td>$key</td>
        <td>$val</td>
        </tr>";
    }
  }
  ?>
  <div class="tables">
    <?php
    echo "<table><tr><th colspan='2'>Indexed Array</th></tr>";
    printArray($arr1);
    echo "</table>";
    array_push($arr1, 35);
    echo "<table><tr><th colspan='2'>After pushing 35</th></tr>";
    printArray($arr1);
    echo "</table>";
    shuffle($arr1);
    array_pop($arr1);
    echo "<table><tr><th colspan='2'>After popping 2 times</th></tr>";
    printArray($arr1);
    echo "</table>";
    ?>
    <?php
    echo "<table><tr><th colspan='2'>Associative Array</th></tr>";
    printArray($arr2);
    echo "</table>";
    array_push($arr2, "Delhi");
    echo "<table><tr><th colspan='2'>After pushing Delhi</th></tr>";
    printArray($arr2);
    echo "</table>";
    $arr2[array_rand($arr2, 1)] = "krutik";
    array_pop($arr2);
    echo "<table><tr><th colspan='2'>After popping 2 times</th></tr>";
    printArray($arr2);
    echo "</table>";
    ?>
  </div>
</body>

</html>