<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>http methods GET, POST and REQUEST in PHP</title>
  <style>
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    body {
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: lightseagreen;
    }

    .form-control {
      display: flex;
      justify-content: space-between;
      padding: 0.25em 0;
    }

    label {
      font-size: 1.3em;
    }

    .form-control input {
      font-size: 1.3em;
      padding: 0.125em;
      width: 70%;
      outline: none;
      border: 1px solid #000;
      border-radius: 0.2em;
      transition: 0.2s ease-in-out;
    }

    .submit {
      justify-content: center;
    }

    .submit input {
      width: 100%;
      transition: 0.2s ease-in-out;
    }

    .submit input:hover {
      background-color: #999;
      cursor: pointer;
    }

    table {
      border-collapse: collapse;
      font-size: 1.3em;
    }

    tr,
    td {
      border: 1px solid #949494;
      padding: 8px;
    }

    td {
      padding: 0.5em 1em;
    }

    .output {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
  </style>
</head>

<body>
  <form method="POST">
    <div class="form-control">
      <label for="Email">Email: </label>
      <input type="email" name="Email" id="Email">
    </div>
    <div class="form-control">
      <label for="Password">Password: </label>
      <input type="password" name="Password" id="Email">
    </div>
    <div class="form-control submit">
      <input type="submit" value="Submit">
    </div>
  </form>
  <div class="output">
    <table>
      <?php
      echo "<h3>GET</h3>";
      foreach ($_GET as $k => $v) {
        echo "<tr>
        <td>$k</td>
        <td>$v</td>
        </tr>";
      }
      ?>
    </table>
    <table>
      <?php
      echo "<h3>POST</h3>";
      foreach ($_POST as $k => $v) {
        echo "<tr>
        <td>$k</td>
        <td>$v</td>
        </tr>";
      }
      ?>
    </table>
    <table>
      <?php
      echo "<h3>REQUEST</h3>";
      foreach ($_REQUEST as $k => $v) {
        echo "<tr>
        <td>$k</td>
        <td>$v</td>
        </tr>";
      }
      ?>
    </table>
  </div>
</body>

</html>