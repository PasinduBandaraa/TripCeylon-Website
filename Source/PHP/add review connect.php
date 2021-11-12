<?php

session_start();


$name = '';
$hotel = '';
$email = '';
$email = '';
$review = '';
$rate = '';

$mysqli = new mysqli('localhost','root','','reservation_system') or die(mysqli_error($mysqli));

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $hotel = $_POST['hotel'];
    $email = $_POST['email'];
    $review = $_POST['review'];
    $rate = $_POST['rate'];

    $mysqli ->query("INSERT INTO reviewdata (name,hotel,email,review,rate) VALUES('$name','$hotel','$email','$review','$rate')") or
            die($mysqli->error);

    $_SESSION['message']= "Review has been added";
    $_SESSION['msg_type']= "Success";

    header("add reviews.php");
}
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $mysqli->query("DELETE FROM reviewdata WHERE id = $id") or die($mysqli->error());

    $_SESSION['message']= "Review has been deleted";
    $_SESSION['msg_type']= "Success";

    header("location: add reviews.php");

}





