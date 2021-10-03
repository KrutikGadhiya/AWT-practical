<?php
$page_title = "Create User";
include_once 'classes/database.php';
include_once 'classes/constants.php';
include_once 'initial.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <title>Demo CRUD - OOP - <?= $page_title ?></title>
</head>

<body>
    <div class="container">
        <?php include('./includes/menu.php'); ?>
        <div class="row">
            <div class="col-12">
                <!-- Bootstrap Form for creating a user -->
                <form action='./actions/act_create.php' role="form" method='post'>
                    <table class='table table-hover table-responsive table-bordered'>
                        <tr>
                            <td>First Name</td>
                            <td><input type='text' name='firstname' class='form-control' placeholder="Enter First Name"
                                    required></td>
                        </tr>
                        <tr>
                            <td>Last Name</td>
                            <td><input type='text' name='lastname' class='form-control' placeholder="Enter Last Name"
                                    required></td>
                        </tr>
                        <tr>
                            <td>Email Address</td>
                            <td><input type='email' name='email' class='form-control' placeholder="Enter Email Address "
                                    required></td>
                        </tr>
                        <tr>
                            <td>Mobile Number</td>
                            <td><input type='number' name='mobile' class='form-control'
                                    placeholder="Enter Mobile Number" required></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <button type="submit" class="btn btn-primary">
                                    <span class="glyphicon glyphicon-plus"></span> Create
                                </button>
                            </td>
                        </tr>

                    </table>
                </form>
            </div>
        </div>
        <?php include('./includes/footer.php'); ?>
    </div>
</body>

</html>