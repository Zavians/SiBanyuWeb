<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login - SiBanyu</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--===============================================================================================-->
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/images/logo-Boyolali.png"/>
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login_/vendor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login_/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login_/fonts/iconic/css/material-design-iconic-font.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login_/vendor/animate/animate.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login_/vendor/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login_/vendor/animsition/css/animsition.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login_/vendor/select2/select2.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login_/vendor/daterangepicker/daterangepicker.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login_/css/util.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login_/css/main.css">
  <!--===============================================================================================-->
  <!-- Add your CSS links here -->
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      display: flex;
      align-items: stretch;
      height: 100vh;
    }

    .left-side {
      flex: 1;
      background: url('assets/images/login.jpg') no-repeat center center/cover;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .right-side {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .login-form {
      max-width: 400px;
      width: 100%;
      padding: 40px;
      background: #f9f9f9;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .login-form img {
      width: 150px;
      height: 150px;
      display: block;
      margin: 0 auto 20px;
    }
    .login-form img {
      width: 100px; /* Ubah sesuai ukuran yang diinginkan */
      height: auto; /* Sesuaikan proporsi */
      display: block;
      margin: 0 auto 20px;
    }

    .login100-form-title {
      font-size: 18px; /* Ubah sesuai ukuran yang diinginkan */
      text-align: center;
      margin-bottom: 20px;
    }

    /* Add any additional styling you need */
  </style>
</head>
<body>

  <div class="left-side"></div>

  <div class="right-side">
    <form class="login-form" action="<?php echo base_url('login/auth'); ?>" method="post" class="" role="form">
      <img src="<?php echo base_url(); ?>/assets/images/logo-Boyolali.png" alt="Logo" />
      <span class="login100-form-title p-b-26">
        SISTEM PENGELOLAAN DATA PENDUDUK <br> DESA BANYUSRI
      </span>
      <?php if ($this->session->flashdata('gagal')) { ?>
        <div class="callout callout-danger">
          <p style="font-size:15px">
            <i class="fa fa-warning"></i> <?php echo $this->session->flashdata('gagal'); ?>
          </p>
        </div>
      <?php } ?>
      <div class="wrap-input100 validate-input" data-validate="USERNAME TIDAK TERDAFTAR!">
        <input class="input100" type="text" name="username">
        <span class="focus-input100" data-placeholder="Username"></span>
      </div>
      <div class="wrap-input100 validate-input" data-validate="Enter password">
        <span class="btn-show-pass">
          <i class="zmdi zmdi-eye"></i>
        </span>
        <input class="input100" type="password" name="password">
        <span class="focus-input100" data-placeholder="Password"></span>
      </div>
      <div class="container-login100-form-btn">
        <div class="wrap-login100-form-btn">
          <div class="login100-form-bgbtn"></div>
          <button class="btn btn-lg btn-block btn-success login100-form-btn" type="submit" name="Submit" alt="sign in">
            Login
          </button>
        </div>
      </div>
    </form>
  </div>

  <div id="dropDownSelect1"></div>

  <!--===============================================================================================-->
  <script src="<?php echo base_url(); ?>assets/login_/vendor/jquery/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
  <script src="<?php echo base_url(); ?>assets/login_/vendor/animsition/js/animsition.min.js"></script>
  <!--===============================================================================================-->
  <script src="<?php echo base_url(); ?>assets/login_/vendor/bootstrap/js/popper.js"></script>
  <script src="<?php echo base_url(); ?>assets/login_/vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
  <script src="<?php echo base_url(); ?>assets/login_/vendor/select2/select2.min.js"></script>
  <!--===============================================================================================-->
  <script src="<?php echo base_url(); ?>assets/login_/vendor/daterangepicker/moment.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/login_/vendor/daterangepicker/daterangepicker.js"></script>
  <!--===============================================================================================-->
  <script src="<?php echo base_url(); ?>assets/login_/vendor/countdowntime/countdowntime.js"></script>
  <!--===============================================================================================-->
  <script src="<?php echo base_url(); ?>assets/login_/js/main.js"></script>

</body>
</html>
