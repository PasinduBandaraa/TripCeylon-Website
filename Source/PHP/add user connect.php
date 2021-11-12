<?php

session_start();

$id = 0;
$name = '';
$email ='';
$password = '';

$mysqli = new mysqli('localhost','root','','reservation_system') or die(mysqli_error($mysqli));

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $mysqli ->query("INSERT INTO userdata(name,email,password) VALUES('$name','$email','$password')") or
            die($mysqli->error);

    $_SESSION['message']= "User has been added";
    $_SESSION['msg_type']= "Success";

    header("add users.php");
}
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $mysqli->query("DELETE FROM userdata WHERE id = $id") or die($mysqli->error());

    $_SESSION['message']= "User has been deleted";
    $_SESSION['msg_type']= "Success";

    header("location: add users.php");

}

if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $result = $mysqli -> query("SELECT * FROM userdata WHERE id=$id") or die($mysqli->error());

     if (count($result)== 01){
         $row = $result-> fetch_array();
         $name = $row['name'];
         $email = $row['email'];
         $password = $row['password'];
     }

     header("location: add users.php");

}


