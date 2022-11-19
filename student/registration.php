<?php
    $showAlert = false;
    $showError = false;
if ($_SERVER['REQUEST_METHOD']=='POST'){
    include "_dbconnect.php";
    $username = $_POST["username"];
    $roll = $_POST['roll'];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $existSql="SELECT * FROM `students` WHERE username= '$username'";
    $result=mysqli_query($conn, $existSql);
    $numExistRows= mysqli_num_rows($result);
    if ($numExistRows>0){
        $showError = "Username already exists";
    }
    else{
    if(($password==$cpassword)){
        // $hash=password_hash($password, PASSWORD_DEFAULT);
        $sql="INSERT INTO students (username, password, roll) VALUES ('$username', '$password', '$roll')";
        
        $result=mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
        }
    } 
    else{
        $showError = "Passwords do not match";
    }
}
}



if ($showAlert){
    echo '<div class="alert alert-success alert-success fade show" role="alert">
    <strong>Success!</strong> Your account has been created.
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




