<?php

    require_once 'config.php';

    if(isset($_POST['submit']))
    {
        
            $name        = $_POST["name"];
            $hotel       = $_POST["hotel"];
            $email     = $_POST["email"];
            $review       = $_POST["review"];
            $rate      = $_POST["rate"];
           
              

        $result=mysqli_query($conn,"INSERT INTO `reviewdata`(`name`, `hotel`, `email`, `review`, `rate`) 
        VALUES ('$name', '$hotel' ,'$email','$review','$rate')");



    if(!empty($result))
    {
      echo "insert success";
    }
    else
    {
        echo "error";
    }

    
}
header("refresh:1 ; url = signup.php");
?>