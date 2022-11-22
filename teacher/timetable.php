<?php   

$insert =false;
$update=false;
$delete=false;

$servername="localhost";
$username="root";
$password="";  
$database="empfile";

$conn=mysqli_connect($servername, $username, $password, $database);

if (!$conn){
    die("Sorry access denied". mysqli_connect_error());
}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <!-- //cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>
    <!-- //cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css -->
    
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>

</head>
<body>

    <h1 class="mx-5">View the table here</h1>
<div class="container my-4">
        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th scope="col">SNo</th>
                    <th scope="col">Emp ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Address</th>
                </tr>
            </thead>
            <tbody>
            <?php
$sql = "SELECT * FROM `empfile`";
$result = mysqli_query($conn, $sql);
$sno=0;
while($row = mysqli_fetch_assoc($result)){
    $sno +=1;
    echo "<tr>
    <th scope='row'>".$sno."</th>
    <td>".$row['id']."</td>
    <td>".$row['name']."</td>
    <td>".$row['designation']."</td>
    <td>".$row['address']."</td>
  </tr>";
}
?>
            </tbody>
        </table>      
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</body>
</html>