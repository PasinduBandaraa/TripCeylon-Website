<?php

session_start();


$a_name = '';
$date = '';
$topic = '';
$email = '';
$content = '';

$mysqli = new mysqli('localhost','root','','reservation_system') or die(mysqli_error($mysqli));

if (isset($_POST['save'])) {
    $a_name = $_POST['a_name'];
    $date = $_POST['date'];
    $topic = $_POST['topic'];
    $email = $_POST['email'];
    $content = $_POST['content'];

    $mysqli ->query("INSERT INTO articledata (a_name,date,topic,email, content) VALUES('$a_name','$date','$topic','$email','$content')") or
            die($mysqli->error);

    $_SESSION['message']= "Article has been added";
    $_SESSION['msg_type']= "Success";

    header("add articles.php");
}
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $mysqli->query("DELETE FROM articledata WHERE id = $id") or die($mysqli->error());

    $_SESSION['message']= "Article has been deleted";
    $_SESSION['msg_type']= "Success";

    header("location: add articles.php");

}
