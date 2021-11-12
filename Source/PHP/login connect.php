<?php

    require_once 'config.php';

    if(isset($_POST['signup']))
    {
        
            $name       = $_POST["name"];
            $password     = $_POST["password"];
            
           
              

        $result=mysqli_query($conn,"INSERT INTO `logindata`(`name`, `password`) VALUES ('$name', '$password')");


    if(!empty($result))
    {
      echo "insert success";
    }
    else
    {
        echo "error";
    }

    
}
header("refresh:1 ; url = login.php");
?>