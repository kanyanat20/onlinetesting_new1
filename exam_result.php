<?php

session_start();

if(!isset($_SESSION['user'])){
    header('Location: login.php');
}

include 'config/db.php';

$id = $_GET['id'];

$sql = "SELECT * FROM question WHERE subject_id = '$id'";
$result = $conn->prepare($sql);
$result->execute();

//subject name
$sql2 = "SELECT * FROM subject_information WHERE subject_id = '$id'";
$result2 = $conn->prepare($sql2);
$result2->execute();
$row2 = $result2->fetch(PDO::FETCH_ASSOC);

$score_select = "SELECT * FROM score WHERE subject_id = '$id' AND user_id = '".$_SESSION['user']['user_id']."'";
$result_score = $conn->prepare($score_select);
$result_score->execute();
$row_score = $result_score->fetch(PDO::FETCH_ASSOC);
if($row_score['score_id'] != ''){
    echo "<script>alert('คุณได้ทำการสอบวิชานี้ไปแล้ว');window.location.href='index.php';</script>";
}

?>

<!doctype html>
<html lang="en">
  <head>
     <style>
    body{
      background: rgb(135,206,235);
background: radial-gradient(circle, rgba(186,182,246,1) 0%, rgba(1,173,213,0.6222864145658263) 61%, rgba(0,212,255,1) 81%); 
    }
  </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Online Testing</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class=" container">
      <a class="navbar-brand text-white" href="index2.php"><img src="https://api.computing.kku.ac.th//storage/images/1663735797-CPlogo-final-01.png" width="200" height="200"  class="img-fluid" > </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link text-dark font-weight-bold" href="index2.php">หน้าหลัก</a>
          </li>
        </ul>
        <div class="info btn">
                    <a href="#" class="d-block"><?php echo $_SESSION['user']['email']; ?></a>
                    </div>
        <?php
        if(isset($_SESSION['user'])){ ?>
        <a href="logout.php" class="btn btn-danger">Logout</a>
        <?php }else{ ?>
          <a href="login.php" class="btn btn-warning">Login</a>
        <?php } ?>
      </div>
      </div>
  </nav>
    
    <div class="container">
    <div class="row">
    <div class="col-md-12 mt-3">
    <h1 class="text-center"> ผลการสอบ </h1>
    <hr>
    </div>
    </div>
    <div class="row">
    <div class="col-md-12">
    <table class="table table-bordered table-striped bg-light">
            <thead>
                <tr>
                <th scope="col">ลำดับ</th>
                <th scope="col">วิชา</th>
                <th scope="col">ผลการสอบ</th>
                </tr>
            </thead>
            <tbody>
                <?php 

                $sql = "SELECT * FROM score WHERE user_id = '".$_SESSION['user']['user_id']."'";
                $result = $conn->prepare($sql);
                $result->execute();
                $i = 1;
                while($row = $result->fetch(PDO::FETCH_ASSOC)){

                    $sql2 = "SELECT * FROM subject_information WHERE subject_id = '".$row['subject_id']."'";
                    $result2 = $conn->prepare($sql2);
                    $result2->execute();
                    $row2 = $result2->fetch(PDO::FETCH_ASSOC);
                    
                    $sql_question = "SELECT * FROM question WHERE subject_id = '".$row['subject_id']."'";
                    $result_question = $conn->prepare($sql_question);
                    $result_question->execute();

                    $sql3 = "SELECT * FROM users WHERE user_id = '".$row['user_id']."'";
                    $result3 = $conn->prepare($sql3);
                    $result3->execute();
                    $row3 = $result3->fetch(PDO::FETCH_ASSOC);

                    echo "<tr>";
                    echo "<td>".$i."</td>";
                    echo "<td>".$row2['subject_name']."</td>";
                    echo "<td>".$row['score_exam']. " / ". $result_question->rowCount()."</td>";
                    echo "</tr>";
                    $i++;
                }
                
                ?>
            </tbody>
        </table>

    </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>