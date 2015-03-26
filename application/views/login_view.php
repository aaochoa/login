<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Sup JD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Styles -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/login.css" rel="stylesheet">
</head>
<body>
<div class="container">
<div class="row">
      <div class="com-md-12">
        <div class="notification login-alert">
            Please Enter Your Username And Password correct!
        </div>
          <div class="well welcome-text">
                Hello, to access to our silly app <button class="pull-right btn btn-lg btn-warning btn-login">
                  <span class="glyphicon glyphicon-user"></span>Log in</button>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well login-box">
                <form action="<?php echo base_url()."login_controller/login_validation";?>" method="post" accept-charset="utf-8">
                    <legend>Log In</legend>
                    <?php echo validation_errors(); ?>
                    <label>Code:</label>
                    <input type="text" class="form-control" name="Code" placeholder="Code" autocomplete="off" required>
                    <label>Password:</label>
                    <input type="password" class="form-control" name="Password" placeholder="Password" required>
                    <br>
                    <button class="btn btn-lg btn-primary" type="submit">Log In</button>
                    <button class="btn btn-danger btn-cancel-action">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/bootstrap.js"></script>
<script src="../assets/js/login.js"></script>
</body>
</html>
