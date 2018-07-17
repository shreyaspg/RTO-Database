<?php
session_start();

if(isset($_SESSION['userr'])) {
    session_destroy();
    unset($_SESSION['userr']);
   //unset($_SESSION['usr_name']);
    header("Location: login.html");
} else {
    header("Location: index.php");
}
?>