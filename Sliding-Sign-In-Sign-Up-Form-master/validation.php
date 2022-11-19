<?php


include '_dbconnect.php';

$username = $_POST['username'];
$pass = $_POST['password'];

$sql = "SELECT * FROM alumni WHERE username = '$username'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
   

if ($num == 1){
    while($row=mysqli_fetch_assoc($result)){
        if ($pass == $row['password']){

            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['username']=$username;
            header('location: welcome.php');
        }
        else{
            echo "Invalid ";
            // header('location: login.php');
        }
    }
} 
else{
echo "Invalid Credentils";
// header('location: login.php');
}
?>