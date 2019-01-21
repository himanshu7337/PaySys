<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <title>Login Page!</title>
  </head>
  <body>
    
    <div class="col-lg-5 col-lg-offset-5">
      <h1>Login Page!!!</h1>
    <p>Fill in the credentials to login on our website</p>

    <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>

    <?php if (isset($_SESSION['success'])) { ?>
      <div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
      <?php } ?>



    <form action="" method="POST">
      <div class="form-group">
        <label for="username">Username:</label>
        <input class="form-control" name="username" id="username" type="text">
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input class="form-control" name="password" id="password" type="password">
      </div>
      <div class="text-center">
        <button class="btn btn-primary" name="login">LOGIN</button>
      </div>
      </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  </body>
</html>