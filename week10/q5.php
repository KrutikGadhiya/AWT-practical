<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Polymorphism</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container text-center">
    <?php
    class Faculty
    {
      public function display()
      {
        echo "<h1>Hello! From Faculty </h1>";
      }
    }
    class ITFaculty extends Faculty
    {
      public function display()
      {
        echo "<h1>Hello! From IT Faculty </h1>";
      }
    }
    $faculty = new Faculty;
    $itFaculty = new ITFaculty;

    $faculty->display();
    $itFaculty->display();
    ?>
  </div>
</body>

</html>