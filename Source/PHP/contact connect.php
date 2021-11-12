<?php

    require_once 'config.php';

    if(isset($_POST['send']))
    {
        
            $name        = $_POST["name"];
            $email     = $_POST["email"];
            $number      = $_POST["number"];
            $message      = $_POST["message"];
           
              

        $result=mysqli_query($conn,"INSERT INTO `contactdata`(`name`, `email`, `number`, `message`) 
        VALUES ('$name','$email','$number','$message')");



    if(!empty($result))
    {
      echo "insert success";
    }
    else
    {
        echo "error";
    }

    
}
header("refresh:1 ; url = contact.php");
?>