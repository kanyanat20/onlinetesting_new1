<?php

session_start();

if (!isset($_SESSION['user'])) {
  // redirect them to outside of admin area
  header('Location: ../index.php');
  exit;
} else {
  // show admin area
  if ($_SESSION['user']['urole'] != 'admin') {
    // redirect them to outside of admin area
    header('Location: ../index.php');
    exit;
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <!-- Preloader -->
 

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">


    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
     
      <span class="text font-weight-light-center  text-center d-block">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <!-- <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div> -->
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['user']['email']; ?></a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
              หน้าหลัก
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="manage_admin.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
              จัดการข้อมูลผู้ดูแลระบบ
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="manage_subject_information.php" class="nav-link active">
              <i class="nav-icon fas fa-edit"></i>
              <p>
              จัดการข้อมูลวิชา
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="manage_exam_information.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
              จัดการข้อมูลข้อสอบ
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="exam_result.php" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
              ดูผลสอบรายบุคคล
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
              Logout
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">จัดการข้อมูลวิชา</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">หน้าหลัก</a></li>
              <li class="breadcrumb-item"><a href="manage_subject_information.php">จัดการข้อมูลวิชา</a></li>
              <li class="breadcrumb-item active">แก้ไขข้อมูลวิชา</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row mb-4">
          <!-- ./col -->
          <?php
          include '../config/db.php';
          $id = $_GET['id'];
            $sql = "SELECT * FROM subject_information WHERE subject_id = '$id'";
            $result = $conn->prepare($sql);
            $result->execute();
            $row = $result->fetch(PDO::FETCH_ASSOC);
          ?>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div>
              <form method="post">
                <h5>
                  แก้ไขข้อมูลวิชา
                </h5>
                <img src="../images/<?php echo $row['subject_image']; ?>" alt="" srcset="" width="200">
                <br><br>
                <input type="text" name="subject_name" class="form-control mb-2" placeholder="ชื่อวิชา" value="<?php echo $row['subject_name']; ?>">
                <button type="submit" name="submit" class="btn btn-success">แก้ไขข้อมูล</button>
              </form>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <?php

        if(isset($_POST['submit'])){
          $subject_name = $_POST['subject_name'];

          $sql = "UPDATE subject_information SET subject_name = '$subject_name' WHERE subject_id = '$id'";
            $result = $conn->prepare($sql);
            $result->execute();
            echo "<script>alert('แก้ไขข้อมูลวิชาสำเร็จ!')</script>";
          echo "<script>window.location.href='manage_subject_information.php'</script>";
        }

        ?>
        <!-- /.row -->
        <!-- Main row -->
        <div>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
