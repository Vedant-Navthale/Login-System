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