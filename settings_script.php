<?php
require './includes/common.php';
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}
$oldpassword = $_POST['old'];
$oldpassword = mysqli_real_escape_string($conn,$oldpassword);
$oldpassword = md5($oldpassword);

$newpassword = $_POST['new'];
$newpassword = mysqli_real_escape_string($conn,$newpassword);
$newpassword = md5($newpassword);

$retype = $_POST['retype'];
$retype = mysqli_real_escape_string($conn,$retype);
$retype = md5($retype);

$email = $_SESSION['email'];

$select_query = "SELECT * FROM users WHERE email = '".$_SESSION['email']."'";
$select_query_result = mysqli_query($conn,$select_query) or die(mysqli_error($conn));
$rows = mysqli_num_rows($select_query_result);

    if ($rows > 0 && $newpassword==$retype){
        $success = "<span class='green'>Password Changed</span>";
        $update_query = "UPDATE users SET password = '$newpassword' WHERE email = '$email'";
        $update_query_result = mysqli_query($conn,$update_query) or die(mysqli_error($conn));
        header("location:settings.php?m1=".$success);
    }
    elseif ($newpassword != $retype) 
    {
        $error = "<span class='red'>New and Retyped passwords do not match!</span>";
        header("location:settings.php?m1=".$error);        
    }
    else{
        $error = "<span class='red'>Invalid Credentials</span>";
        header("location:settings.php?m1=".$error);
    }
?>