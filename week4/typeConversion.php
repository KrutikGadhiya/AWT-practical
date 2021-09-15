<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    td,
    th {
      border: 1px solid #949494;
      padding: 8px;
      text-align: center;
    }

    th {
      background-color: lightcyan;
    }
  </style>
  <title>Experiments with data type conversion in PHP.</title>
</head>

<body>
  <table>
    <?php
    $value = 254.54;
    echo "<tr>
    <th>Type Conversion to</th>
    <th>($value) Converted value</th>
    <th>function()</th>
    <th>Type of \$value after Conversion</th>
    </tr>"
    ?>
    <?php
    $convert = floatval($value);
    $type = gettype($convert);
    echo "<tr>
    <td>float</td>
    <td>$convert</td>
    <td>floatval(\$value)</td>
    <td>$type</td>
    </tr>"
    ?>
    <?php
    $convert = intval($value);
    $type = gettype($convert);
    echo "<tr>
    <td>int</td>
    <td>$convert</td>
    <td>intval(\$value)</td>
    <td>$type</td>
    </tr>"
    ?>
    <?php
    $convert = strval($value);
    $type = gettype($convert);
    echo "<tr>
    <td>str</td>
    <td>$convert</td>
    <td>strval(\$value)</td>
    <td>$type</td>
    </tr>"
    ?>
    <?php
    $convert = boolval($value);
    $type = gettype($convert);
    echo "<tr>
    <td>bool</td>
    <td>$convert</td>
    <td>boolval(\$value)</td>
    <td>$type</td>
    </tr>"
    ?>
    <?php
    settype($value, "string");
    $type = gettype($value);
    echo "<tr>
    <td>string</td>
    <td>$value</td>
    <td>settype(\$value, 'string')</td>
    <td>$type</td>
    </tr>"
    ?>
    <?php
    $value = 1354;
    settype($value, "integer");
    $type = gettype($value);
    echo "<tr>
    <td>integer</td>
    <td>$value</td>
    <td>settype(\$value, 'integer')</td>
    <td>$type</td>
    </tr>"
    ?>
    <?php
    settype($value, "float");
    $type = gettype($value);
    echo "<tr>
    <td>float</td>
    <td>$value</td>
    <td>settype(\$value, 'float')</td>
    <td>$type</td>
    </tr>"
    ?>
    <?php
    settype($value, "boolean");
    $type = gettype($value);
    echo "<tr>
    <td>bool</td>
    <td>$value</td>
    <td>settype(\$value, 'boolean')</td>
    <td>$type</td>
    </tr>"
    ?>
    <?php
    settype($value, "null");
    $type = gettype($value);
    echo "<tr>
    <td>null</td>
    <td>$value</td>
    <td>settype(\$value, 'null')</td>
    <td>$type</td>
    </tr>"
    ?>
  </table>
</body>

</html>