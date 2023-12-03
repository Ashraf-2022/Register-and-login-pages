<?php
if(!isset($_SESSION)) { session_start(); };
include 'config/connect/php';
session_unset();
session_destroy();
header('location:index.php');
?>