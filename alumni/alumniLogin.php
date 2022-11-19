<?php
    $login = false;
    $showError = false;
if ($_SERVER['REQUEST_METHOD']=='POST'){
    include "_dbconnect.php";
    $username = $_POST["username"];
    $password = $_POST["password"];
    
        $sql= "SELECT * FROM alumni where username='$username'";

        $result=mysqli_query($conn, $sql);
        $num=mysqli_num_rows($result);
        if ($num == 1){
            while($row=mysqli_fetch_assoc($result)){
                if ($password == $row['password']){
                    $login = true;
                    session_start();
                    $_SESSION['loggedin']=true;
                    $_SESSION['username']=$username;
                    header("location: welcome.php");
                }
                else{
                    $showError = "Invalid Credentils";
                }
            }
        } 
    else{
        $showError = "Invalid Credentils";
    }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="teacher.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/login.css">
    <title>Alumni Login</title>
</head>

<body>

    <?php
    if ($login){
        echo '<div class="alert alert-success alert-success fade show" role="alert">
        <strong>Success!</strong> Your are logged in.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    if ($showError){
        echo '<div class="alert alert-danger alert-success fade show" role="alert">
        <strong>Error!</strong>'. $showError.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    ?>

    <div id="back">
        <div class="backRight"></div>
        <div class="backLeft"></div>
    </div>

    <div id="slideBox">
        <div class="topLayer">
            <div class="left">
                <div class="content">
                    <h2>Sign Up</h2>
                    <form method="post" onsubmit="return false;">
                        <div class="form-group">
                            <input type="text" placeholder="username" />
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Password" />
                        </div>
                        <div class="form-group"></div>
                        <div class="form-group"></div>
                        <button>Sign up</button>
                    </form>
                </div>
                <button id="goLeft" class="off">Login</button>
            </div>
            <div class="right">
                <div class="content">
                    <h2>Login</h2>
                    <form method="post" >
                        <div class="form-group">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username"/>
                        </div>
                        <div class="form-group">
                            <label for="Password class="form-label">Password</label>
                            <input type="text" name="password"/>
                        </div>
                        <button id="login" type="submit">Login</button>
                    </form>
                </div>
                <button id="goRight" class="off">Sign Up</button>
            </div>
        </div>
    </div>

    <!--Inspiration from: http://ertekinn.com/loginsignup/-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {
            $('#goRight').on('click', function () {
                $('#slideBox').animate({
                    'marginLeft': '0'
                });
                $('.topLayer').animate({
                    'marginLeft': '100%'
                });
            });
            $('#goLeft').on('click', function () {
                $('#slideBox').animate({
                    'marginLeft': '50%'
                });
                $('.topLayer').animate({
                    'marginLeft': '0'
                });
            });
        });
    </script>
</body>

</html>