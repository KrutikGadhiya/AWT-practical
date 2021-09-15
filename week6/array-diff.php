<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Diff between two Arrays</title>
  <link rel="stylesheet" href="style.css">
</head>

<body class="lskyblue">
  <h1>Diff between two Arrays</h1>
  <?php
  $arr1 = array(1, 9, 45, 87, 32, 147, 12);
  $arr2 = array(1, 9, 45, 31, 12);
  $arrDiff1 = array_diff_assoc($arr1, $arr2);
  $arrDiff2 = array_diff_assoc($arr2, $arr1);
  ?>
  <div style="width: 50%;" class="tables">
    <?php
    echo "<table><tr><th colspan='2'>Array - 1</th></tr>";
    foreach ($arr1 as $key => $val) {
      echo "<tr>
        <td>$key</td>
        <td>$val</td>
        </tr>";
    }
    echo "</table>";
    ?>
    <?php
    echo "<table><tr><th colspan='2'>Array - 2</th></tr>";
    foreach ($arr2 as $key => $val) {
      echo "<tr>
        <td>$key</td>
        <td>$val</td>
        </tr>";
    }
    echo "</table>";
    ?>
    <?php
    echo "<table><tr><th colspan='2'>Array1 - Array2</th></tr>";
    foreach ($arrDiff1 as $key => $val) {
      echo "<tr>
      <td>$key</td>
      <td>$val</td>
      </tr>";
    }
    echo "</table>";
    ?>
    <?php
    echo "<table><tr><th colspan='2'>Array2 - Array1</th></tr>";
    foreach ($arrDiff2 as $key => $val) {
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