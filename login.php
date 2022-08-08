<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
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

    <div id="frm">
        <h1>Login</h1>
        <form name="f1" action="login.php" onsubmit="return validation()" method="POST">
            <p>
                <label>UserName:</label>
                <input type="text" id="name" name="name" />
            </p>

            <p>
                <label>Password:</label>
                <input type="password" id="pass" name="pass" />
            </p>

            <p>
                <input type="submit" id="btn" value="Login" />
            </p>
        </form>
    </div>

</body>
</html>

<?php

include('connectionn.php');  
    $name = $_POST['name'];  
    $pass = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $name = stripcslashes($name);  
        $pass = stripcslashes($pass);  
        $name = mysqli_real_escape_string($con, $name);
        $pass = mysqli_real_escape_string($con, $pass);  
      
        $sql = "SELECT * FROM tb_data where name = '$name' and pass = '$pass'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid name or password.</h1>";  
        }
?>