<?php
    session_start();
    include("conn.php");
    include("fun.php");
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $user_name=$_POST['uname'];
        $password=$_POST['psw'];

        //echo $user_name;
        //echo $password;
        if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
            $user_id='random_num'(20);
            //$sql="INSERT INTO 'invenlly_syed'.'users ('id', 'user_id', 'user_name', 'password', 'date') VALUES ('$id', '$user_id', '$user_name', '$password', CURRENT_TIMESTAMP());";

            $query1 = "INSERT INTO `syed` (`user_id`, `user_name`, `password`) VALUES ('$user_id', '$user_name', '$password');";
            //echo $query1;
            mysqli_query($conn,$query1);  
            header("Location: login.php");
            mysqli_close($con);
            //echo "syed";
            die;
        }
        else{
            echo "please enter a valid user name and password";
        }
    }
?>





<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <title>Sign up</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="/iot/css/signup.css">
    </head>
    <body>
        <div class="box">
            <h2>User Signup Form</h2>
            <form action="signup.php" method="POST">
            <div class="name">
                <i class="fas fa-user"></i>
                <label for="uname"></label>
                <input type="text" name="uname" placeholder="Enter Your Name">
            </div><br>
            <div class="passward">
                <i class="fas fa-lock"></i>
                <label for="psw"></label>
                <input type="text" name="psw" placeholder="password">
            </div>
            <div><br>
                <button type="submit" class="btn"  value="">sign up</button>
            </form>
            </div>
        </div>

    </body>
</html>