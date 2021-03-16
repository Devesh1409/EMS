<?php include 'header.php';?>
<body class="hold-transition login-page "style="background-image: url(upload/4.jpg);
background-size: cover;">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary card1">
    <div class="card-header text-center">
      <a href="index2.html" class="h1"><b>REGISTRATION</b></a>
    </div>
   <div class="card-body">
     <form  method="post" action="registration_insert.php">
      	<div class="input-group mb-3">
          <input type="text" name="name" class="form-control" placeholder="Name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-user"></span>
            </div>
          </div>
        </div>
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
        <div class="input-group mb-3">
			<select class="form-control" name="department" required="required">
				    <option>Select Department</option>
				   	<option>Production</option>
				   	<option>Research and Development</option>
				   	<option>Purchasing</option>
				   	<option>Marketing</option>
				   	<option>Accounting and Finance</option>
			</select>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-building"></span>
            </div>
          </div>
        </div>
         <div class="input-group mb-3">
         <select class="form-control" name="role" required="required">
			    <option>Select Role</option>
			   	<option>Admin</option>
			   	<option>Employee</option>
		</select>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="number" name="number" class="form-control" placeholder="Number">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-phone"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <textarea name="address" class="form-control" placeholder="Address"></textarea>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-address-book"></span> 
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="icheck-primary">
              <input type="submit" name="submit"  value="Sign In" class="btn btn-info ">
            </div>
          </div>
          <!-- /.col -->
          <!-- /.col -->
        </div>
      </form>
</body>
</html>