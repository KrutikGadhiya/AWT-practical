<?php
include('includes/session.php');
include('includes/students.php');
include('includes/message.php');
include('components/header.php');

$err = new Messages;
?>

<div class="container">
  <?php
  $err->printMsg($session->getError("err_code"));
  // print_r($_SESSION);
  $session->resetError('err_code');
  ?>
  <table class="table table-bordered bg-white">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Email</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $list = $student->getStudentList();
      // print_r($list);
      foreach ($list as $k => $val) {
        echo "<tr><th>" . $val['id'] . "</th>
          <td>" . $val['firstName'] . "</td>
          <td>" . $val['lastName'] . "</td>
          <td>" . $val['email'] . "</td>
          <td>
            <a class='btn btn-warning' href='update.php?id=" . $val['id'] . "'><i class='bi bi-pencil-square text-white'></i></a>
            <a class='btn btn-danger' href='./includes/process.php?delId=" . $val['id'] . "'><i class='bi bi-trash'></i></a>
          </td>
          </tr>";
      }
      ?>
    </tbody>
  </table>
</div>

<?php include('components/footer.php') ?>