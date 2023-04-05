<?php
session_start();
echo "logout";
if(isset($_SESSION['userid'])){
    unset($_SESSION['userid']);
}
header("Location: signup.php");
die;