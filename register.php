<!doctype html>
<html lang="en">
  <head>
  	<title>Online Testing</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="assets/css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(assets/images/bg3.jpg);">
	<section class="ftco-section">
		<div class="container mt-5">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4"style="
    					background-color: #272525;
    					border-radius: 20px;
    					border-width: 20px;
					">
					<div class="login-wrap p-0">
				<h2 class="mb-4 text-center"> </h2>
		      	<h3 class="heading-section mb-4 text-center text-center font-weight-bold text-white">Create an account</h3>
				<h4 class="mb-4 text-center"> </h4>
		      	<form class="signin-form" method="POST">
		      		<div class="form-group">
		      			<input type="email" class="form-control" name="email" placeholder="Email" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" name="password" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
                <div class="form-group">
	              <input id="cfpassword-field" type="password" class="form-control" name="confirm-password" placeholder="Confirm Password" required>
	              <span toggle="#cfpassword-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" name="submit" class="form-control btn btn-primary submit px-3">Sign Up</button>
	            </div>
	          </form>
	          <p class="w-100 text-center font-weight-bold">Already have an account ? <br>Sign In <a class="text-primary" href="login.php">Here</a><br/></p>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/main.js"></script>

  <?php

    include 'config/db.php';

	if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];

    // hash password
    if($password == $confirm_password){
        $password = md5($password);
    } else {
        echo "<script>alert('Password and Confirm Password do not match!')</script>";
    }

    // check if email exists
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if($result->rowCount() > 0){
        echo "<script>alert('Email already exists!')</script>";
    } else {
        $sql = "INSERT INTO users (email, password, urole) VALUES ('$email', '$password', 'user')";
        $result = $conn->query($sql);
        
        echo "<script>alert('User created successfully!')</script>";
        echo "<script>window.location.href = 'login.php'</script>";
    }

  }

  ?>


	</body>
</html>