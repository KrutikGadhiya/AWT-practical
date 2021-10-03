<?php
include('includes/session.php');
include('includes/students.php');
include_once('components/header.php');
?>
<?php
$id = isset($_GET['id']) ? $_GET['id'] : die('ID not found!!');
$student = $student->getStudent($id);
?>
<div class="content">
  <h1 class="text-center">Update Student</h1>
  <div class="container login my-5">
    <form class="form" action="includes/process.php" method="POST">
      <div class="mb-3">
        <label for="firstName" class="form-label">First Name</label>
        <input type="text" name="fname" value=<?php echo $student['firstName']; ?> class="form-control" id="firstName">
      </div>
      <div class="mb-3">
        <label for="lastName" class="form-label">Last Name</label>
        <input type="text" name="lname" value=<?php echo $student['lastName']; ?> class="form-control" id="lastName">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" name="email" value=<?php echo $student['email']; ?> class="form-control" id="email">
      </div>
      <input type="text" hidden value=<?php echo $id; ?> name='id'>
      <button type="submit" name="updateStudent" class="btn btn-info">Update</button>
    </form>
  </div>
</div>

<?php include_once('components/footer.php'); ?>