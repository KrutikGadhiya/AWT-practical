<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>emp to even and odd</title>
</head>

<body>
  <div class="q2">
    <div class="card">
      <form method="POST">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">ID</label>
          <input type="text" name="id" class="form-control">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">First Name</label>
          <input type="text" name="fname" class="form-control">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Last Name</label>
          <input type="text" name="lname" class="form-control">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" name="email" class="form-control">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Add Student</button>
      </form>
    </div>
    <?php
    $student_record = fopen('student_records.txt', 'a+');
    if (isset($_POST['submit'])) {
      $line = $_POST['id'] . " " . $_POST['fname'] . " " . $_POST['lname'] . " " . $_POST['email'] . "\n";
      fwrite($student_record, $line);
      fseek($student_record, 0);
    ?>
      <!-- <div class="files"> -->
      <div class="card">
        <h4 class="card-title">student_records file</h4>
      <?php
      while (!feof($student_record)) {
        $line = fgets($student_record);
        echo "<h5 class='text-muted'>$line</h5>";
      }
      fclose($student_record);
    }
      ?>
      </div>
      <!-- </div> -->
  </div>
</body>

</html>