<?php
//start the session
      session_start();
      //log out the user
      session_destroy();
      //redirect to the home page
      header("Location:home.php");
?>