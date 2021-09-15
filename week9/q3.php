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
    <button type="submit" name="submit" class="btn btn-primary">Click To combine</button>
  </form>
  <?php

  use function PHPSTORM_META\type;

  if (isset($_POST['submit'])) {
    $product_info = fopen('product_info.txt', 'r');
    $product_stock = fopen('product_stock.txt', 'r');
    $product_with_stock = fopen('product_with_stock.txt', 'w+');
    while (!feof($product_info)) {
      $line = fgets($product_info);
      if ($line === "\n")
        continue;
      $lineArr = explode(" ", $line);
      // print_r($lineArr);
      fseek($product_stock, 0);
      while (!feof($product_stock)) {
        $line2 = fgets($product_stock);
        if ($line2 === "\n")
          continue;
        $line2Arr = explode(" ", $line2);
        if (!empty($lineArr[1]) && !empty($line2Arr[0])) {
          // echo "<h4>" . $lineArr[1] . "=>" . $line2Arr[0] . "</h4>";
          // echo "<h4>" . gettype($lineArr[1]) . "</h4>";
          // echo "<h4>" . gettype($line2Arr[0]) . "</h4>";
          // echo "<h4>" . strcmp($lineArr[1], $line2Arr[0]) . "</h4>";
          $lineArr[1] = str_replace(array("\n", "\r"), '', $lineArr[1]);
          $line2Arr[1] = str_replace(array("\n", "\r"), '', $line2Arr[1]);
          if (strcmp($lineArr[1], $line2Arr[0]) == 0) {
            $newLine = $lineArr[0] . " " . $lineArr[1] . " " . $line2Arr[1] . "\n";
            // echo $newLine;
            fwrite($product_with_stock, $newLine);
          }
        }
      }
    }
    fseek($product_info, 0);
    fseek($product_stock, 0);
    fseek($product_with_stock, 0);
  ?>
    <div class="files">
      <div class="card">
        <h4 class="card-title">product_info file</h4>
        <?php
        while (!feof($product_info)) {
          $line = fgets($product_info);
          echo "<h5 class='text-muted'>$line</h5>";
        }
        ?>
      </div>
      <div class="card">
        <h4 class="card-title">product_stock file</h4>
        <?php
        while (!feof($product_stock)) {
          $line = fgets($product_stock);
          echo "<h5 class='text-muted'>$line</h5>";
        }
        ?>
      </div>
      <div class="card">
        <h4 class="card-title">product_with_stock file</h4>
      <?php
      while (!feof($product_with_stock)) {
        $line = fgets($product_with_stock);
        echo "<h5 class='text-muted'>$line</h5>";
      }
      fclose($product_info);
      fclose($product_stock);
      fclose($product_with_stock);
    }
      ?>
      </div>
    </div>
</body>

</html>