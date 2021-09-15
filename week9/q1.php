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
  <form method="POST">
    <button type="submit" name="submit" class="btn btn-primary">Click To split file</button>
  </form>
  <?php
  if (isset($_POST['submit'])) {
    $emp_record = fopen('emp_records.txt', 'r');
    $odd_emp_record = fopen('odd_emp_records.txt', 'w+');
    $even_emp_record = fopen('even_emp_records.txt', 'w+');
    $i = 0;
    while (!feof($emp_record)) {
      $line = fgets($emp_record);
      if ($i % 2 == 0) {
        fwrite($even_emp_record, $line);
      } else {
        fwrite($odd_emp_record, $line);
      }
      $i++;
    }
    fseek($emp_record, 0);
    fseek($even_emp_record, 0);
    fseek($odd_emp_record, 0);
  ?>
    <div class="files">
      <div class="card">
        <h4 class="card-title">emp_records file</h4>
        <?php
        while (!feof($emp_record)) {
          $line = fgets($emp_record);
          echo "<h5 class='text-muted'>$line</h5>";
        }
        ?>
      </div>
      <div class="card">
        <h4 class="card-title">even_emp_records file</h4>
        <?php
        while (!feof($even_emp_record)) {
          $line = fgets($even_emp_record);
          echo "<h5 class='text-muted'>$line</h5>";
        }
        ?>
      </div>
      <div class="card">
        <h4 class="card-title">odd_emp_records file</h4>
      <?php
      while (!feof($odd_emp_record)) {
        $line = fgets($odd_emp_record);
        echo "<h5 class='text-muted'>$line</h5>";
      }
      fclose($emp_record);
      fclose($even_emp_record);
      fclose($odd_emp_record);
    }
      ?>
      </div>
    </div>
</body>

</html>