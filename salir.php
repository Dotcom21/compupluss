<?php
session_start();
include 'assets/lib/config.php';

session_unset();
session_destroy();

header("location:login.php")
?>