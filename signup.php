<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>

        form {
            background-color: white;
            margin: 1% 10% auto 10%;
            border: 20px solid gray;
            padding-top: 1%;
            padding-left: 5%;
            padding-bottom: 2%;
            
        }

        label {
            color: Red;
            display: block;
            font-size: 25px;
        }

        input {
            width: 30%;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/loginsystem">LoginSystem</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="welecome.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Sign Up</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

        <h1 align="center">Sign Up</h1>
        <h5>If you Sign Up Click on <a href="login.php">Login</a></h5>

    <form action="" method="post">
        <label for="">Name</label>
        <input type="text" name="name" required value="">
        <label for="">Age</label>
        <input type="text" name="age" required value="">
        <label for="">Country</label>
        <input type="text" name="country" required value="">
        <label for="">Email</label>
        <input type="text" name="em" required value="">
        <label for="">Password</label>
        <input type="password" name="pass" required value="">
        <br>
        <br>
        <input type="submit" name="submit">
    </form>
    <br>

</body>
</html>

<?php
require 'connection.php';

if(isset($_POST["submit"]))
{
    $name = $_POST["name"];
    $age = $_POST["age"];
    $country = $_POST["country"];
    $em = $_POST["em"];
    $pass = $_POST["pass"];
}

$query = "INSERT INTO tb_data VALUES('$name','$age','$country','$em','$pass')";
mysqli_query($conn,$query);
?>