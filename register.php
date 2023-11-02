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
  function show($id,$selec,$inp){
    if (empty($id)) {
      
      echo '
      <style>
      #'.$selec.'::before{
        content: "Required";
      }
      
      </style>';
      echo "<style> #".$inp."{";
      include "style.css";
      echo "</style>";
      return true;
    }
    else {
      return false;
    }
  }
  if (isset($_POST["fname"])) {
    include "db.php";
    $user = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['mail'];
    $password = $_POST['password'];
    $npassword = $_POST['npassword'];
    $a=show($user,"n","exampleInputPassword1");
    $b=show($lname,"n","exampleInputPassword2");
    $c=show($email,"n","exampleInputEmail");
    $d=show($password,"n","exampleInputPassword");
    $e=show($npassword,"n","exampleInputPasswor");

    if (show($user,"n","exampleInputPassword1") == false && show($lname,"l","exampleInputPassword2") == false && show($email,"e","exampleInputEmail") == false && show($password,"p","exampleInputPassword") == false && show($npassword,"np","exampleInputPasswor") == false) {
      
    if ($password == $npassword) {
      $sql = "INSERT INTO `a` (`Fname`, `Lname`, `Email`, `Password`) VALUES ('$user', '$lname', '$email', '$password');";
      $a = mysqli_query($con, $sql);
      if ($a) {
        echo '<div class="alert alert-success" role="alert">
        Your account are created Now You <a href="login.php> LogIn </a> Your Account.
      </div>';
      }

    }
    else {
      echo '<div class="alert alert-success" role="alert">
      Your Password And Repeat Password Doesn\'t Matched. 
    </div>';
    }
    }
  }
  ?>
  
 <div class="main1 ">
    <div class="main2">
      <form action="register.php" method="post">
        <table >
          <tr>
            <th class="hd3">Registeration</th>
          </tr>
          <tr>
            <td>
              <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">name</label><span></span>
          <span id="n"></span><input type="text" class="form-control" id="exampleInputPassword1" name="fname">
        </div>
            </td>
            
          </tr>
          <tr>
            <td>
              <div class="mb-3">
          <label for="exampleInputPassword2" class="form-label">last name</label>
          <span id="l"></span><input type="text" class="form-control" id="exampleInputPassword2" name="lname">
        </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">email</label>
          <span id="e"></span><input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mail" placeholder="@gmail.com">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
            </td>
          </tr>
          <tr>
            <td>
               <div class="mb-3">
          <label for="exampleInputPassword" class="form-label">Password</label> <span id="a"></span>
          <span id="p"></span><input type="password" class="form-control" id="exampleInputPassword" name="password">
        </div>
            </td>
          </tr>
          <tr>
            <td>
               <div class="mb-3">
          <label for="exampleInputPasswor" class="form-label">Repeat Password</label>
          <span id="np"></span><input type="password" class="form-control" id="exampleInputPasswor" name="npassword">
        </div>
            </td>
          </tr>
          <tr>
            <td>
               <div class="btn_s">
          <button type="submit" class="btn btn-primary" class="btn">Submit</button>
        </div>
            </td>
          </tr>
        </table>
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