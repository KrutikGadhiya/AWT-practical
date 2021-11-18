<?php
include('./database.php');
$pgUrl = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$url_components = parse_url($pgUrl);
if (isset($url_components['query'])) {
  parse_str($url_components['query'], $params);
  // echo $params['msg'];
  echo "<script> alert(" . $params['msg'] . ") </script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>19IT035 Practical Exam</title>
</head>

<body>
  <h1 class="text-center my-5">19IT035 Krutik Gadhiya</h1>
  <div style="width: 500px;" class="container p-3 bg-light">
    <form method="POST" action="process.php">
      <div class="mb-1">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" id="name">
      </div>
      <div class="mb-1">
        <label for="sub" class="form-label">Subject</label>
        <input type="text" name="subject" class="form-control" id="sub">
      </div>
      <div class="mb-1">
        <label for="cgpa" class="form-label">CGPA</label>
        <input type="text" name="CGPA" class="form-control" id="cgpa">
      </div>
      <div class="mb-1">
        <label for="depart" class="form-label">Department</label>
        <input type="text" name="department" class="form-control" id="depart">
      </div>
      <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  <div class="container">
    <?php
    $studList = $database->getStudentList();
    // print_r($studList);
    ?>
    <table class="table table-dark table-hover">
      <thead>
        <tr>
          <th scope="col">Sr.N0</th>
          <th scope="col">Name</th>
          <th scope="col">Subject</th>
          <th scope="col">CGPA</th>
          <th scope="col">Department</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($studList as $k => $v) {
          echo "<tr>
            <th scope='row'>" . $v['srno'] . "</th>
            <td>" . $v['fullname'] . "</td>
            <td>" . $v['sub'] . "</td>
            <td>" . $v['cgpa'] . "</td>
            <td>" . $v['department'] . "</td>
          </tr>";
        }
        ?>
      </tbody>
    </table>
  </div>

</body>

</html>