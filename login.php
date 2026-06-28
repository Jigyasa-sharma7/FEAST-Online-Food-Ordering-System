<?php
session_start();
if (isset($_SESSION["user"])){
    header("Location: product.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
    </head>
<body>
    <div class="container">
      <?php
        if(isset($_POST['login'])){
          $email=$_POST['email'];
          $password=$_POST['password'];
          require_once "database.php";
          $sql = "SELECT * FROM registration WHERE email='$email'";
          $result = mysqli_query($con,$sql);
          $user=mysqli_fetch_array($result, MYSQLI_ASSOC);
          if ($user){
            if(password_verify($password, $user['password'])){
              session_start();
              $_SESSION["user"] = "yes";
              header("Location: product.php");
              die();
            }
            else{
              echo "<div class='alert'>Password does not match</div>";
            }
          }
          else{
            echo "<div class='alert'>User does not exist</div>";
          }
        }
      ?>
      <div class="content">
        <h2>Login to get the yummiest food !</h2>
        <form action="login.php" method="post">
          <div class="container">
            <input type="email" id="email" name="email" placeholder="Enter Email">
            <br>
            <input type="password" id="password" name="password" placeholder="Enter Password">
          </div>
          <div class="form-group">
            <!-- <input type="submit" value="Login" name="login"> -->
             <button name="login" type="submit">Login</button>
          </div>
        </form>    
        <div class="reg"><p>Not Registered yet<a href="registration.php"> Register Here</a></p></div>
    </div>
</body>
</html>