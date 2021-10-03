<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Attendence</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap");

    * {
      font-family: 'Roboto Condensed', sans-serif;
      box-sizing: border-box;
    }

    body {
      background-color: #f9fafc;
    }

    .nav {
      padding: 0.25em !important;
    }

    .nav>.nav-item>.nav-link {
      color: #fff !important;
      border-radius: 0.25em;
    }

    .nav>.nav-item:not(:last-child) {
      margin-right: 0.25em !important;
    }

    .nav>.nav-item>.nav-link:hover,
    .nav>.nav-item>.active {
      color: #212529 !important;
      background: #fff !important;
    }

    .login {
      width: 40vw !important;
    }

    .form {
      background: #fff;
      padding: 1.5em;
      border-radius: 0.25em !important;
      box-shadow: 0 2px 1px -1px rgb(0 0 0 / 20%), 0 1px 1px 0 rgb(0 0 0 / 14%), 0 1px 3px 0 rgb(0 0 0 / 12%);
    }

    /* table {
      border: 2px solid #000;
    } */
  </style>
</head>

<body>
  <ul class="nav justify-content-center fs-2 mb-3 bg-dark">
    <li class="nav-item">
      <a <?php if ($_SERVER['SCRIPT_NAME'] == "/week12/index.php") { ?> class="nav-link active" <?php }  ?> class="nav-link" aria-current="page" href="index.php">Add Student</a>
    </li>
    <li class="nav-item">
      <a <?php if ($_SERVER['SCRIPT_NAME'] == "/week12/allStudents.php") { ?> class="nav-link active" <?php   }  ?> class="nav-link" href="allStudents.php">View Student</a>
    </li>
    <!-- <li class="nav-item">
      <a <?php if ($_SERVER['SCRIPT_NAME'] == "/week12/fillAttendence.php") { ?> class="nav-link active" <?php   }  ?> class="nav-link" href="#">Fill Attendence</a>
    </li>
    <li class="nav-item">
      <a <?php if ($_SERVER['SCRIPT_NAME'] == "/week12/viewAttendence.php") { ?> class="nav-link active" <?php   }  ?> class="nav-link" href="#">View Attendence</a>
    </li> -->
  </ul>
  <!-- <?php echo "<h1>" . $_SERVER['SCRIPT_NAME'] . "</h1>"; ?> -->