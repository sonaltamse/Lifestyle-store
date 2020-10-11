<?php
$conn = mysqli_connect("localhost:3308","root","","lifestylestore") or die(mysqli_error($conn));
if(!isset($_SESSION['email']))
{
    session_start();
}
?>