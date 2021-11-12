<html>
    <head>
        <title>
            Add Reviews
        </title>

        <style type="text/css">
        
        h1 {
            font-family: helvetica;
            font-size: 60px;
            color: white;
        }
        
        body {
            background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(253,29,29,1) 50%, rgba(252,176,69,1) 100%);
            margin: 100px;
        }
            
        
        th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #ff8080;
            color: white;
            border: 1px solid #ddd;
            padding: 8px;
        }

        td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        div {
            background: #fff2e6;
            width: 50%;
            padding: 5px;

        }
        </style>
    </head>
    <body>


        <h1>Add Reviews</h1>
        <?php require_once 'C:\xampp\htdocs\IWT\src\php\add review connect.php'?>

        <?php
        
        if (isset($_SESSION['message'])): ?>

        <div class="alert alert-<?=$_SESSION['msg_type']?>">

            <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            ?>
        </div>
         
        <?php endif ?>


        <?php
            $mysqli = new mysqli('localhost','root','','reservation_system') or
                    die(mysqli_eroor($mysqli));

            $result = $mysqli->query("SELECT *FROM reviewdata") or die($mysqli->error);
            
            ?>

        <div class="row justify-content-center">
            <table class="table">
            
                <tr>
                    <th> Name </th>
                    <th> Hotel name </th>
                    <th> Email </th>
                    <th> Review </th>
                    <th> Rate </th>
                    <th colspan="2">Action</th>
                </tr>    
            

            <?php
                while($row=$result->fetch_assoc()): ?>
            
                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['hotel']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['review']; ?></td>
                        <td><?php echo $row['rate']; ?></td>
                        
                        <td>
                             <a href="add reviews.php?edit=<?php echo $row['id']; ?>"> Edit </a>
                             <a href="add review connect.php?delete=<?php echo $row['id']; ?>"> Delete </a>
                        </td>

                    </tr>

                <?php endwhile; ?>
        
            </table>
        </div>
        
        <?php

            function pre_r( $array ) {
                echo '<pre>';
                print_r($array);
                echo '</pre>';
            }

        ?>

        <div class="row justify-content-center">
        <form action="add review connect.php" method="POST">
            

            <div class="form-group">
            <lable>Name</lable>
            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>" placeholder="Enter name">
            </div>

            <div class="form-group">
            <lable>Hotel Name</lable>
            <input type="text" name="hotel" class="form-control" value="<?php echo $hotel; ?>" placeholder="Enter Hotel">
            </div>

            <div class="form-group">
            <lable>Email</lable>
            <input type="text" name="email" class="form-control" value="<?php echo $email; ?>" placeholder="Enter email">
            </div>

            <div class="form-group">
            <lable>review</lable>
            <textarea type="text" name="review" class="form-control" value="<?php echo $review; ?>" placeholder="Enter review"></textarea>
            </div>

            <div class="form-group">
            <lable>Rate</lable>
            <input type="text" name="rate" class="form-control" value="<?php echo $rate; ?>" placeholder="Out of 10">
            </div>

            <div class="form-group">
            


                <button type="submit" name="save"> Save </button>

            
            </div>

        <form>
        </div>
            
    </body>
</html>