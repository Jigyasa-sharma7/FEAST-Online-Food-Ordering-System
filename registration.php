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
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .alert {
            color: red;
            padding: 5px;
            border: 1px solid red;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
          if(isset($_POST["submit"])){
            // print_r($_POST);
            $fullName=$_POST["fullname"];
            $email=$_POST["email"];
            $password=$_POST["password"];
            $passwordRepeat=$_POST["repeat_password"];

            $passwordHash=password_hash($password, PASSWORD_DEFAULT);

            $errors = array();

            if (empty($fullName) OR empty($email) OR empty($password) OR empty($passwordRepeat)){
                array_push($errors, "All fields are required");
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                array_push($errors, "Email is not valid");
            }
            if (strlen($password)<8){
                array_push($errors, "Password must be atleast 8 characters long");
            }
            if ($password!==$passwordRepeat){
                array_push($errors,"Password does not match");
            }
            
            require_once "database.php";
            $sql="SELECT * FROM registration WHERE email= '$email'";
            $result= mysqli_query($con,$sql);
            $rowCount = mysqli_num_rows($result);
            if ($rowCount>0){
                array_push($errors,"Email already exists!");
            }
            if (count($errors)>0){
                foreach($errors as $error) {
                    echo "<div class='alert'>$error</div>";
                }
            }    
            else{
                
                $sql = "INSERT INTO `registration`(`full_name`, `email`, `password`) VALUES (?,?,?)";
                $stmt= mysqli_stmt_init($con);
                $preparestmt= mysqli_stmt_prepare($stmt,$sql);
                if ($preparestmt){
                    mysqli_stmt_bind_param($stmt,'sss',$fullName,$email,$passwordHash);
                    if (mysqli_stmt_execute($stmt)){
                        $_SESSION["user"]="submit";
                        header("Location: product.php");
                        exit();
                    }
                }
                    // echo "<div class='alert'>You are Registered Successfully</div>";
                
                else{
                    die("Something went wrong");
                }

            }
        }
                
        ?>
        <div class="content">
        <form action="registration.php" method="post">
            <div class="container">
                <input type="text" name="fullname" placeholder="Full Name">
                <br>
                <input type="email" name="email" placeholder="Email">
                <br>
                <input type="password" name="password" placeholder="Password">
                <br>
                <input type="password" name="repeat_password" placeholder="Verify Your Password">
            </div>
            <div class="form-group">
                <!-- <input type="submit" value="Register" name="submit"> -->
                 <button type="submit" name="submit">Register</button>
            </div>
        </form>    
        <div class="reg"><p>Already Registered<a href="login.php"> Login Here</a></p></div>
        </div>
</body>
</html>