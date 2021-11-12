<html>
    <head>
        <title>
            Add articles
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
            background-color: #ffb380;
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


        <h1>Add Articles</h1>
        <?php require_once 'C:\xampp\htdocs\IWT\src\php\add article connect.php'?>

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

            $result = $mysqli->query("SELECT *FROM articledata") or die($mysqli->error);
            
            ?>

        <div class="row justify-content-center">
            <table class="table">
            
                <tr>
                    <th> Name </th>
                    <th> Date </th>
                    <th> Topic </th>
                    <th> Email </th>
                    <th> Content </th>
                    <th colspan="2">Action</th>
                </tr>    
            

            <?php
                while($row=$result->fetch_assoc()): ?>
            
                    <tr>
                        <td><?php echo $row['a_name']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo $row['topic']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['content']; ?></td>
                        
                        <td>
                             <a href="add article.php?edit=<?php echo $row['id']; ?>"> Edit </a>
                             <a href="add article connect.php?delete=<?php echo $row['id']; ?>"> Delete </a>
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
        <form action="add article connect.php" method="POST">
            

            <div class="form-group">
            <lable>Name</lable>
            <input type="text" name="a_name" class="form-control" value="<?php echo $a_name; ?>" placeholder="Enter name">
            </div>

            <div class="form-group">
            <lable>Date</lable>
            <input type="text" name="date" class="form-control" value="<?php echo $date; ?>" placeholder="Enter date">
            </div>

            <div class="form-group">
            <lable>Topic</lable>
            <input type="text" name="topic" class="form-control" value="<?php echo $topic; ?>" placeholder="Enter Topic">
            </div>

            <div class="form-group">
            <lable>Email</lable>
            <input type="text" name="email" class="form-control" value="<?php echo $email; ?>" placeholder="Enter email">
            </div>

            <div class="form-group">
            <lable>Content</lable>
            <textarea type="text" name="content" class="form-control" value="<?php echo $content; ?>" placeholder="Enter content"></textarea>
            </div>

            <div class="form-group">
            


                <button type="submit" name="save"> Save </button>

            
            </div>

        <form>
        </div>
            
    </body>
</html>