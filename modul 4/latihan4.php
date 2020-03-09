<?php
  session_star();
  if (isset($_SESSION["user"])) {
    header("location:beranda.php")
  }
  include("function.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>LOGIN</title>
  </head>
  <body>
    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "wrong") {
          echo "<h3>Username dan Password salah!</h3>";
        }
    }
    ?>
  </body>
</html>
