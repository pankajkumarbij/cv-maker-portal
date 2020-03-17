<?php
   session_start();
   unset($_SESSION["uname"]);
   ?>
   <script>alert('you are successfully log out');</script>
   <?php
   header('Refresh: 1; URL = signin.php');
?>