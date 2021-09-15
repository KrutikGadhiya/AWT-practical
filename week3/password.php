<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800;900&display=swap" rel="stylesheet">
  <title>Password</title>
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

    ul {
      margin-bottom: 2em;
    }

    body table td {
      padding: 0.5em 1em;
    }
  </style>
</head>

<body>
  <p>Get Password from PHP variable & Display following info in tabl</p>
  <ul>
    <li>Count Total Characters</li>
    <li>Count Total Number of digits</li>
    <li>Count Total Special Characters</li>
    <li>Display Password strength
      <ul>
        <li>Not Acceptable</li>
        <li>Weak</li>
        <li>Strong</li>
      </ul>
    </li>
  </ul>
  <table>
    <?php
    $password = "krutik2001!@#";
    $totalChar = strlen($password);
    $totalDigits = preg_match_all("/[0-9]/", $password);
    $totalSpecialChar = preg_match_all("/[$&+,:;=?@#|'<>.-^*()%!]/", $password) - $totalDigits;
    $passStrength = 'Not Acceptable';
    $color = '#e74c3c';

    if ($totalChar > 8 && ($totalDigits == 0 || $totalSpecialChar == 0)) {
      $passStrength = "Week";
      $color = '#f1c40f';
    }
    if ($totalChar > 8 && $totalDigits != 0 && $totalSpecialChar != 0) {
      $passStrength = "Strong";
      $color = '#2ecc71';
    }


    echo "<tr>
        <td>Total Characters</td>
        <td>$totalChar</td>
      </tr>
      <tr>
        <td>Total Digits</td>
        <td>$totalDigits</td>
      </tr>
      <tr>
        <td>Total Special Characters</td>
        <td>$totalSpecialChar</td>
      </tr>
      <tr>
        <td>Password Strength</td>
        <td style='background-color: $color;'>$passStrength</td>
      </tr>"
    ?>
  </table>
</body>

</html>