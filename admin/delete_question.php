<?php
include '../config/db.php';

$question_id = $_GET['id'];
$subject_id = $_GET['subject_id'];

$sql_delete = "DELETE FROM question WHERE question_id = '$question_id'";
$result_delete = $conn->prepare($sql_delete);
$result_delete->execute();

echo "<script>alert('Question deleted successfully!')</script>";
echo "<script>window.location.href = 'exam_information.php?id=$subject_id'</script>";



?>