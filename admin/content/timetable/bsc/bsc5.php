<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: ../../../login.php");
    exit;
}
?>



<?php


// INSERT INTO `notes` (`sno`, `title`, `description`, `tstamp`) VALUES (NULL, 'Buy time', 'Time is the most important of all buy some when u meet others.', current_timestamp());

$insert = false;
$update = false;
$delete = false;

// Connecting to the database

$servername = "localhost";
$username = "root";
$password = "";
$database = "tt_bsc_5";
$day = date('l');

// Creating a connection
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Sorry access denied" . mysqli_connect_error());
}

if (isset($_GET['delete'])) {
    $sno = $_GET['delete'];
    $delete = true;
    $sql = "DELETE FROM $day where `sno`=$sno ";
    $result = mysqli_query($conn, $sql);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['snoEdit'])) {
        // Update the record

        $sno = $_POST['snoEdit'];
        $period = $_POST['periodEdit'];
        $stime = $_POST['stimeEdit'];
        $etime = $_POST['etimeEdit'];
        $subject = $_POST['subjectEdit'];
        $teacher = $_POST['teacherEdit'];
        $location = $_POST['locationEdit'];

        // SQL query to be executed

        $sql = "UPDATE $day SET `period`= '$period' , `stime`= '$stime' , `etime` = '$etime' , `subject` = '$subject' , `teacher` = '$teacher' , `location` = '$location' WHERE $day.`sno`=$sno";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $update = true;
        } else {
            echo "Failed";
        }
    } else {
        // insert  the record


        // INSERT INTO `notes` (`sno`, `username`, `title`, `description`, `tstamp`) VALUES (NULL, 'asjad', 'hithere', 'olikuy', current_timestamp());
        $period = $_POST['period'];
        $stime = $_POST['stime'];
        $etime = $_POST['etime'];
        $subject = $_POST['subject'];
        $teacher = $_POST['teacher'];
        $location = $_POST['location'];

        // SQL query to be executed

        $sql = "INSERT INTO $day (`period`, `stime`, `etime`, `subject`, `teacher`, `location`) VALUES ('$period', '$stime', '$etime', '$subject', '$teacher', '$location')";
        $result = mysqli_query($conn, $sql);

        // Adding a new trip
        if ($result) {
            $insert = true;
        } else {
            echo "The record was not inserted successfully due to ---> " . mysqli_error($conn);
        }
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

    <title>Welcome - <?php echo $_SESSION['username']; ?></title>
</head>

<body>

    <!-- Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Note</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="bsc5.php" method="post">
                    <div class="modal-body">
                        <input type="hidden" name="snoEdit" id="snoEdit">
                        <div class="mb-3">
                            <label for="title" class="form-label">Period</label>
                            <input type="text" class="form-control" id="periodEdit" aria-describedby="emailHelp" name="periodEdit">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Start Time</label>
                            <input type="time" min="09:00" max="18:00" class="form-control" id="stimeEdit" aria-describedby="emailHelp" name="stimeEdit">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">End Time</label>
                            <input type="time" min="09:00" max="18:00" class="form-control" id="etimeEdit" aria-describedby="emailHelp" name="etimeEdit">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subjectEdit" aria-describedby="emailHelp" name="subjectEdit">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Teacher</label>
                            <input type="text" class="form-control" id="teacherEdit" aria-describedby="emailHelp" name="teacherEdit">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Location</label>
                            <input type="text" class="form-control" id="locationEdit" aria-describedby="emailHelp" name="locationEdit">
                        </div>
                    
                    </div>
                    <div class="modal-footer d-block mr-auto">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <?php

    require '/xampp/htdocs/Project-SMART/admin/_nav.php'

    ?>

    <?php
    if ($insert) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> Time table added successfully.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    }
    ?>

    <?php
    if ($delete) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> Time table has been deleted successfully.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    }
    ?>

    <?php
    if ($update) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> Time table has been updated successfully.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    }
    ?>
    <div class="container my-4">
        <h2>Add Time table for B.Sc Sem 5</h2>
        <form action="bsc5.php" method="post">
            <div class="mb-3">
                <label for="title" class="form-label">Period</label>
                <input type="text" class="form-control" id="period" aria-describedby="emailHelp" name="period">
            </div>
            
            <div class="mb-3">
                <label for="title" class="form-label">Start Time</label>
                <input type="time" min="09:00" max="18:00" class="form-control" id="stime" aria-describedby="emailHelp" name="stime">
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">End Time</label>
                <input type="time" min="09:00" max="18:00" class="form-control" id="etime" aria-describedby="emailHelp" name="etime">
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" aria-describedby="emailHelp" name="subject">
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Teacher</label>
                <input type="text" class="form-control" id="teacher" aria-describedby="emailHelp" name="teacher">
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Location</label>
                <input type="text" class="form-control" id="location" aria-describedby="emailHelp" name="location">
            </div>
            
            <button type="submit" class="btn btn-primary my-2">Add Note</button>
        </form>
    </div>

    <div class="container my-4">
        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th scope="col">Period</th>
                    <th scope="col">Start Time</th>
                    <th scope="col">End Time</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Teacher</th>
                    <th scope="col">Location</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "SELECT * FROM $day";
                $result = mysqli_query($conn, $sql);
                // echo var_dump($result);
                // $sno = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    // $sno = $sno + 1;
                    echo "<tr>
            
            <td>" . $row['period'] . "</td>
            <td>" . $row['stime'] . "</td>
            <td>" . $row['etime'] . "</td>
            <td>" . $row['subject'] . "</td>
            <td>" . $row['teacher'] . "</td>
            <td>" . $row['location'] . "</td>
            <td> <button class='edit btn btn-sm btn-primary' id=" . $row['sno'] . ">Edit</button> <button class='delete btn btn-sm btn-primary' id=d" . $row['sno'] . ">Delete</button>  </td>
            </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <hr>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <script>
        edits = document.getElementsByClassName('edit');
        Array.from(edits).forEach((element) => {
            element.addEventListener("click", (e) => {
                console.log("edit", );
                tr = e.target.parentNode.parentNode;
                period = tr.getElementsByTagName("td")[0].innerText;
                stime = tr.getElementsByTagName("td")[1].innerText;
                etime = tr.getElementsByTagName("td")[2].innerText;
                subject = tr.getElementsByTagName("td")[3].innerText;
                teacher = tr.getElementsByTagName("td")[4].innerText;
                location = tr.getElementsByTagName("td")[5].innerText;
                // console.log(title, description);
                periodEdit.value = period;
                stimeEdit.value = stime;
                etimeEdit.value = etime;
                subjectEdit.value = subject;
                teacherEdit.value = teacher;
                locationEdit.value = location;
                snoEdit.value = e.target.id;
                console.log(e.target.id);
                $('#editModal').modal('toggle');
            })
        })

        deletes = document.getElementsByClassName('delete');
        Array.from(deletes).forEach((element) => {
            element.addEventListener("click", (e) => {
                console.log("delete", );
                sno = e.target.id.substr(1, );


                if (confirm("Are you sure")) {
                    console.log("yes");
                    window.location = `bsc5.php?delete=${sno}`;
                } else {
                    console.log("no");
                }
            })
        })
    </script>

</body>

</html>