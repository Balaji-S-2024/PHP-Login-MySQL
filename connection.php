<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "project";

if(!$con = mysqli_connect($host,$user,$password,$db)){
    die("failed to connect");
}