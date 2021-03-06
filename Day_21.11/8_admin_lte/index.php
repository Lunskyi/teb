<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="./plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">

  <?php
  if (isset($_SESSION['error'])) {
    if (isset($_SESSION['error']['success'])) {
      $success=$_SESSION['error']['success'];
      echo <<<SUCCESS
        <div class="card-body">
          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">SUCCESS</h3>
            </div>
              <div class="card-body">
              $success
              </div>
              <!-- /.card-body -->
            </div>
          <!-- /.card -->
        </div>
  SUCCESS;
  unset($_SESSION['error']['success']);
  }
      foreach ($_SESSION['error'] as $key => $value) {
        $error=$value;

      echo <<<SUCCESS
        <div class="card-body">
          <div class="card card-danger">
            <div class="card-header">
              <h3 class="card-title">ERROR</h3>
            </div>
              <div class="card-body">
              $error
              </div>
              <!-- /.card-body -->
            </div>
          <!-- /.card -->
        </div>
  SUCCESS;
  unset($_SESSION['error']);
  }
}


?>
  <div class="login-box">
    <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="./index.php" class="h1"><b>Logowanie</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Wpisz dane dla whoda</p>

      <form action="./login.php" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Poczta">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Haslo">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Pami??tasz mnie
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Zatwierdz</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mt-2 mb-3">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Skorzystaj z Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Skorzystaj z Google+
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="./pages/forgot-password.php">Nie pamietam haslo</a>
      </p>
      <p class="mb-0">
        <a href="./pages/register.php" class="text-center">Stworz nowego chlopaka</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="./plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="./dist/js/adminlte.min.js"></script>
</body>
</html>
