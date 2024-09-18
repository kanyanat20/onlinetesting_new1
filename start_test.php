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
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Online Testing</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class=" container">
  <a class="navbar-brand text-white" href="index.php">Online Testing</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link text-white" href="index.php">หน้าหลัก</a>
      </li>
    </ul>
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
    <h1 class="text-center"> วิชา <?php echo $row2['subject_name']; ?></h1>
    <hr>
    </div>
    </div>
    <div class="row">
    <div class="col-md-12">
    <div class="card">
  <div class="card-header">
    คำถาม
    </div>
    <div class="card-body">
    <form method="POST">
    <?php
    $i = 1;
    while($row = $result->fetch(PDO::FETCH_ASSOC)){ ?>
    <div class="form-group">
    <label><?php echo $i; ?>. <?php echo $row['question_exam']; ?></label>

      <div class="form-check">
      <input class="form-check-input" type="radio" name="answer<?php echo $row['question_id']; ?>" id="exampleRadios1" value="1" required>
      <label class="form-check-label" for="exampleRadios1">
        <?php echo $row['answer1']; ?>
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="answer<?php echo $row['question_id']; ?>" id="exampleRadios2" value="2" required>
      <label class="form-check-label" for="exampleRadios2">
        <?php echo $row['answer2']; ?>
      </label>
    </div>
    <?php if($row['answer3'] != ''){ ?>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="answer<?php echo $row['question_id']; ?>" id="exampleRadios3" value="3" required>
      <label class="form-check-label" for="exampleRadios3">
        <?php echo $row['answer3']; ?>
      </label>
    </div>
    <?php } if($row['answer4'] != ''){ ?>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="answer<?php echo $row['question_id']; ?>" id="exampleRadios4" value="4" required>
      <label class="form-check-label" for="exampleRadios4">
        <?php echo $row['answer4']; ?>
      </label>
    </div>
    <?php } ?>

      <div>

      </div>

    </div>

    <?php $i++; } ?>
    <button type="submit" name="submit" class="btn btn-success mt-3 btn-sm">ยืนยันคำตอบ</button>
    </form>
    <?php
if(isset($_POST['submit'])){
    $score = 0;
    $i = 1;
    $sql3 = "SELECT * FROM question WHERE subject_id = '$id'";
    $result3 = $conn->prepare($sql3);
    $result3->execute();
    while($row3 = $result3->fetch(PDO::FETCH_ASSOC)){
        $answer = $_POST['answer'.$row3['question_id']];
        $sql_insert_answer = "INSERT INTO answer (question_id, user_id, answer_exam) VALUES ('".$row3['question_id']."', '".$_SESSION['user']['user_id']."', '$answer')";
        $result_insert_answer = $conn->prepare($sql_insert_answer);
        $result_insert_answer->execute();
        if($answer == $row3['ans_true']){
            $score++;
        }
        $i++;
    }
    $sql4 = "INSERT INTO score (subject_id, user_id, score_exam) VALUES ('$id', '".$_SESSION['user']['user_id']."', '$score')";
    $result4 = $conn->prepare($sql4);
    $result4->execute();
    echo "<script>alert('สอบเรียบร้อยแล้ว');window.location.href='index.php';</script>";

}


    ?>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>