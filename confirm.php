<?php require'./includes/common.php'; ?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <?php include './includes/links.php'; ?>
        <title>Confirm/E-Store</title>             
    </head>
    <body>
        <?php 
        $user_id = $_SESSION["user_id"];
        $query = "SELECT item_id FROM users_items WHERE user_id='$user_id'";
        $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
        
        while ($row = mysqli_fetch_array($result))
        {
            $item_id = $row["item_id"];
            $query_update = "UPDATE users_items SET status='Confirmed' WHERE item_id='$item_id'";
            $result_update = mysqli_query($conn,$query_update) or die(mysqli_error($conn));            
        }
        ?>
    </body>