<?php include 'validate.php'; ?>
<?php
error_reporting(0);
if($_SESSION['user'] != null){
    header("location:/web");
  }
 ?>
 <!DOCTYPE html>
 <html lang="en">

<head>

 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <meta name="description" content="">
<meta name="Lodwyiknico" content="">
<link rel="stylesheet" type="text/css" href="../css/custom.css">
   <title>NBMC - Login</title>

             <!-- Bootstrap core CSS-->
<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

             <!-- Custom fonts for this template-->
<link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

             <!-- Custom styles for this template-->
   <link href="../css/sb-admin.css" rel="stylesheet">

 </head>
  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header"><i class="fas fa-user-circle fa-fw"></i> Login</div>
        <div class="card-body">

          <form method="post" action="">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputEmail" name="user" class="form-control" placeholder="Username" required="required" autofocus="autofocus">
                <label for="inputEmail">Username</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Password" required="required">
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <div class="form-group">

            </div>
            <input type="hidden" name="token_form" value="<?php $_SESSION['token']; ?>">
          <input type="submit" value="Login" name="login" class="btn btn-primary btn-block">

          </form>

        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>
</html>
