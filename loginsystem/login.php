<?php
session_start();

include("db.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Login</title>
  </head>
  <body>
    <div class="container">
        <form class="form" method="POST">
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control ip" name="lemail" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control ip" name="lpassword">
            </div>

            <div class="mb-3">
                <p>Dont have account? <a href="index.php">Sign Up</a> </p>
            </div>

            <button name="login" type="submit" class="btn btn-primary">Login</button>
        </form>



    </div>
    

    
    
    
    
    <!--Bootstrap Js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  
  </body>
</html>


<?php


if(isset($_POST["login"])){
  $email = $_POST["lemail"];
  $password = $_POST["lpassword"];
  

  if($email == "" || $password == ""){
    echo "Fill all blanks";
  }else{
   $sql = "SELECT * FROM users WHERE email = '".$email."' AND password = '".$password."' ";

   $result=mysqli_query($conn,$sql);
   if(mysqli_num_rows($result)>0){
    $_SESSION["user"] = $email;
    header("Location: welcome.php");
   }else{
    echo "user no";
   }

  }
}
?>