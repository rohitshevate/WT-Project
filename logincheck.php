<?php
session_start();

$con = mysqli_connect('Localhost','root');
if($con){
    echo "connection successfull";
}else{
    echo "no connection";
}
$db = mysqli_select_db($con,'activation');

if(isset($_POST['submits'])){
    $users = $_POST['username1'];
    $pass = $_POST['password1'];

    $sql = "SELECT * From logintable WHERE user='$users' AND password='$pass'";
    $query = mysqli_query($con,$sql);

    if($row = mysqli_num_rows($query)){
            echo "login successfull";
            $_SESSION['user'] = $users;
            header('location:homepage.php');
        }else{
            echo "login failed";
            header('location:login.php');
        }
        
    }
?>