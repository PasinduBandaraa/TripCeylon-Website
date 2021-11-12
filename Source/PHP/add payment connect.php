<?php

session_start();


$name = '';
$number = '';
$cvv = '';
$exdate = '';

$mysqli = new mysqli('localhost','root','','reservation_system') or die(mysqli_error($mysqli));

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $number = $_POST['number'];
    $cvv = $_POST['cvv'];
    $exdate = $_POST['exdate'];

    $mysqli ->query("INSERT INTO paymentdata (name,number,cvv,exdate) VALUES('$name','$number','$cvv','$exdate')") or
            die($mysqli->error);

    $_SESSION['message']= "Payment has been added";
    $_SESSION['msg_type']= "Success";

    header("add payments.php");
}
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $mysqli->query("DELETE FROM paymentdata WHERE id = $id") or die($mysqli->error());

    $_SESSION['message']= "Payment has been deleted";
    $_SESSION['msg_type']= "Success";

    header("location: add payments.php");

}





