<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <title>Form Login</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
  </head>
  <style media="screen">
  body{
    background: linear-gradient (to right,black,blue.black);
  }
    .tengah{
      margin-top: 175px;
      margin-left:550px;
    }
    .card{
      border-radius: 20px;
      border-color: Blue;
    }
  </style>
  <body>
    <form  action="hasil.php" method="post">
      <div class="tengah">
      </div>
    <div class="container">
      <div class="row">
        <div class="card col-sm-6 bg-primary">
          <div class="card-header bg-danger text-white" >
            Silakan Masukan Username dan Password Anda Disini
          </div>
          <div class="card-body">
            Username🧨:  <br> <input type="text" name="Username" value="">
            <br>
            Password🧨:   <br><input type="password" name="Password" value="">
            <img src="" alt="">
          </div>
          <div>
            <input type="checkbox" id="show-hide" name="show-hide">
            <label for="show-hide">Show Password</label>
          </div>
          <div class="card-footer bg-danger">
            <input type="submit" name="submit" value="Login" class="bg-warning text-black">
            <button type="button" name="button" class="btn-btn-md btn-warning text-black">Exit</button>
          </div>
          <br>
          <div class="card-footer bg-dark text-white">
            &copy; Copyright by Yusril
          </div>
        </div>
      </div>
    </div>
  </form>
  </body>
</html>
