<?php

session_start();

?>
<?php
include 'config/db.php';

$searchTerm = ""; // เริ่มต้นตัวแปรค้นหาเป็นสตริงว่าง

if(isset($_GET['search'])){
    $searchTerm = $_GET['search']; // ถ้ามีการส่งคำค้นหามาใน URL ให้กำหนดค่าให้กับตัวแปรค้นหา
}

$sql = "SELECT * FROM subject_information WHERE subject_name LIKE :searchTerm";
$result = $conn->prepare($sql);
$result->bindParam(':searchTerm', $searchTerm, PDO::PARAM_STR);
$result->execute();

?>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const searchBox = document.getElementById('searchBox');
        const examQuestions = document.querySelectorAll('.exam-question');

        searchBox.addEventListener('input', function () {
            const searchTerm = searchBox.value.toLowerCase();

            let found = false;

            examQuestions.forEach(function (question) {
                const questionText = question.textContent.toLowerCase();

                if (questionText.includes(searchTerm)) {
                    found = true;
                    question.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start',
                    });
                }
            });

            // If not found, scroll to the top
            if (!found) {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth',
                });
            }
        });
    });
</script>



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

  <style>
    body{
      background: rgb(135,206,235);
background: radial-gradient(circle, rgba(186,182,246,1) 0%, rgba(1,173,213,0.6222864145658263) 61%, rgba(0,212,255,1) 81%); 
    }
  </style>
  
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content: space-between;" >
      <div class=" container">

        <a class="navbar-brand text-dark font-weight-bold"  href="index2.php">
        <img src="https://api.computing.kku.ac.th//storage/images/1663735797-CPlogo-final-01.png" width="200" height="200"  class="img-fluid" >  </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
                      <!-- <li class="nav-item">
                        <a class="nav-link text-dark font-weight-bold" href="index.php">หน้าหลัก</a>
                      </li> -->
                      <?php
                      if(isset($_SESSION['user'])){ ?>
                      <li class="nav-item">
                        <a class="nav-link text-dark font-weight-bold" href="exam_result.php">ผลการสอบ</a>
                      </li>
                      <?php } ?>
          </ul>
                      <div class="info btn">
                      <a href="#" class="d-block"><?php echo $_SESSION['user']['email']; ?></a>
                      </div>
                      <?php
                      if(isset($_SESSION['user'])){ ?>
                      <a href="logout.php" class="btn btn-danger">Logout</a>
                      <?php }else{ ?>
                        <a href="login.php" class="btn text-dark font-weight-bold">Login</a>
                        <a href="register.php" class="btn text-dark font-weight-bold">Register</a>
                      <?php } ?>
        </div>
      </div>
    </nav>

    <div class="row justify-content-center ">  
    
    </div>
    <div class="container_index">
      <div class="row  justify-content-center">
        <div class="col-md-8 ">
          <h1 class="text-center">Welcome to Online Testing</h1>
          <hr>
        </div>
      </div>
       <div class="row  justify-content-center">
          <div class="col-md-8">
            <h3 class="text-center">Please select your subject</h3>
            <hr>
          </div> 
        </div>
      </div>
      </div>                    
      <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
        <!-- <div class="card-header">
    <div class="row mb-3">
        <div class="col-md-6 ">
            ทำข้อสอบ 
        </div>
        <div class="col-md-6 text-right">
            <form action="" method="GET" class="form-inline">
                <input type="text" class="form-control mr-2" id="searchBox" name="search" placeholder="ค้นหาข้อสอบ" value="<?php echo $searchTerm; ?>">
                <button type="submit" class="btn btn-primary">ค้นหา</button>
            </form>
   
</div> -->
          <div class="card-header">
          <div class="row  justify-content-center ">
     <div class="col-md-6 ">
            ทำข้อสอบ 
        </div>
    <form action="" method="GET" class="form-inline">
        <input type="text" class="form-control mr-2 " id="searchBox" name="search" placeholder="ค้นหาข้อสอบ" value="<?php echo $searchTerm; ?>">
        <button type="submit" class="btn btn-primary">ค้นหา</button>
    </form>
    </div>
        </div>
        <div class="card-body">
      <div class="row justify-content-center">
                    
      <?php 
      include 'config/db.php';
      $sql = "SELECT * FROM subject_information";
      $result = $conn->prepare($sql);
      $result->execute();
      while($row = $result->fetch(PDO::FETCH_ASSOC)){ ?>

      <div class="col-md-8 ">
        <div class="card">
          <div class="card-body">
            <img src="images/<?php echo $row['subject_image']; ?>" class="img-fluid"style="object-fit: cover; height: 200px;">
            <h5 class="card-title"><?php echo $row['subject_name']; ?></h5>
            <?php 
            if(!isset($_SESSION['user'])){ ?>
            <a href="login.php" class="btn btn-primary">Start Test</a>
            <?php }else{ ?>
            <a href="start_test.php?id=<?php echo $row['subject_id']; ?>" class="btn btn-primary">Start Test</a>
            <?php } ?>
          </div>
        </div>
    </div>

    <?php } ?>
    </div>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      
  </body>
</html>