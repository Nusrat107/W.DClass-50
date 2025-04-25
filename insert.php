<?php
include 'config.php';
?>

<?php

if (isset($_POST['submit'])){

    $name = $_POST['name']; 
    $roll = $_POST['roll']; 
    $class = $_POST['class'];
    $address = $_POST['address'];


    $query = "INSERT INTO students (name, roll, class,  address) VALUES ('$name', '$roll', '$class', '$address')";

    $insertData = mysqli_query($connection, $query);

    if($insertData == true){
        header('location:index.php');
    }
    else{
        echo "Failed to insert data";
    }

}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crade Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

  <!-- ///navigation-bar//// -->

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">School Management</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="insert.php">Students</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Teacher</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Staffs</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class= "container">
<form action="" method="post">
  <div class="mb-3 mt-5">
    <label for="exampleInputEmail1" class="form-label">Student Name:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="" placeholder="Enter your name" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Student Roll:</label>
    <input type="number" class="form-control" id="exampleInputEmail1" name="roll" value="" placeholder="Enter your roll" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Student Class:</label>
    <input type="texr" class="form-control" id="exampleInputEmail1" name="class" value="" placeholder="Enter your class" required>
  </div>
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Address:</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="address" value="" placeholder="Enter your class" required>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1" required>Check me out</label>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>