<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Registration Page (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="./register.php" class="h1"><b>Registration</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Rejestracja nowego Uzytkownika</p>

      <form action="../index.html" method="post">
        <div class="input-group mb-3">
          <input type="text" name="name" class="form-control" placeholder="Podaj imię">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
      <form action="../index.html" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="surname" placeholder="Podaj nazwisko">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email"placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email1"placeholder="Powtorz Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Haslo">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password1" placeholder="Powtorz Haslo">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <!-- Miasto -->

        <div class="input-group mb-3">
          <select class="custom-select" name="city_id">
            <?php require_once("../scripts/connect.php");
            $sql="SELECT * FROM `cities`";
            $result =$db->query($sql);
            while ($city = $result->fetch_assoc()) {
                echo "<option> $city[city] </option>";
            }
            ?>
            </select>
              <div class="input-group-text">
                <span class="fas fa-city"></span>
              </div>
          </div>
        <div class="input-group mb-3">
          <input type="date" class="form-control" name="birthday">
          <div class="input-group-append">
            <div class="input-group-text">
              Data urodzenia
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="custom-control custom-radio">
            <input class="custom-control-input" type="radio" id="customRadio1" value="m" name="gender">
            <label for="customRadio1" class="custom-control-label">M</label>
          </div>
          <div class="custom-control custom-radio">
            <input class="custom-control-input" type="radio" id="customRadio2" value="w" name="gender">
            <label for="customRadio2" class="custom-control-label">W</label>
          </div>
        </div>

        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Rejestr</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Skorzystaj z Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Skorzystaj z Google+
        </a>
      </div>

      <a href="index.php" class="text-center">Juz posiadam konto</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
</body>
</html>
