<?php

    require_once 'config.php';

    if(isset($_POST['submit']))
    {
        
            $firstname       = $_POST["firstname"];
            $lastname       = $_POST["lastname"];
            $hotel            = $_POST["hotel"];
            $email            = $_POST["email"];
            $phonenumber      = $_POST["phonenumber"];
            $description      = $_POST["description"];
           
              

        $result=mysqli_query($conn,"INSERT INTO `hoteldata`(`firstname`, `lastname`, `hotel`,`email`, `phonenumber`, `description`) VALUES ('$firstname', '$lastname' ,'$hotel','$email','$phonenumber','$description')");


    if(!empty($result))
    {
      echo "insert success";
    }
    else
    {
        echo "error";
    }

    
}
header("refresh:1 ; url = hotel.php");
?>