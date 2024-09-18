<?php

// export.php   table to excel

session_start();
$id = $_GET['id'];
include '../config/db.php';

$sql_subject_name = "SELECT * FROM subject_information WHERE subject_id = '".$id."'";
$result_subject_name = $conn->prepare($sql_subject_name);
$result_subject_name->execute();
$row_subject_name = $result_subject_name->fetch(PDO::FETCH_ASSOC);
// column name export
$output = '';
$output .= '
<table class="table" bordered="1">
<tr>
<th>No.</th>
<th>Email</th>
<th>Status</th>
<th>Scores</th>
</tr>
';


$sql = "SELECT * FROM `users`";
            $result = $conn->prepare($sql);
            $result->execute();
            $i = 1;
            while($row = $result->fetch(PDO::FETCH_ASSOC)){
                $sql2 = "SELECT * FROM `score` WHERE user_id = '".$row['user_id']."'";
                $result2 = $conn->prepare($sql2);
                $result2->execute();
                $row2 = $result2->fetch(PDO::FETCH_ASSOC);
                if($row2['score_id'] != ''){
                    $status = 'exam';
                    $score = $row2['score_exam'];
                }else{
                    $status = 'not exam';
                    $score = '-';
                }
            
                $output .= '
                <tr>
                <td>'.$i.'</td>
                <td>'.$row['email'].'</td>
                <td>'.$status.'</td>
                <td>'.$score.'</td>
                </tr>
                ';
                $i++;
            }
            $output .= '</table>';
            header("Content-Type: application/vnd.ms-excel; charset=utf-8");
            header('Content-Disposition: attachment; filename='.$row_subject_name['subject_name'].'.xls');

            echo $output;

?>

