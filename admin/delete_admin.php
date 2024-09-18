<?php

include '../config/db.php';

$id = $_GET['id'];

$sql = "DELETE FROM users WHERE user_id = '$id'";
$result = $conn->prepare($sql);
$result->execute();

echo "<script>alert('Admin deleted successfully!')</script>";
echo "<script>window.location.href = 'manage_admin.php'</script>";




?>