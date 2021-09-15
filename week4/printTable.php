<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Print table of Current date time of UK , USA, India and Israel.</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap');

    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }

    body {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      background-color: lightblue;
      font-family: 'Note Sans JP', sans-serif;
      font-size: 1.5em;
    }

    div {
      width: 100%;
      display: flex;
      justify-content: space-evenly;
    }

    table {
      border-collapse: collapse;
    }

    tr,
    td {
      border: 1px solid #949494;
      padding: 8px;
    }

    td {
      padding: 0.5em 1em;
    }
  </style>
</head>

<body>
  <table>
    <?php
    $date = new DateTime("now", new DateTimeZone('Europe/London'));
    $date = $date->format('Y-m-d h:i:s A');
    echo "<tr>
  <td>UK</td>
  <td>$date</td>
  </tr>";
    ?>
    <br>
    <?php
    $date = new DateTime("now", new DateTimeZone('America/Los_Angeles'));
    $date = $date->format('Y-m-d h:i:s A');
    echo "<tr>
  <td>USA</td>
  <td>$date</td>
  </tr>";
    ?>
    <br>
    <?php
    $date = new DateTime("now", new DateTimeZone('Asia/Kolkata'));
    $date = $date->format('Y-m-d h:i:s A');
    echo "<tr>
  <td>India</td>
  <td>$date</td>
  </tr>";
    ?>
    <br>
    <?php
    $date = new DateTime("now", new DateTimeZone('Asia/Jerusalem'));
    $date = $date->format('Y-m-d h:i:s A');
    echo "<tr>
  <td>UK</td>
  <td>$date</td>
  </tr>";
    ?>
  </table>
</body>

</html>