<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Bootstrap-form-saving-data</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Reg-Form</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>




  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $rollno = $_POST['rollno'];
    $dept = $_POST['dept'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $add = $_POST['add'];
    $password = $_POST['pass'];
  }
  // connect to a DataBase
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "Nomi";

  $conn = mysqli_connect($servername, $username, $password, $database);

  // create a connection
  if (!$conn) {
    die("Connection was faild: " . mysqli_connect_error());
  } else {
    $sql = "INSERT INTO `registration` (`Name`, `Roll No`, `Department`, `Email`, `Phone No`, `Address`, `Reg-Password`) VALUES ('$name', '$rollno', '$dept', '$email', '$phone', '$add', '$password')";
    $result = mysqli_query($conn, $sql);
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Successfully!</strong> Your Entry was Submit Successfully.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
  }
  













  // if (!$conn) {
  //   die("Connection was faild: " . mysqli_connect_error());
  // } else {
  //   $sql = "INSERT INTO `registration` (`Name`, `Roll No`, `Department`, `Email`, `Phone No`, `Address`, `Reg-Password`) VALUES ('$name', '$rollno', '$dept', '$email', '$phone', '$add', '$password')";
  //   $result = mysqli_query($conn, $sql);
  //   if ($result) {
  //     echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  //         <strong>Successfully!</strong> Your Entry was Submit Successfully.
  //         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  //         </div>';
  //   } 
  //   else {
  //     echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  //         <strong>Successfully!</strong>Alert! This Entry was already Submit in this form.
  //         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  //         </div>';
  //   }
  // }



  ?>

  <div class="container">
    <h1>Fill Your Registration Form</h1>
    <form action="/php-tutorials/form-saving-data-sql.php" method="post">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="name" class="form-control" id="name" name="name" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="rollno" class="form-label">Roll Number</label>
        <input type="number" class="form-control" id="rollno" name="rollno">
      </div>
      <div class="mb-3">
        <label for="dept" class="form-label">Department</label>
        <input type="text" class="form-control" id="dept" name="dept">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="phone" class="form-label">Phone No.</label>
        <input type="number" class="form-control" id="phone" name="phone">
      </div>
      <div class="mb-3">
        <label for="add" class="form-label">Address</label>
        <textarea name="add" id="add" cols="30" rows="3" class="form-control" name="add"></textarea>
        <!-- <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"> -->
      </div>
      <div class="mb-3">
        <label for="pass" class="form-label">Reg-Password</label>
        <input type="password" class="form-control" id="pass" name="pass">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>