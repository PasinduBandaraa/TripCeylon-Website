<?php

session_start();

$id = 0;
$firstname = '';
$lastname = '';
$hotel = '';
$email = '';
$phonenumber = '';
$description ='';

$mysqli = new mysqli('localhost','root','','reservation_system') or die(mysqli_error($mysqli));

if (isset($_POST['save'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $hotel = $_POST['hotel'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $description = $_POST['description'];

    $mysqli ->query("INSERT INTO hoteldata (firstname,lastname,hotel,email, phonenumber,description) VALUES('$firstname','$lastname','$hotel','$email','$phonenumber','$description')") or
            die($mysqli->error);

    $_SESSION['message']= "Hotel has been added";
    $_SESSION['msg_type']= "Success";

    header("add hotels.php");
}
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $mysqli->query("DELETE FROM hoteldata WHERE id = $id") or die($mysqli->error());

    $_SESSION['message']= "Hotel has been deleted";
    $_SESSION['msg_type']= "Success";

    header("location: add hotels.php");

}

if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $result = $mysqli -> query("SELECT * FROM hoteldata WHERE id=$id") or die($mysqli->error());

     if (count($result)== 01){
         $row = $result-> fetch_array();
         $name = $_POST['firstname'];
         $country = $_POST['lastname'];
         $email = $_POST['hotel'];
         $name = $_POST['email'];
         $country = $_POST['phonenumber'];
         $email = $_POST['description'];
     }

     header("location: add hotels.php");

}


