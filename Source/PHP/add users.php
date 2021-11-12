<html>
    <head>
        <title>
            Add users
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
            background-color: #80b3ff;
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
            width: 35%;
            padding: 5px;

        }
        </style>
    </head>
    <body>


        <h1>Add Users</h1>
        <?php require_once 'C:\xampp\htdocs\IWT\src\php\add user connect.php'?>

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

            $result = $mysqli->query("SELECT *FROM userdata") or die($mysqli->error);
            
            ?>

        <div class="row justify-content-center">
            <table class="table">
            
                <tr>
                    <th> Name </th>
                    <th> Email </th>
                    <th> Password </th>
                    <th colspan="2">Action</th>
                </tr>    
            

            <?php
                while($row=$result->fetch_assoc()): ?>
            
                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['password']; ?></td>
                        <td>
                             <a href="add users.php?edit=<?php echo $row['id']; ?>"> Edit </a>
                             <a href="add user connect.php?delete=<?php echo $row['id']; ?>"> Delete </a>
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
        <form action="add user connect.php" method="POST">
            
            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <div class="form-group">
            <lable>Name</lable>
            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>" placeholder="Enter User name">
            </div>

            

            <div class="form-group">
            <lable>Email</lable>
            <input type="text" name="email" class="form-control" value="<?php echo $email; ?>" placeholder="Enter User email">
            </div>


            <div class="form-group">
            <lable>Password</lable>
            <input type="text" name="password" class="form-control" value="<?php echo $password; ?>" placeholder="Enter User password">
            </div>

        
            


                <button type="submit" name="save"> Save </button>

            
            </div>

        <form>
        </div>
            
    </body>
</html>