<html>
    <head>
        <title>
            Add hotels
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
            background-color: #ff80df;
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


        <h1>Add Hotels</h1>
        <?php require_once 'C:\xampp\htdocs\IWT\src\php\add hotel connect.php'?>

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

            $result = $mysqli->query("SELECT *FROM hoteldata") or die($mysqli->error);
            
            ?>

        <div class="row justify-content-center">
            <table class="table">
            
                <tr>
                    <th> First Name </th>
                    <th> Last Name </th>
                    <th> Hotel Name </th>
                    <th> Email </th>
                    <th> Phone Number </th>
                    <th> Description </th>
                    <th colspan="2">Action</th>
                </tr>    
            

            <?php
                while($row=$result->fetch_assoc()): ?>
            
                    <tr>
                        <td><?php echo $row['firstname']; ?></td>
                        <td><?php echo $row['lastname']; ?></td>
                        <td><?php echo $row['hotel']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['phonenumber']; ?></td>
                        <td><?php echo $row['description']; ?></td>
                        <td>
                             <a href="add hotels.php?edit=<?php echo $row['id']; ?>"> Edit </a>
                             <a href="add hotel connect.php?delete=<?php echo $row['id']; ?>"> Delete </a>
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
        <form action="add hotel connect.php" method="POST">
            
            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <div class="form-group">
            <lable>First Name</lable>
            <input type="text" name="firstname" class="form-control" value="<?php echo $firstname; ?>" placeholder="Enter first name">
            </div>

            <div class="form-group">
            <lable>Last Name</lable>
            <input type="text" name="lastname" class="form-control" value="<?php echo $lastname; ?>" placeholder="Enter last name">
            </div>

            <div class="form-group">
            <lable>Hotel Name</lable>
            <input type="text" name="hotel" class="form-control" value="<?php echo $hotel; ?>" placeholder="Enter Hotel name">
            </div>

            <div class="form-group">
            <lable>Email</lable>
            <input type="text" name="email" class="form-control" value="<?php echo $email; ?>" placeholder="Enter email">
            </div>

            <div class="form-group">
            <lable>Phone Number</lable>
            <input type="text" name="phonenumber" class="form-control" value="<?php echo $phonenumber; ?>" placeholder="Enter Contact number">
            </div>

            <div class="form-group">
            <lable>Description</lable>
            <textarea type="text" name="description" class="form-control" value="<?php echo $description; ?>" placeholder="Enter description"></textarea>
            </div>

            <div class="form-group">
            


                <button type="submit" name="save"> Save </button>

            
            </div>

        <form>
        </div>
            
    </body>
</html>