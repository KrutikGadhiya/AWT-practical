<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add/Subtract the number of days from a given date.</title>
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

    h2 {
      margin: 0.25em 0;
    }

    i {
      color: #fff;
    }
  </style>
</head>

<body>
  <?php
  $dt = date('Y-m-d');
  echo '<h2>Original date :<i> ' . $dt . "</i></h2>\n";
  $no_days = 40;
  $bdate = strtotime("-" . $no_days . " days", strtotime($dt));
  $adate = strtotime("+" . $no_days . " days", strtotime($dt));
  echo '<h2>After Substracting 40 days :<i> ' . date("Y-m-d", $bdate) . "</i></h2>\n";
  echo '<h2>After Adding  40 days :<i> ' . date("Y-m-d", $adate) . "</i></h2>\n";
  ?>
</body>

</html>