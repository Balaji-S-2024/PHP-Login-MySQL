<?php
session_start();
include("connection.php");
include("function.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(!empty($username) && !empty($username) && !is_numeric($username)){
        $userid = random_num(5);
        $stm = "insert into users(userid,name,password) values('$userid','$username','$password')";
        mysqli_query($con,$stm);
        header("Location: login.php");
        die;
    }else{
        echo "Enter Valid Credentials";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SIGNUP</title>
</head>
<body>
    <style>
        body{
            background-image: url('image.JPG');
            background-repeat: no-repeat;
            background-size: cover;
        }
        #text{
            height: 25px;
            width: 100%;
            border-radius: 5px;
            padding: 4px;
            border: solid thin #aaa;
        }
        #button{
            padding: 10px;
            width: 100px;
            color: white;
            background-color: lightblue;
            border: none;
        }
        #box{
            background-color: grey;
            margin: auto;
            margin-top: 80px; 
            width: 300px;
            padding: 20px;
        }
    </style>    
    <h1 style="margin-left: 500px;">Account Registration</h1>
    <div id="box">
        <form action="" method="post">
            <div style="font-size: 20px;margin-left: 120px;color: white;">SIGNUP</div>
            <br><br>
            <label for="Name" style="color: white;margin-left: 123px">-Name-</label>
            <input type="text" name="username" id="text" ><br><br>
            <label for="Password" style="color: white;margin-left: 113px">-Password-</label>
            <input type="password" name="password" id="text"><br><br>
            <input type="submit" value="Signup" id="button" style="width: 100%"><br><br>
            <a href="login.php">Login</a>
        </form>

    </div>


</body>
</html>