<?php

session_start();

session_destroy();

echo "<script>alert('Logout successfully!')</script>";
header('Location: ../index.php');
exit;

?>