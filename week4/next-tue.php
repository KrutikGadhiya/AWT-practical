<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Print the table of Next 50 Tuesday from the given date.</title>
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
      font-size: 1.1em;
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
  </style>
</head>

<body>
  <?php
  $today = date('Y-m-d', strtotime('now'));
  $next_tue = date('Y-m-d', strtotime("next Tuesday"));
  $no_days = abs(date_diff(date_create($today), date_create($next_tue))->format("%a"));
  ?>
  <div>
    <table>
      <?php
      $temp = $no_days;
      $i = 1;
      for ($i; $i <= 13; $i++) {
        $adate = strtotime("+" . $temp . " days", strtotime('now'));
        $nexttue = date("l jS F", $adate);
        echo "<tr>
      <td>$i Tuesday</td>
      <td>$nexttue</td>
      </tr>";
        $temp +=  7;
      }
      ?>
    </table>
    <table>
      <?php
      for ($i; $i <= 26; $i++) {
        $adate = strtotime("+" . $temp . " days", strtotime('now'));
        $nexttue = date("l jS F", $adate);
        echo "<tr>
      <td>$i Tuesday</td>
      <td>$nexttue</td>
      </tr>";
        $temp +=  7;
      }
      ?>
    </table>
    <table>
      <?php
      for ($i; $i <= 39; $i++) {
        $adate = strtotime("+" . $temp . " days", strtotime('now'));
        $nexttue = date("l jS F", $adate);
        echo "<tr>
      <td>$i Tuesday</td>
      <td>$nexttue</td>
      </tr>";
        $temp +=  7;
      }
      ?>
    </table>
    <table>
      <?php
      for ($i; $i <= 50; $i++) {
        $adate = strtotime("+" . $temp . " days", strtotime('now'));
        $nexttue = date("l jS F", $adate);
        echo "<tr>
      <td>$i Tuesday</td>
      <td>$nexttue</td>
      </tr>";
        $temp +=  7;
      }
      ?>
    </table>
  </div>
</body>

</html>