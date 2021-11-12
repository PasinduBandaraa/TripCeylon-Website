<html>
    <head>
        <title>
            Add Payment
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
            background-color: #80ff80;
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


        <h1>Add Payment</h1>
        <?php require_once 'C:\xampp\htdocs\IWT\src\php\add payment connect.php'?>

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

            $result = $mysqli->query("SELECT *FROM paymentdata") or die($mysqli->error);
            
            ?>

        <div class="row justify-content-center">
            <table class="table">
            
                <tr>
                    <th> Card Holder  </th>
                    <th> Card number </th>
                    <th> CVV </th>
                    <th> Expire Date </th>
                    <th colspan="2">Action</th>
                </tr>    
            

            <?php
                while($row=$result->fetch_assoc()): ?>
            
                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['number']; ?></td>
                        <td><?php echo $row['cvv']; ?></td>
                        <td><?php echo $row['exdate']; ?></td>
                        
                        <td>
                             <a href="add payments.php?edit=<?php echo $row['id']; ?>"> Edit </a>
                             <a href="add payment connect.php?delete=<?php echo $row['id']; ?>"> Delete </a>
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
        <form action="add payment connect.php" method="POST">
            

            <div class="form-group">
            <lable>Name</lable>
            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>" placeholder="Enter name">
            </div>

            <div class="form-group">
            <lable>Card Number</lable>
            <input type="text" name="number" class="form-control" value="<?php echo $number; ?>" placeholder="Enter Card number">
            </div>

            <div class="form-group">
            <lable>CVV no.</lable>
            <input type="text" name="cvv" class="form-control" value="<?php echo $cvv; ?>" placeholder="Enter CVV">
            </div>

            <div class="form-group">
            <lable>Expire Date</lable>
            <input type="text" name="exdate" class="form-control" value="<?php echo $exdate; ?>" placeholder="MM/YYYY">
            </div>


                <button type="submit" name="save"> Save </button>

            
            </div>

        <form>
        </div>
            
    </body>
</html>