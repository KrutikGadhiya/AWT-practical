<?php
class Session
{
  function __construct()
  {
    session_start();
  }

  function setError($error, $value)
  {
    $_SESSION[$error] = $value;
  }

  function getError($error = '')
  {
    if (trim($error) == '') {
      $data = '';
    } else {
      $data = @$_SESSION['err_code'];
    }
    return $data;
  }

  function resetError($error)
  {
    if (trim($error) == '') {
      @$_SESSION[] = '';
    }
    @$_SESSION[$error] = '';
  }
}

$session = new Session;
