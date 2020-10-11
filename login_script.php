<?php 
require './includes/common.php'; 

$email = $_POST['email'];
$email= mysqli_real_escape_string($conn,$email);

$password = $_POST['password'];
$password= mysqli_real_escape_string($conn,$password);
$password = md5($password);

$login_select_query = "SELECT id,email FROM users WHERE email='$email' AND password='$password'";
$login_select_query_result = mysqli_query($conn, $login_select_query) or die(mysqli_error($conn));

$total_rows_fetched = mysqli_num_rows($login_select_query_result);

if($total_rows_fetched != 0){
    $row = mysqli_fetch_array($login_select_query_result);
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $row['id'];
    header("location:home.php");
}
 else {
     $error = "<span class='red'>Invalid Credentials</span>";
     header("location:login.php?m1=".$error);
}
?>

