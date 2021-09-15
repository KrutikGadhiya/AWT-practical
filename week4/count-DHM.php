<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Count Number of days, hours, minutes from your last birthday.</title>
</head>
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
    background-color: lightcoral;
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

<body>
  <?php
  $date1 = '2021-03-31';
  $date2 = date('d-M-Y');
  $myLastBirthDay = date_create($date1);
  $today = date_create($date2);
  echo "<h2>My Birthday date:<i> " . date_format($myLastBirthDay, 'd-M-Y') . "</i></h2>";
  echo "<h2>Todays date:<i> " . date_format($today, 'd-M-Y') . "</i></h2>";
  echo "<h2>Number of days:<i> " . abs(date_diff($today, $myLastBirthDay)->format("%R%a")) . " Day(s)</i></h2>";
  ?>
  <?php
  $timestamp1 = strtotime($date1);
  $timestamp2 = strtotime($date2);
  $hour = abs($timestamp2 - $timestamp1) / (60 * 60);
  echo "<h2>Number of hours: <i>" . $hour . " Hour(s)</i></h2>";
  ?>
  <?php
  $timestamp1 = strtotime($date1);
  $timestamp2 = strtotime($date2);
  $minutes = $hour * 60;
  echo "<h2>Number of Minutes: <i>" . $minutes . " Minute(s)</i></h2>";
  ?>
</body>

</html>