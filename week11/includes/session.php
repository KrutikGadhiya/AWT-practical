<?php

class Session
{
  var $userName;
  var $userinfo;
  var $email;
  var $isLoggedIn;

  function startSession()
  {
    session_start();
  }
}
