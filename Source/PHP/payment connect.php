<?php

    require_once 'config.php';

    if(isset($_POST['submit']))
    {
        
            $name        = $_POST["name"];
            $number        = $_POST["number"];
            $cvv     = $_POST["cvv"];
            $exdate     = $_POST["exdate"];
           
              

        $result=mysqli_query($conn,"INSERT INTO `paymentdata`(`name`, `number`, `cvv`,`exdate`) VALUES ('$name', '$number' ,'$cvv','$exdate')");


    if(!empty($result))
    {
      echo "insert success";
    }
    else
    {
        echo "error";
    }

    
}
header("refresh:1 ; url = payment.php");
?>