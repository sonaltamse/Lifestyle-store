<?php require './includes/common.php';
if(!isset($_SESSION['email']))
{
    header("location:index.php");
}
?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
         <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <?php include './includes/links.php'; ?>
        <title>Success\E-Store</title>
        <style>
             body{
                padding-top: 80px;
            }            
        </style>
     </head>
    <body>
        <?php
        require './includes/header.php';              
    ?>
        <div class="content">
          <div class="container">
            <div class="col-xs-12">
              <div class="jumbotron" style="outline: 5px solid black;">
                <h3 class="text-center">Thank You for Ordering from E-Store!</h3>
                <h4 class="text-center">The Order will be delivered to you shortly.</h4>
                <hr>
                <h4 class="text-center">To Continue Your Shopping ,Click <a href="home.php">here</a></h4>
              </div>
            </div>
          </div>             
        </div>                   
    </body>
</html>