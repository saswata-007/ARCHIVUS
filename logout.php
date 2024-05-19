<?php
require 'config/constants.php';

// DESTROY ALL SESSIONS AND REDIRECT USER TO  HOMEPAGE
session_destroy();
header('location: ' . ROOT_URL . 'homepage.php');
die();
?>