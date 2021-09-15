<?php
session_start();
if (!empty($_POST['product'])) {
  $index = count($_SESSION['products']);
  // print_r($_POST);
  // print_r($_SESSION);
  switch ($_POST['product']) {
    case 'Mobile':
      if (empty($_SESSION['products']['Mobile']))
        $_SESSION['products']['Mobile'] = 0;
      if ($_SESSION['products']['Mobile'] > 0)
        $_SESSION['products']['Mobile'] += $_POST['value'];
      break;
    case 'Laptop':
      if (empty($_SESSION['products']['Laptop']))
        $_SESSION['products']['Laptop'] = 0;
      if ($_SESSION['products']['Laptop'] > 0)
        $_SESSION['products']['Laptop'] += $_POST['value'];
      break;
    case 'TV':
      if (empty($_SESSION['products']['TV']))
        $_SESSION['products']['TV'] = 0;
      if ($_SESSION['products']['TV'] > 0)
        $_SESSION['products']['TV'] += $_POST['value'];
      break;
    case 'Bag':
      if (empty($_SESSION['products']['Bag']))
        $_SESSION['products']['Bag'] = 0;
      if ($_SESSION['products']['Bag'] > 0)
        $_SESSION['products']['Bag'] += $_POST['value'];
      break;

    default:
      # code...
      break;
  }
  // print_r($_SESSION['products']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>MY Cart</title>
</head>

<body>
  <?php
  // print_r($_SESSION);
  if (isset($_COOKIE['email'])) {
  ?>
    <h1 class='my-5'><i class="bi bi-cart3 me-3"></i>My Cart
      <a href='logout.php' class='ms-5 btn btn-danger'>Logout</a>
      <a href='cart.php' class='ms-5 btn btn-danger'>Add Products</a>
    </h1>

    <div class="cart">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Item</th>
            <th scope="col">Count</th>
            <th scope="col">Price (/Piece)</th>
            <th scope="col">Price (total)</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php
          $total_price = 0;
          foreach ($_SESSION['products'] as $key => $val) {
            echo "<tr>
            <td>$key</td>
            <td>$val</td>
            <td>&#8377;" . $_SESSION['products_price'][$key] . "</td>
            <td>&#8377;" . $_SESSION['products_price'][$key] * $val . "</td>
            <td><form method='POST'>
            <div class='input-group mb-3'>
              <input style='display: none' type='number' class='form-control' name='value' value='-1' placeholder='1'>
              <button class='btn btn-primary' type='submit' name='product' value=" . $key . ">Delete</button>
            </div>
          </form></td>
          </tr>";
            $total_price += $_SESSION['products_price'][$key] * $val;
          }
          ?>
          <tr style="text-align: center; background: #ccc; font-weight: 600;">
            <td colspan="2">Total: </td>
            <td colspan="3">&#8377;<?php echo $total_price ?></td>
          </tr>
        </tbody>

      </table>
    </div>

  <?php
  } else {
  ?>
    <h1 class='my-5'>You Need To Be LoggedIn to access this Page!!!</h1>
    <a class='btn btn-primary' href='login.php'>Login Again</a>
  <?php
  }
  ?>
</body>

</html>