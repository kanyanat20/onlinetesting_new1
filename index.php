<?php

session_start();

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

  <style>
    body{
      background: rgb(135,206,235);
background: radial-gradient(circle, rgba(186,182,246,1) 0%, rgba(1,173,213,0.6222864145658263) 61%, rgba(0,212,255,1) 81%); 
    }
  </style>
    <!-- <style> body {
      margin: 0;
      padding: 0;
      background-image: url('assets/images/bg3.jpg'); /* ใส่ URL ของรูปภาพที่คุณต้องการให้เป็นพื้นหลัง */
      background-attachment: fixed;
      background-size: cover;
    }</style> -->

  <body >
  <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content:space-between;"> -->
  <nav class="navbar navbar-expand-lg  bg-light justify-content:space-between;">
    <div class=" container">

      <a class="navbar-brand text-dark font-weight-bold"  href="index.php">

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
                      <a href="login.php" class="btn text-dark font-weight-bold  ">Login</a>
                      <!-- <button href="login.php" class="btn btn-gradient btn-glow">Login</button> -->
                      <a href="register.php" class="btn text-dark font-weight-bold">Register</a>
                    <?php } ?>
    </div>
    </div>
    </nav>
   <!-- side bar start -->
   <!-- <div class="sidebar" style="background-color: #fff; position: fixed; padding-top: 20px;">
      <a href="#">ข้อสอบ/แนะนำ</a>
      <a href="#">ของฉัน</a>
      <a href="#">Services</a>
      </div> -->
      
<!-- side bar end -->
 
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


            <!-- <div>
              <div class="row">
                <div class="col-md-6">
                  <h1>hhhhh1</h1>
                </div>
                <div class="col-md-6">
                  <h1>hhhhh2</h1>
                </div>
                <div class="col-md-6">
                <h1>hhhhh3</h1>
                </div>
              <div class="col-md-6">
                  <h1>hhhhh4</h1>
              </div>
              <div class="col-md-6">
                  <h1>hhhhh5</h1>
              </div>
                <div class="col-md-6">
                  <h1>hhhhh6</h1>
                </div>
                <div class="col-md-6">
                  <h1>hhhhh7</h1>
                </div>
                <div class="col-md-6">
                  <h1>hhhhh8</h1>
                </div>
              </div>
            </div> -->

    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header ">
            ทดลองทำข้อสอบ
          </div>
        <div class="card-body">
      <div class="row justify-content-center">
      <?php 
      include 'config/db.php';
      $sql = "SELECT * FROM subject_information";
      $result = $conn->prepare($sql);
      $result->execute();
      while($row = $result->fetch(PDO::FETCH_ASSOC)){ ?>

      <div class="col-md-10 ">
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