<?php 
require './includes/common.php';
if(isset($_SESSION['email']))
{
header('location:home.php');
}
?>
<!DOCTYPE html> 
<html lang="en"> 
    <head>
       <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <?php include './includes/links.php'; ?>
        <title>Signup\E-Store</title>
    </head>  
    <style>
        .btn {
           float: right;
        }
    </style>
    <body>       
        <?php include './includes/header.php'; 
        include 'includes/modal.php';?>          
        <div class="content">
            <div class="row" id="items">
                <div class="col-md-4 col-md-offset-1">
                    <img src="img/sign.jpg" alt="mobile-signup" class="img-responsive signup-img">
                </div>
                <div class="col-md-4 col-md-offset-1">
                    <form action="signup_script.php" role="form" method="POST">
                        <h3>SIGN UP</h3>
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Name" required="true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" value="me@xyz.com" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                        <?php if(isset($_GET['m1']))
                        {
                        echo $_GET['m1'];
                        }
                        ?>
                        </div> 
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" value="123456" placeholder="Password" required="trie" pattern=".{6,}">
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" name="contact" maxlength="10" placeholder="Contact" required="true"> 
                            <?php 
                            if(isset($_GET['m2']))
                            {
                            echo $_GET['m2'];
                            }
                            ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="city" placeholder="City" required="true">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="address" placeholder="Address" required="true">
                        </div>
                        <button type="submit" name="button"class="btn btn-primary btn-inline">submit</button>
                    </form>
                </div>
            </div>
        </div>       
        <?php include './includes/footer.php'; ?>
    </body>
</html>