<?php
require "./includes/common.php";
if(isset($_GET['id']) && is_numeric($_GET['id']))
{
    $item_id = $_GET["id"];
    $user_id = $_SESSION['user_id'];
    $query = "DELETE FROM users_items WHERE item_id='$item_id' AND user_id = '$user_id'";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    header("location:cart.php");
}
?>