  <!doctype html>
  <html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="register.css">
    <title>Hello, world!</title>
  </head>

  <body>
    <?php
    if (isset($_POST["mail"])) {
      echo "hh<br><br>";
      include "db.php";
      $user = $_POST['mail'];
      $password = $_POST['password'];
      $sql = "select * from a where Email = '$user' and Password = '$password'";
      $a = mysqli_query($con, $sql);
      echo mysqli_fetch_array($a);
      echo mysqli_fetch_assoc($a);
      echo mysqli_num_rows($a);
      echo "hh";
      if ( $a && mysqli_num_rows($a) == 1) {
        session_start();
        $_SESSION["Username"] = $_POST["mail"];
        $_SERVER["valid"] = true;
        echo "hh";
        echo "<script> console.log('hello') </script>";
        header("Location: index.php");
      } else {
        echo '<div class="alert alert-danger" role="alert">
          Invalid Credentials
        </div>';
      }
    }
    ?>
    <div class="main1">
      <div class="main2">
        <form action="login.php" method="post">
          <h3 class="hd3">LogIn</h3>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mail" placeholder="@gmail.com">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>

          <div class="mb-3">
            <label for="exampleInputPassword" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword" name="password">
          </div>

          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="verify">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <div class="btn_s">
            <button type="submit" class="btn btn-primary" class="btn">Submit</button>
          </div>
        </form>
      </div>
    </div>











    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        -->
  </body>

  </html>
  