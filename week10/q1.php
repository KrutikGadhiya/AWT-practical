<?php
session_start();
if (!isset($_SESSION['todo'])) {
  $_SESSION['todo'] = array();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>class and object</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="main">
    <h3 class="text-center">Demonstrate the Concept of Class and Object with suitable example. [ constructor/destructor]</h3>
    <form method="POST">
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Todo</label>
        <input type="text" class="form-control" name="todo" id="todo">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
      <button type="submit" name="clear" class="btn btn-primary">Clear Todo</button>
    </form>
    <?php
    class Todo
    {
      var $id;
      var $todo;
      public function __construct($id, $todo)
      {
        $this->id = $id;
        $this->todo = $todo;
      }
      public function __destruct()
      {
      }
      public function getTodo()
      {
        // echo "<p>$this->id: $this->todo</p>";
        return $this->todo;
      }
    }

    ?>
    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Todo</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if (isset($_POST['clear'])) {
          $_SESSION['todo'] = array();
        } else {
          if (isset($_POST['todo'])) {
            $toodoo = new Todo((count($_SESSION['todo']) + 1), $_POST['todo']);
            array_push($_SESSION['todo'], $toodoo->getTodo());
          }
          if (isset($_SESSION['todo'])) {
            foreach ($_SESSION['todo'] as $k => $v) {
              echo "<tr>
            <td>$k</td>
            <td>$v</td>
          </tr>";
            }
          }
        }
        ?>
      </tbody>
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>