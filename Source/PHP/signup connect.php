<?php

    require_once 'config.php';

    if(isset($_POST['signup']))
    {
        
            $name        = $_POST["name"];
            $email        = $_POST["email"];
            $password     = $_POST["pwd"];
           
              

        $result=mysqli_query($conn,"INSERT INTO `userdata`(`name`, `email`, `password`) VALUES ('$name', '$email' ,'$password')");


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