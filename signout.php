<?php
 session_start();
 session_unset();
 session_destroy();
 echo "<script> location.href='Assignment9.php'; </script>";
?>