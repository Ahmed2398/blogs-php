<?php
session_start();
session_unset(); // Remove the argument (Array)
session_destroy();
header('location: index.php');
?>
