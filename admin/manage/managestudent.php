<?php

$insert = false;
$update = false;
$delete = false;

$servername = "localhost";
$username = "root";
$password = "";
$database = "users_db";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Sorry access denied" . mysqli_connect_error());
}

if (isset($_GET['delete'])) {
    $sno = $_GET['delete'];
    $delete = true;
    $sql = "DELETE FROM `students` WHERE `sno` = $sno";
    $result = mysqli_query($conn, $sql);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['snoEdit'])) {
        $sno = $_POST["snoEdit"];
        $id = $_POST['empEdit'];
        $name = $_POST['nameEdit'];
        $sem = $_POST['semEdit'];
        
        $sql = "UPDATE `students` SET `roll` = '$id' , `username` = '$name' , `sem` = '$sem' WHERE `students`.`sno` = $sno";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $update = true;
        } else {
            echo "Failed";
        }
    } else {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $sem = $_POST['sem'];
        
        $sql = "INSERT INTO `empfile` (`roll`, `username`, `sem`) VALUES ('$id', '$name', '$sem')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $insert = true;
        } else {
            echo "The record was not inserted successfully due to ---> " . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit here</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <!-- //cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

</head>

<body>

    <?php
    include '../_nav.php';
    if ($delete) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> Your note has been deleted successfully.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    }
    ?>

    <?php
    if ($update) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> Your note has been updated successfully.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    }
    ?>

    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Record</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="managestudent.php?update=true" method="post">
                        <input type="hidden" name="snoEdit" id="snoEdit">
                        <div class="mb-3 mx-5">
                            <label for="id" class="form-label">Enter Roll Number</label>
                            <input type="text" class="form-control" id="empEdit" name="empEdit" placeholder="20CAB118">
                        </div>
                        <div class="mb-3 mx-5">
                            <label for="empName" class="form-label">Enter Name</label>
                            <input type="text" class="form-control" id="nameEdit" name="nameEdit" placeholder="Shibli">
                        </div>
                        <div class="mb-3 mx-5">
                            <label for="sem" class="form-label">Enter Semister</label>
                            <input type="text" class="form-control" id="semEdit" name="semEdit" placeholder="1">
                        </div>

                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-primary mx-5" id="save">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <h1 class="mx-5">Manage Student's Details</h1>
    <div class="container my-4">
        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th scope="col">SNo</th>
                    <th scope="col">Roll Number</th>
                    <th scope="col">Name</th>
                    <th scope="col">Semister</th>
                    <th scope="col">Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `students`";
                $result = mysqli_query($conn, $sql);
                $sno = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    $sno += 1;
                    echo "<tr>
    <th scope='row'>" . $sno . "</th>
    <td>" . $row['roll'] . "</td>
    <td>" . $row['username'] . "</td>
    <td>" . $row['sem'] . "</td>
    
    <td><button class='edit btn btn-sm btn-primary' id=" . $row['sno'] . ">Edit</button> <button class='delete btn btn-sm btn-primary' id=d" . $row['sno'] . ">Delete</button>  </td>
  </tr>";
                }
                ?>

            </tbody>
        </table>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <script>
            edits = document.getElementsByClassName("edit");
            Array.from(edits).forEach((element) => {
                element.addEventListener("click", (e) => {
                    console.log("edit ", );
                    tr = e.target.parentNode.parentNode;
                    id = tr.getElementsByTagName("td")[0].innerText;
                    name = tr.getElementsByTagName("td")[1].innerText;
                    sem = tr.getElementsByTagName("td")[2].innerText;
                    
                    
                    empEdit.value = id;
                    nameEdit.value = name;
                    semEdit.value = sem;
                    
                    snoEdit.value = e.target.id;
                    $('#editModal').modal('toggle');
                });
            });

            deletes = document.getElementsByClassName('delete');
            Array.from(deletes).forEach((element) => {
                element.addEventListener("click", (e) => {
                    console.log("delete", );
                    sno = e.target.id.substr(1, );

                    if (confirm("Are you sure")) {
                        console.log("yes");
                        window.location = `managestudent.php?delete=${sno}`;
                    } else {
                        console.log("no");
                    }
                })
            })
        </script>
</body>

</html>