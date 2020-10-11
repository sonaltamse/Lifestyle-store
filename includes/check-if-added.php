<?php
function check_if_added_to_cart($item_id)
{
    require 'common.php';
    $user_id = $_SESSION['user_id'];    
    $query = "SELECT * FROM users_items WHERE item_id = '$item_id' AND user_id = '$user_id' and status='Added to cart'";
    $query_run = mysqli_query($conn, $query);
    if(mysqli_num_rows($query_run) >= 1)
    {
        return TRUE;
    }
 else {
        return FALSE;
    }
}
?>