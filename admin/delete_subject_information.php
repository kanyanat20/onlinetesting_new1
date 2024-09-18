<?php

include '../config/db.php';

$id = $_GET['id'];

$sql = "DELETE FROM subject_information WHERE subject_id = '$id'";
$result = $conn->prepare($sql);
$result->execute();

echo "<script>alert('Subject deleted successfully!')</script>";
echo "<script>window.location.href = 'manage_subject_information.php'</script>";


?>