<?php
session_start();
session_destroy();
// Redirect to the main page:
header('Location: index1.php');
?>