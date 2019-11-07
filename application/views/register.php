<!DOCTYPE html>
<html>
    <head>
      <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
      <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
      <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-grid.css') ?>">
      <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-grid.min.css') ?>">
      <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-reboot.css') ?>">
      <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-reboot.min.css') ?>">
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <title>
            SIGN UP
        </title>
    </head>
    <style>
        .form-signin
        {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }
        .form-signin .form-signin-heading, .form-signin .checkbox
        {
            margin-bottom: 10px;
        }
        .form-signin .checkbox
        {
            font-weight: normal;
        }
        .form-signin .form-control
        {
            position: relative;
            font-size: 16px;
            height: auto;
            padding: 10px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .form-signin .form-control:focus
        {
            z-index: 2;
        }
        .form-signin input[type="text"]
        {
            margin-bottom: -1px;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }
        .form-signin input[type="password"]
        {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
        .account-wall
        {
            margin-top: 20px;
            padding: 40px 0px 20px 0px;
            background-color: #f7f7f7;
            -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        }
        .login-title
        {
            color: #555;
            font-size: 18px;
            font-weight: 400;
            display: block;
        }
        .profile-img
        {
            width: 96px;
            height: 96px;
            margin: 0 auto 10px;
            display: block;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
        }
        .need-help
        {
            margin-top: 10px;
        }
        .new-account
        {
            display: block;
            margin-top: 10px;
        }
    </style>
<body> 

            
            <div class="container-fluid h-100" style="margin-top: 70px;">
    <div class="row justify-content-center align-items-center h-100">
        <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3">
        <div class="account-wall"> 
          <h2 align="center" style="padding-bottom: 20px"><img src="<?php echo base_url('assets/img/logo.png') ?>" style="width: 55%; height: 55%;"></h2>
          <?php echo form_open('register/simpan') ?>
          <div class="col">
            <div class="form-group">
              <label for="Nama">Nama Lengkap :</label>
              <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required />
            </div>
            <div class="form-group">
              <label for="Email">Email :</label>
              <input type="email" name="email" class="form-control" placeholder="Email Valid" required />
            </div>
            <div class="form-group">
              <label for="Username">Username :</label>
              <input type="text" name = "username" class="form-control" placeholder="Username" required />
            </div>
            <div class="form-group">
              <label for="Password">Password :</label>
              <input type="password" name = "password" class="form-control" placeholder="Password" required />
            </div>
            <div class="form-group text-center">
              <input type="submit" class="btn btn-info">
              <br>
              <a> Sudah memiliki akun?</a>
              <a href="<?php echo site_url('halaman_utama') ?>">Login</a>
            </div>
            <?php echo form_close() ?>
          </div>
          </div>
          </div>
    </div>


            </div>


<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>


</html>