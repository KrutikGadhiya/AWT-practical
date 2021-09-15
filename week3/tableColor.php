<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/tableColor.css">
  <title>Table Color</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      height: 100vh;
      width: 100vw;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 1em 3em;
      background-color: #ebebd3;
    }

    body h1 {
      margin-bottom: 3em;
      text-align: justify;
    }

    table {
      border-collapse: collapse;
    }

    tr,
    td {
      border: 1px solid #949494;
      padding: 8px;
    }

    body table td {
      padding: 0.5em 1em;
    }
  </style>
</head>

<body>
  <h1>Change Color of HTML Table using PHP (Get rows/columns/color from php variables)</h1>
  <table>
    <?php
    $rows = 6;
    $cols = 5;
    $color = '#fff';
    for ($i = 0; $i < $rows; $i++) {
      echo "<tr>";
      for ($j = 0; $j < $cols; $j++) {
        if (($i + $j) % 2 == 0) {
          $color = '#083d77';
        } else {
          $color = '#f4d35e';
        }
        echo "<td style='background-color: $color;'>($i, $j)</td>";
      }
      echo "</tr>";
    }
    ?>
  </table>
</body>

</html>