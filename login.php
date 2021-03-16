<?php include 'header.php';?>

<body class="hold-transition login-page" style="background-image: url(upload/2.jpg);
background-size: cover;">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary card">
    <div class="card-header text-center">
      <a href="index2.html" class="h1"><b>LOGIN</b></a>
    </div>
    <div class="card-body">
      <form  method="post" action="login_insert.php">
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
          <input type="submit" name="submit" value="Login" class="btn btn-info">
         
            </div>
          </div>
          <!-- /.col -->
          <!-- /.col -->
        </div>
      </form>
</html>

