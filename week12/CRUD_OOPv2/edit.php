<?php
$page_title = "Edit User";
include_once 'classes/database.php';
include_once 'classes/constants.php';
include_once 'classes/user.php';

include_once 'initial.php';
?>


<?php

// isset() is a PHP function used to verify if ID is there or not
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR! ID not found!');
// instantiate user object
$user = new User($db);
$user->id = $id;
$user->getUser();

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
    <title>Demo CRUD - OOP</title>
</head>

<body>

    <div class="container">
        <?php include('./includes/menu.php'); ?>
        <div class="row" style="height:90vh;">
            <div class="col-12">
                <form action='actions/act_update.php?id=<?= $id; ?>' method='post'>
                    <table class='table table-hover table-responsive table-bordered'>
                        <tr>
                            <td>First Name</td>
                            <td><input type='text' name='firstname' value='<?= $user->firstname; ?>'
                                    class='form-control' placeholder="Enter First Name" required></td>
                        </tr>
                        <tr>
                            <td>Last Name</td>
                            <td><input type='text' name='lastname' value='<?php echo $user->lastname; ?>'
                                    class='form-control' placeholder="Enter Last Name" required></td>
                        </tr>
                        <tr>
                            <td>Email Address</td>
                            <td><input type='email' name='email' value='<?php echo $user->email; ?>'
                                    class='form-control' placeholder="Enter Email Address" required></td>
                        </tr>
                        <tr>
                            <td>Mobile Number</td>
                            <td><input type='number' name='mobile' value='<?php echo $user->mobile; ?>'
                                    class='form-control' placeholder="Enter Mobile Number" required></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <button type="submit" class="btn btn-success">
                                    <span class=""></span> Update
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