<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800;900&display=swap" rel="stylesheet">
  <title>String Functions/Methods</title>
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
    3) Explore and experiments with builtin string functions/methods  - 20 minimum 
  -->
  <h2>PHP - Builtin String Functions/Methods</h2>
  <div>
    <table>
      <?php
      $str1 = 'krutik';
      $str2 = 'gadhiya';
      echo "<tr>
      <td style='text-align: center;' colspan='2'>str1 = $str1</td>
      </tr>";
      ?>
      <?php
      // strlen() lenght of the string
      $temp = strlen($str1);
      echo "<tr>
      <td>strlen(\$str1);</td>
      <td>$temp</td>
      </tr>";
      ?>
      <?php
      // ucfirst() capatilise the first letter of first word
      $temp = ucfirst($str1 . " " . $str2);
      echo "<tr>
      <td>ucfirst(\$str1.' '.\$str2);</td>
      <td>$temp</td>
      </tr>";
      ?>
      <?php
      // ucword() capatilise the first letter of every word
      $temp = ucwords($str1 . " " . $str2);
      echo "<tr>
      <td>ucwords(\$str1.' '.\$str2);</td>
      <td>$temp</td>
      </tr>";
      ?>
      <?php
      // trim() remove the particular letter/word from the string
      $temp = trim($str1, 'k');
      echo "<tr>
      <td>trim(\$str1, 'k');</td>
      <td>$temp</td>
      </tr>";
      ?>
      <?php
      // substr() gets the substring from the given index 
      $temp = substr($str2, 2);
      echo "<tr>
      <td>substr(\$str1, 2);</td>
      <td>$temp</td>
      </tr>";
      ?>
      <?php
      // strstr() gets the substring from the first occurence of the given string 
      $temp = strstr($str1 . " " . $str2 . '!!!', 'gadhiya');
      echo "<tr>
      <td>strstr(\$str1.' '.\$str2.'!!!', 'gadhiya');</td>
      <td>$temp</td>
      </tr>";
      ?>
      <?php
      // strcmp() compares the strings and give 0 (same str),1 (greater than) or -1 (less than)
      $temp = strcmp($str1, $str2);
      echo "<tr>
      <td>substr(\$str1, \$str2);</td>
      <td>$temp</td>
      </tr>";
      ?>
      <?php
      // chop() Removes whitespace or other characters from the right end of a string
      $temp = chop($str2, 'gad');
      echo "<tr>
      <td>substr(\$str2, 'gad');</td>
      <td>$temp</td>
      </tr>";
      ?>
      <?php
      // bin2hex() Converts a string of ASCII characters to hexadecimal values
      $temp = bin2hex($str2);
      echo "<tr>
      <td>bin2hex(\$str2);</td>
      <td>$temp</td>
      </tr>";
      ?>
      <?php
      // hex2bin() Converts a string of hexadecimal values to ASCII characters
      $temp1 = hex2bin($temp);
      echo "<tr>
      <td>hex2bin($temp);</td>
      <td>$temp1</td>
      </tr>";
      ?>
    </table>
    <table>
      <?php
      echo "<tr>
      <td style='text-align: center;' colspan='2'>str2 = $str2</td>
      </tr>";
      ?>
      <?php
      // addslashes() Returns a string with backslashes in front of predefined characters
      $temp = addslashes($str1 . '"' . $str2 . '"');
      echo "<tr>
      <td>addslashes(\$str1.' \" '.\$str2.' \" ');</td>
      <td>$temp</td>
      </tr>";
      ?>
      <?php
      // chr() Returns a character from a specified ASCII value
      $temp = chr(65);
      echo "<tr>
      <td>chr(65);</td>
      <td>$temp</td>
      </tr>";
      ?>
      <?php
      // crypt() One-way string hashing
      $temp = crypt($str1 . " " . $str2, 'kk');
      echo "<tr>
      <td>crypt(\$str1.' '.\$str2, 'kk');</td>
      <td>$temp</td>
      </tr>";
      ?>
      <?php
      // str_shuffle() Randomly shuffles all characters in a string
      $temp = str_shuffle($str2);
      echo "<tr>
      <td>str_shuffle(\$str2);</td>
      <td>$temp</td>
      </tr>";
      ?>
      <?php
      // echo() Output one or more string
      echo "<tr>
      <td>echo(\$str2)</td>
      <td>$str2</td>
      </tr>";
      ?>
      <?php
      // lcfirst() Converts the first character of a string to lowercase
      $temp = lcfirst("Krutik Gadhiya");
      echo "<tr>
      <td>lcfirst('Krutik Gadhiya');</td>
      <td>$temp</td>
      </tr>";
      ?>
      <?php
      // str_word_count() Count the number of words in a string
      $temp = str_word_count($str1 . ' ' . $str2);
      echo "<tr>
      <td>str_word_count(\$str1 . ' ' . \$str2);</td>
      <td>$temp</td>
      </tr>";
      ?>
      <?php
      // strrev() reverse the string
      $temp = strrev($str1);
      echo "<tr>
      <td>strrev(\$str1);</td>
      <td>$temp</td>
      </tr>";
      ?>
      <?php
      // strtolower() Converts a string to lowercase letters
      $temp = strtolower($str1);
      echo "<tr>
      <td>strtolower(\$str1);</td>
      <td>$temp</td>
      </tr>";
      ?>
      <?php
      // strtoupper() Converts a string to uppercase letters
      $temp = strtoupper($str2);
      echo "<tr>
      <td>strtoupper(\$str2);</td>
      <td>$temp</td>
      </tr>";
      ?>
    </table>
  </div>
</body>

</html>