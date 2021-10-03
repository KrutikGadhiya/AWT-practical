<?php
include('includes/session.php');
include('includes/message.php');
include_once('components/header.php');

$err = new Messages;
?>
<div class="content">
  <h1 class="text-center">Add Student</h1>
  <div class="container login my-5">
    <?php
    $err->printMsg($session->getError("err_code"));
    // print_r($_SESSION);
    $session->resetError('err_code');
    ?>
    <form class="form" action="includes/process.php" method="POST">
      <div class="mb-3">
        <label for="firstName" class="form-label">First Name</label>
        <input type="text" name="fname" class="form-control" id="firstName">
      </div>
      <div class="mb-3">
        <label for="lastName" class="form-label">Last Name</label>
        <input type="text" name="lname" class="form-control" id="lastName">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="email">
      </div>
      <button type="submit" name="addStudent" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
<?php include_once('./components/footer.php'); ?>