<?php
    session_start(); 

    include "db_conn.php";

    if (isset($_POST['uname']) && isset($_POST['password'])) {

        function validate($data){

            $data = trim($data);

            $data = stripslashes($data);

            $data = htmlspecialchars($data);

            return $data;

        }

        $uname = validate($_POST['uname']);

        $pass = validate($_POST['password']);

        if (empty($uname)) {

            header("Location: login.php?error=User Name is required");
            exit();
        }
        else if(empty($pass)){

            header("Location: login.php?error=Password is required");

            exit();

        }
        else{

            $sql = "SELECT * FROM syed WHERE user_name='$uname' AND password='$pass'";

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) === 1) {

                $row = mysqli_fetch_assoc($result);

                if ($row['user_name'] === $uname && $row['password'] === $pass) {

                    echo "Logged in!";

                    $_SESSION['user_name'] = $row['user_name'];

                    $_SESSION['name'] = $row['name'];

                    $_SESSION['id'] = $row['id'];

                    header("Location: login.php");

                    exit();

                }
                else{

                    header("Location: login.php?error=Incorect User name or password");

                    exit();

                }

            }   
            else{

                header("Location: login.php?error=Incorect User name or password");

                exit();

            }

        }

    }
    else{

        header("Location: index.php");

        exit();

    }
 

?>






<!DOCTYPE html>
<html>
    <head>
        <title>login page</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

        <link rel="stylesheet" href="/iot/css/login.css">
    </head>
    <body>
        <div class="box">
        <h2>User Login Form</h2>
        <form action="login.php" method="POST">
            <div class="name">
                <i class="fas fa-user"></i>
                <label for="uname"></label>
                <input type="text" name=uname placeholder="Enter Your Name">
            </div><br>
            <div class="password">
                <i class="fas fa-lock"></i>
                <label for="psw"></label>
                <input type="text" name=psw placeholder="password">
            </div>
            <div><br>
                <input class="btn" type="button" value="login">
            </div>
        </form>
    </body>
</html>