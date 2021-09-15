<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Prepare code to demonstrate any five regex function from</title>
</head>

<body>
  <table>
    <?php
    $str = "hello my name is krutik gadhiya.";
    $arry = array("hello", "my", "name", "is", "krutik", "gadhiya.", "i", "am", "learning", "PHP.");
    echo "<tr><th colspan='2'>$str</th></tr>
    <tr><th colspan='2'>" . implode(" ", $arry) . "</th></tr>";
    echo "<tr>
    <th>Function</th>
    <th>Output</th>
    </tr>";
    // preg_replace()
    echo "<tr>
    <td>preg_replace('/krutik/', 'KRUTIk', \$str)</td>
    <td>" . preg_replace('/krutik/', 'KRUTIK', $str) . "</td>
    </tr>";
    // preg_match()
    echo "<tr>
    <td>preg_match('/Krutik/', \$str)</td>
    <td>" . preg_match('/Krutik/', $str) . "</td>
    </tr>";
    // preg_match_all()
    echo "<tr>
    <td>preg_match_all('/krutik/', \$str)</td>
    <td>" . preg_match_all('/krutik/', $str) . "</td>
    </tr>";
    // preg_split()
    echo "<tr>
    <td>preg_split('/[\s,]+/', \$str)</td>
    <td><table style='height: 30%; font-size: 0.8em;'>";
    foreach (preg_split('/[\s,]+/', $str) as $k => $v) {
      echo "<tr><td>$k</td><td>$v</td></tr>";
    }
    echo "</table></td>
    </tr>";
    // preg_grep()
    echo "<tr>
    <td>preg_grep('/^[^a]+$/', \$str)</td>
    <td><table style='height: 30%; font-size: 0.8em;'>";
    foreach (preg_grep('/^[^a]+$/', $arry) as $k => $v) {
      echo "<tr><td>$k</td><td>$v</td></tr>";
    }
    echo "</table></td>
    </tr>";
    ?>
  </table>
</body>

</html>