<?php

    require_once 'config.php';

    if(isset($_POST['submit']))
    {
        
            $a_name       = $_POST["a_name"];
            $date       = $_POST["date"];
            $topic            = $_POST["topic"];
            $email            = $_POST["email"];
            $content      = $_POST["content"];
            
           
              

        $result=mysqli_query($conn,"INSERT INTO `articledata`(`a_name`, `date`, `topic`,`email`, `content`) VALUES ('$a_name', '$date' ,'$topic','$email','$content')");


    if(!empty($result))
    {
      echo "insert success";
    }
    else
    {
        echo "error";
    }

    
}
header("refresh:1 ; url = article.php");
?>