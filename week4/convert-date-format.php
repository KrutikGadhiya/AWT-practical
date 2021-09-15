<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Convert a date from yyyy-mm-dd to dd-mm-yyyy.</title>
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
      background-color: lightgreen;
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
  $today = date('Y-m-d');
  $timestamp = strtotime($today);
  $new_date = date("d-m-Y", $timestamp);
  echo "<h2>Todays date(YYY-MM-DD):<i> " . $today . "</i></h2>";
  echo "<h2>Todays date(DD-MM-YYYY):<i> " . $new_date . "</i></h2>";
  ?>
</body>

</html>