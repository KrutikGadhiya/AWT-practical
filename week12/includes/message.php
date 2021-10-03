<?php

class Messages
{
  function printMsg($error = '')
  {
    if ($error === true) {
      echo "<div class='alert alert-success alert-dismissable'>";
      echo "Operation was Successfull";
      echo "</div>";
    }
    if ($error === false) {
      echo "<div class='alert alert-danger alert-dismissable'>";
      echo "Something went Wrong";
      echo "</div>";
    }
    if ($error === '') {
      echo "$error";
    }
  }
}
