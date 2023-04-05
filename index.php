<?php

session_start();
include("connection.php");
include("function.php");

$userdata = checklogin($con); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup</title>
</head>
<body>
    <style>
        *{
            margin: 0px;
            padding: 0px;
            box-sizing: ;
        }
        body{
            background-image: url('image.JPG');
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
    <a href="logout.php" style="margin-left: 1200px;">LogOut</a>
    <h1 style="margin-left: 200px;">Welcome :)</h1>
    <p style="font-size: 20px;margin-left: 300px;">Hello <?php echo $userdata['name']; ?></p>
    <br><br><br><br>
    <p><a href="#" ><button>Profile</button> </a></p><br><br>
    <p><a href="#"><button>Drives</button></a></p><br><br>
    <p><a href="#"><button>Contest</button></a></p><br><br>
    <p><a href="#"><button>Marks</button></a></p>
</body>
</html>