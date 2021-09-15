<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="form.css">
  <title>Document</title>
</head>

<body>
  <?php
  $emailRegx = "/^(?!-)[a-zA-Z0-9_.\-]+@[a-zA-Z0-9.\-]+.[a-z]{2,15}/";
  $domainRegx = "/^((?!-)[a-zA-Z0-9\-]{1,63}(?<!-)\.)+[A-Za-z]{2,6}$/";
  // $ipRegex = "/^([0-9]{1,3})\.([0-9]{1,3})\.([0-9]{1,3})\.([0-9]{1,3})$/";
  $ipRegex = "/^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/";
  $mobileRegex = "/^((?!0)[0-9]{10})$/";
  $passRegex = '/^([a-zA-Z0-9_-]{8,16})$/';
  $userRegex = "/^(^[a-zA-Z][a-zA-Z0-9_\-\.]{2,16})$/";

  $Regex = array("Name" => $userRegex, "Email" => $emailRegx, "pass" => $passRegex, "Mobile" => $mobileRegex, "Domain" => $domainRegx, "IP" => $ipRegex);
  ?>
  <div class="form">
    <form method="POST">
      <div class="form-control">
        <label for="Name">Name: </label>
        <input required id="Name" name="Name" type="text">
      </div>
      <div class="form-control">
        <label for="Email">Email: </label>
        <input required id="Email" name="Email" type="email">
      </div>
      <div class="form-control">
        <label for="pass">Password: </label>
        <input required id="pass" name="pass" type="password">
      </div>
      <div class="form-control">
        <label for="Mobile">Mobile Number: </label>
        <input required id="Mobile" name="Mobile" type="text">
      </div>
      <div class="form-control">
        <label for="Domain">Domain: </label>
        <input required id="Domain" name="Domain" type="text">
      </div>
      <div class="form-control">
        <label for="IP">IP: </label>
        <input required id="IP" name="IP" type="text">
      </div>
      <div class="form-control">
        <button type="submit">Submit</button>
      </div>
    </form>
  </div>
  <div class="output">
    <h1>Submited form</h1>
    <table>
      <?php
      function matchRegex($exp, $val)
      {
        if (preg_match_all($exp, $val))
          return "Match";
        else
          return "Did not Match";
      }
      $data = $_POST;
      foreach ($data as $k => $v) {
        $result = matchRegex($Regex[$k], $v);
        echo "<tr>
      <td>$k</td>
      <td>$v</td>
      <td>$result</td>
      </tr>";
      }
      ?>
      ?>
    </table>
  </div>
</body>

</html>