<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>String to array and vice-versa</title>
  <link rel="stylesheet" href="style.css">
</head>

<body class="lpink">
  <h1>String to array and vice-versa</h1>
  <?php
  $arry = array("hello", "my", "name", "is", "krutik", "gadhiya.", "i", "am", "learning", "PHP.");
  ?>
  <div style="flex-direction: column;" class="tables">
    <?php
    $arryStr = implode(" ", $arry);
    echo "<h2><b>Array to Str:</b> $arryStr</h2>";
    $strToArry = explode(" ", $arryStr);
    echo "<table><tr><th colspan='10'>Str to Array</th></tr><tr>";
    foreach ($strToArry as $key => $val) {
      echo "<td>$key => $val</td>";
    }
    echo "</tr></table>";
    ?>
  </div>
</body>

</html>