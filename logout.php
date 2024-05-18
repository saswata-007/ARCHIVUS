<?php
require 'config/constants.php';

// DESTROY ALL SESSIONS AND REDIRECT USER TO LOGIN PAGE
session_destroy();
header('location: ' . ROOT_URL . 'homepage.php');
die();
?>