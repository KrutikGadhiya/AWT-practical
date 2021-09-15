<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800;900&display=swap" rel="stylesheet">
  <title>Document</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      display: flex;
      flex-direction: column;
      /* justify-content: center; */
      align-items: center;
      padding: 1em 3em;
      background-color: #ebebd3;
    }

    body h2 {
      margin-bottom: 2em;
      text-align: center;
    }

    table {
      border-collapse: collapse;
    }

    tr,
    td {
      border: 1px solid #000;
      padding: 8px;
    }

    tr {
      background-color: #ebebd3;
    }

    tr:nth-child(even) {
      background-color: #cacaca;
    }

    ul {
      margin-bottom: 2em;
    }

    div {
      display: flex;
      width: 70%;
      justify-content: space-between;
    }

    body table td {
      padding: 0.5em 1em;
    }
  </style>
</head>

<body>
  <!--
    Experiments with following PHP Operators.
    Arithmetic operators
    Assignment operators
    Comparison operators
    Increment/Decrement operators
    Logical operators (AND, OR, NOT)
    String operators
    Conditional assignment operators
    Bitwise operators
  -->
  <h2>Operators in PHP</h2>
  <table>
    <tr>
      <td>Arithmetic Operator<br>(+, -, /, *, %, **)</td>
      <td>
        <table>
          <?php
          $x = 10;
          $y = 20;
          $temp = $x + $y;
          echo "<tr>
          <td>Addition</td>
          <td>$x + $y = $temp</td>
          </tr>";
          ?>
          <?php
          $temp = $x - $y;
          echo "<tr>
          <td>Subtraction</td>
          <td>$x - $y = $temp</td>
          </tr>";
          ?>
          <?php
          $temp = $x * $y;
          echo "<tr>
          <td>Multiplication</td>
          <td>$x * $y = $temp</td>
          </tr>";
          ?>
          <?php
          $temp = $x / $y;
          echo "<tr>
          <td>Division</td>
          <td>$x / $y = $temp</td>
          </tr>";
          ?>
          <?php
          $temp = $x % $y;
          echo "<tr>
          <td>Modulo</td>
          <td>$x % $y = $temp</td>
          </tr>";
          ?>
          <?php
          $temp = $x ** $y;
          echo "<tr>
          <td>Power/Exponent</td>
          <td>$x ** $y = $temp</td>
          </tr>";
          ?>
        </table>
      </td>
    </tr>
    <tr>
      <td>Assignment Operator<br>(=, +=, -=, *=, /=, %=)</td>
      <td>
        <table>
          <?php
          $temp1 = $temp;
          $temp = $x;
          echo "<tr>
          <td>Simple Assignment</td>
          <td>\$temp = \$x: $temp</td>
          </tr>";
          ?>
          <?php
          $temp1 = $temp;
          $temp += $x;
          echo "<tr>
          <td> += </td>
          <td>$temp1 += $x: $temp</td>
          </tr>";
          ?>
          <?php
          $temp1 = $temp;
          $temp *= $x;
          echo "<tr>
          <td> *= </td>
          <td>$temp1 *= $x: $temp</td>
          </tr>";
          ?>
          <?php
          $temp1 = $temp;
          $temp /= $y;
          echo "<tr>
          <td> /= </td>
          <td>$temp1 /= $y: $temp</td>
          </tr>";
          ?>
          <?php
          $temp1 = $temp;
          $temp -= $y;
          echo "<tr>
          <td> -= </td>
          <td>$temp1 -= $y: $temp</td>
          </tr>";
          ?>
          <?php
          $temp1 = $temp;
          $temp %= $x;
          echo "<tr>
          <td> %= </td>
          <td>$temp1 %= $x: $temp</td>
          </tr>";
          ?>
        </table>
      </td>
    </tr>
    <tr>
      <td>Comparison Operator<br>( ==, ===, !=, <,>, <=,>= )</td>
      <td>
        <table>
          <?php
          if ($x == $y) {
            $temp = "same";
          } else {
            $temp = "different";
          }
          echo "<tr>
          <td>== (equals)</td>
          <td>\$x == \$y: $temp</td>
          </tr>";
          ?>
          <?php
          if ($x === $y) {
            $temp = "exactly same";
          } else {
            $temp = "exactly different";
          }
          echo "<tr>
          <td>=== (identical)</td>
          <td>\$x == \$y: $temp</td>
          </tr>";
          ?>
        </table>
      </td>
    </tr>
    <tr>
      <td>Logical Operator<br>(&& - and, || - or, ! - not, xor)</td>
      <td>
        <table>
          <?php
          echo "<tr>
          <td>&& - and</td>
          <td>\$x && \$y: true if both are true</td>
          </tr>";
          ?>
          <?php
          echo "<tr>
          <td>|| - or</td>
          <td>\$x || \$y: true if any one is true</td>
          </tr>";
          ?>
          <?php
          echo "<tr>
          <td>xor - exclusive or</td>
          <td>\$x xor \$y: if one true then true else false</td>
          </tr>";
          ?>
        </table>
      </td>
    </tr>
    <tr>
      <td>Increment-Decrement Operator<br>(++, --)</td>
      <td>
        <table>
          <?php
          $temp = $x++;
          echo "<tr>
          <td>++ (Increment)</td>
          <td>\$temp = \$x++: $temp</td>
          </tr>";
          ?>
          <?php
          $temp = $y--;
          echo "<tr>
          <td>-- (Decrement)</td>
          <td>\$temp = \$y--: $temp</td>
          </tr>";
          ?>
        </table>
      </td>
    </tr>
    <tr>
      <td>String Operator<br>(., .=)</td>
      <td>
        <table>
          <?php
          $str1 = 'kk';
          $str2 = 'gg';
          $temp1 = $str1 . $str2;
          echo "<tr>
          <td>. (string concatenation)</td>
          <td>\$temp1 = \$str1.\$str2: $temp1</td>
          </tr>";
          ?>
          <?php
          $temp1 .= $temp1;
          echo "<tr>
          <td>.= (concatenation assignment)</td>
          <td>\$temp1 .= \$temp1: $temp1</td>
          </tr>";
          ?>
        </table>
      </td>
    </tr>
    <tr>
      <td>Bitwise Operator<br>(&, |, ^, <<,>>, ~)</td>
      <td>
        <table>
          <?php
          $temp = $x & $y;
          echo "<tr>
          <td>& (bitwise and)</td>
          <td>\$temp = \$x & \$y: $temp</td>
          </tr>";
          ?>
          <?php
          $temp = $x | $y;
          echo "<tr>
          <td>| (bitwise or)</td>
          <td>\$temp = \$x | \$y: $temp</td>
          </tr>";
          ?>
          <?php
          $temp = $x ^ $y;
          echo "<tr>
          <td>^ (bitwise xor)</td>
          <td>\$temp = \$x ^ \$y: $temp</td>
          </tr>";
          ?>
          <?php
          $temp = $x << 2;
          echo "<tr>
          <td><< (shift left)</td>
          <td>\$temp = \$x << 2: $temp</td>
          </tr>";
          ?>
          <?php
          $temp = $y >> 2;
          echo "<tr>
          <td>>> (shift right)</td>
          <td>\$temp = \$y >> 2: $temp</td>
          </tr>";
          ?>
          <?php
          $temp = ~$x;
          echo "<tr>
          <td>~ (bitwise not)</td>
          <td>\$temp = ~ \$x: $temp</td>
          </tr>";
          ?>
        </table>
      </td>
    </tr>
  </table>
</body>

</html>