<?php
    session_start();
    session_destroy();

    echo "<script> alert('Logout Complete'); </script>";
    header('Refresh:0; url=admin_login.php');

?>