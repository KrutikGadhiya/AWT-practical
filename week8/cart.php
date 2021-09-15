<?php session_start() ?>
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
  <title>Cart</title>
</head>

<body>
  <?php
  if (isset($_POST['email']))
    if (!($_POST['email'] == $_SESSION['email'] && $_POST['password'] == $_SESSION['password'])) {
      echo "<h1 class='my-5'>Wrong E-mail or Password</h1>";
      echo "<a class='btn btn-primary' href='login.php'>Click here to Login Again</a>";
    } else {
      if (!empty($_GET['product'])) {
        $index = count($_SESSION['products']);
        // print_r($_GET);
        // print_r($_SESSION);
        switch ($_GET['product']) {
          case 'Mobile':
            if (empty($_SESSION['products']['Mobile']))
              $_SESSION['products']['Mobile'] = 0;
            $_SESSION['products']['Mobile'] += $_GET['value'];
            break;
          case 'Laptop':
            if (empty($_SESSION['products']['Laptop']))
              $_SESSION['products']['Laptop'] = 0;
            $_SESSION['products']['Laptop'] += $_GET['value'];
            break;
          case 'TV':
            if (empty($_SESSION['products']['TV']))
              $_SESSION['products']['TV'] = 0;
            $_SESSION['products']['TV'] += $_GET['value'];
            break;
          case 'Bag':
            if (empty($_SESSION['products']['Bag']))
              $_SESSION['products']['Bag'] = 0;
            $_SESSION['products']['Bag'] += $_GET['value'];
            break;
        }
        // print_r($_SESSION['products']);
      }

      if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
        echo "<h1 class='my-5'>Welcome: " . $_SESSION['username'] . "<a href='logout.php' class='ms-5 btn btn-danger'>Logout</a></h1>";
  ?>
      <?php
        if (isset($_SESSION['products'])) {
          echo "<table style='width: 50%;' class='table'><tr>";
          foreach ($_SESSION['products'] as $k => $v) {
            echo "<th class='table-dark'>$k: $v</th>";
          }
          echo "</tr></table>";
        }
      ?>
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="card p-2">
              <div class="card-body">
                <h5 class="card-title">Mobile</h5>
                <p class="card-text">price: &#8377;15,000</p>
                <form>
                  <div class="input-group mb-3">
                    <input type="number" class="form-control" min='1' name="value" value="1" placeholder="1">
                    <button class="btn btn-primary" type="submit" name="product" value="Mobile">Add</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card p-2">
              <div class="card-body">
                <h5 class="card-title">Laptop</h5>
                <p class="card-text">price: &#8377;50,000</p>
                <form>
                  <div class="input-group mb-3">
                    <input type="number" class="form-control" min='1' name="value" value="1" placeholder="1">
                    <button class="btn btn-primary" type="submit" name="product" value="Laptop">Add</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card p-2">
              <div class="card-body">
                <h5 class="card-title">TV</h5>
                <p class="card-text">price: &#8377;30,000</p>
                <form>
                  <div class="input-group mb-3">
                    <input type="number" class="form-control" min='1' name="value" value="1" placeholder="1">
                    <button class="btn btn-primary" type="submit" name="product" value="TV">Add</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card p-2">
              <div class="card-body">
                <h5 class="card-title">Bag</h5>
                <p class="card-text">price: &#8377;1000</p>
                <form>
                  <div class="input-group mb-3">
                    <input type="number" class="form-control" min='1' name="value" value="1" placeholder="1">
                    <button class="btn btn-primary" type="submit" name="product" value="Bag">Add</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="row my-5 py-5">
          <div class="col-12 text-center">
            <a href="my_cart.php" style="width: max-content; font-size: 1.6em;" class="btn btn-success p-3"><i class="bi bi-cart3 me-3"></i>My Cart</a>
          </div>
        </div>
      </div>

    <?php
      } else {
    ?>
      <h1 class='my-5'>You Need To Be LoggedIn to access this Page!!!</h1>
      <a class='btn btn-primary' href='login.php'>Login Again</a>
  <?php
      }
    }
  ?>
</body>

</html>