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
        <button type="submit" name="submit" class="btn btn-primary">Find Product</button>
      </form>
    </div>
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th>Product</th>
          <th>Product Code</th>
          <th>Product Stock</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php
          $product_with_stock = fopen('product_with_stock.txt', 'r');
          $flag = false;
          if (isset($_POST['submit'])) {
            // fseek($student_record, 0);
            while (!feof($product_with_stock)) {
              $line = fgets($product_with_stock);
              $lineArr = explode(" ", $line);
              if (!empty($lineArr[1]))
                if ($_POST['id'] == $lineArr[1]) {
                  echo "<td>" . $lineArr[0] . "</td>";
                  echo "<td>" . $lineArr[1] . "</td>";
                  echo "<td>" . $lineArr[2] . "</td>";
                  $flag = true;
                  break;
                }
            }
            if (!$flag) {
              echo "<td> - </td>";
              echo "<td> - </td>";
              echo "<td> - </td>";
            }
          }
          fclose($product_with_stock);
          ?>
        </tr>
      </tbody>
    </table>
  </div>
</body>

</html>