<?php
echo "login page";
include '_dbconnect.php';
$sql = "SELECT * FROM alumni";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        echo $row['sno'] ." " .$row['username'] . " " .$row['password'] ." " .$row['year']. "<br>";
    }
}
else{
    echo "no result";
}

    $login = false;
    $showError = false;
if ($_SERVER['REQUEST_METHOD']=='POST'){
    
    $username = $_POST["username"];
    $password = $_POST["password"];
    
        $sql= "SELECT * FROM alumni where username='$username'";

        $result=mysqli_query($conn, $sql);
        // var_dump($result);
        $num=mysqli_num_rows($result);
        var_dump($num);
        if ($num == 1){
            while($row=mysqli_fetch_assoc($result)){
                echo $row['password'] ."<br>";
                var_dump($login);
                if ($password == $row['password']){
                    $login = true;
                    // session_start();
                    // $_SESSION['loggedin']=true;
                    // $_SESSION['username']=$username;
                    header("location: welcome.php");
                }
                else{
                    $showError = "Invalid Password";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>Login testing</title>
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
    <form action="../../Project-SMART/testing/login.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username"> <br>
        <label for="password">Password</label>
        <input type="text" name="password" id="password"> <br>
        <button>Submit</button>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>