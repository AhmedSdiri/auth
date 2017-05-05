<?php
/*
if($_POST)
{
    $host="localhost";
    $user="root";
    !pass="";
    $db="auth";
}*/

$username = $_POST['username'];
$password = $_POST['password'];

// safity
$username = stripcslashes($username);
$password = stripcslashes($password);
/*
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($paswword);*/

$conn = mysqli_connect("localhost","root","","auth");
$query = "SELECT * from users where
usename ='$username' and password = '$password'";

$result = mysqli_query($conn,$query);
if(mysqli_num_rows($result) == 1){
    //$row = mysql_fetch_row($result);
    $row = $result->fetch_assoc();

    if(($row['usename'] == $username ) && ($row['password'] == $password)){
        echo 'login success';
    }
    else{
        echo "failed";
    }
    
}