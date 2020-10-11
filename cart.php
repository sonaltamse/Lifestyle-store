<?php
require './includes/common.php';
if (!isset($_SESSION['email'])) {
    header('location:index.php');
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <?php include './includes/links.php'; ?>
        <title>Cart/E-Store</title>     
        <style>
            body {
                padding-top: 50px;
            }
            table {
                border: 1px solid cornflowerblue;
            }
        </style>
    </head>
    <body>
<?php include './includes/header.php'; 
        include 'includes/modal.php';?>              
        <div class="content">
            <div class="container">
                <div class="row" id="items">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped">
    
                        <!--show table only if there are items added in the cart-->
                        <?php
                        $sum = 0;
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT items.price AS Price, items.id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added to cart'";
                        $result = mysqli_query($conn, $query)or die($mysqli_error($conn));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum+= $row["Price"];
                                    $user_id .= $row["id"] . ", ";
                                    echo "<tr><td>"."#".$row["id"]."</td><td>".$row["Name"]."</td><td>Rs ".$row["Price"]."</td><td><a href='remove.php?id={$row['id']}' class='remove_item_link'> Remove</a></td></tr>";
                                }
                                $id = rtrim($user_id, ", ");
                                echo "<tr><td></td><td>Total</td><td>Rs ".$sum."</td><td><a href='success.php?itemsid=".$id."'class='btn btn-primary'>Confirm Order</a></td></tr>";
                                ?>
                            </tbody>
                            <?php
                        } else {
                            echo "Add items to the cart first!";
                        }
                        ?>
                        <?php
                        ?>
                    </table>
                </div>
            </div>
        </div>
            </div>
        <?php  require './includes/footer.php'; ?>
    </body>
</html>