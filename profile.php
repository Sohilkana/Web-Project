<?php
  // ---------------------------login user session start----------------------------
  include
  session_start();
  error_reporting(0);
  $user = $_SESSION['user'];
  echo $user;
//   $last_name = $_SESSION['lname'];
  // $_SESSION['u'] = $user;
  ?>
  <?php
  // -----------user authorized identification and user session Ending block--------------
  if ($user == true) {
  } else {
    header('location:Allperfume.php');
  }
  ?>