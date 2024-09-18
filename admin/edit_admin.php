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
  <title>admin | Dashboard</title>
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
            <a href="manage_admin.php" class="nav-link active">
              <i class="nav-icon fas fa-edit"></i>
              <p>
              จัดการข้อมูลผู้ดูแลระบบ
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="manage_subject_information.php" class="nav-link">
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
            <h1 class="m-0">จัดการข้อมูลผู้ดูแลระบบ</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">หน้าหลัก</a></li>
              <li class="breadcrumb-item"><a href="manage_admin.php">จัดการข้อมูลผู้ดูแลระบบ</a></li>
              <li class="breadcrumb-item active">แก้ไข</li>
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
        <!-- Main row -->
        <div>
        <?php
        include '../config/db.php';
        $id = $_GET['id'];
        $sql = "SELECT * FROM users WHERE user_id = '$id'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        ?>
        <h3 class="mb-4 text-center">Edit Admin</h3>
		      	<form class="signin-form" method="POST">
		      		<div class="form-group">
		      			<input type="email" class="form-control" name="email" placeholder="Email" required value="<?php echo $result['email']; ?>">
		      		</div>
	            <div class="form-group">
	              <input id="password" type="password" class="form-control" name="password" placeholder="Password" required value="<?php echo $result['password']; ?>">
	            </div>
                <div class="form-group">
	              <input id="password" type="password" class="form-control" name="confirm-password" placeholder="Confirm Password" required value="<?php echo $result['password']; ?>" >
	            </div>
	            <div class="form-group">
	            	<button type="submit" name="submit" class="form-control btn btn-primary submit px-3">Edit</button>
	            </div>
	          </form>


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
<?php

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm-password'];

  if ($password != $confirm_password) {
    echo "<script>alert('Password not match!')</script>";
  } else {
    if($password == $result['password']){
      $sql = "UPDATE users SET email = '$email' WHERE user_id = '$id'";
      $stmt = $conn->prepare($sql);
      $stmt->execute();
      echo "<script>alert('Update successfully!')</script>";
      header('Location: manage_admin.php');
  } else {
    $password = md5($password);
    $sql = "UPDATE users SET email = '$email', password = '$password' WHERE user_id = '$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo "<script>alert('Update successfully!')</script>";
    header('Location: manage_admin.php');
  }
  }
}


?>
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
