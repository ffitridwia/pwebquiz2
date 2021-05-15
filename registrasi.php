<?php 
require 'functions.php';

if( isset($_POST["register"]) ) {

	if( registrasi($_POST) > 0 ) {
		echo "<script>
				alert('user baru berhasil ditambahkan!');
			  </script>";
	} else {
		echo mysqli_error($conn);
	}

}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="stylereg.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <title>Tugas PWEB</title>
</head>
<body>
<div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body">
            <h5 class="card-title text-center">Register</h5>
            <form form action="" method="post" class="form-signin">
              <div class="form-label-group">
                <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
                <label for="username"></label>
              </div>
              <div class="form-label-group">
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                <label for="password"></label>
              </div>
              <div class="form-label-group">
                <input type="password" name="password2" id="password2" class="form-control" placeholder="Confirm Password" required>
                <label for="password2"></label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="register">Register</button>
              <a class="d-block text-center mt-2 small" href="login.php">Login</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>