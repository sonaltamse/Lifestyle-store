<?php 
require './includes/common.php';
if(isset($_SESSION['email']))
{
    header("location:home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
       <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <?php include './includes/links.php'; ?>
        <title>Login\E-Store</title>
        <style>
            body {
                padding-top:100px;
            }
        </style>
    </head>
    <body>
<?php include './includes/header.php'; 
        include 'includes/modal.php';?>              <div id="content">
            <div class="container-fluid" id="login-panel">
                <div class="row">
                      <div class="col-md-4 col-md-offset-4">
                  <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4>Login</h4>
                </div>
            <div class="panel-body">
                <p class="text-warning"><i>Login to make a purchase</i></p>
                <form role="form" action="login_script.php" method="POST">                   
                    <div class="form-group">
                        <input type="email" class="form-control" value="me@gmail.com" name="email" placeholder="Email" required="true" autofocus>
                    </div>                    
                    <div class="form-group">
                        <input type="password" class="form-control" value="password" name="password" placeholder="Password" required>
                    </div>
                     <div class="form-group">
                    <?php
                        if(isset($_GET['m1'])){
                            echo $_GET['m1'];
                        }
                    ?>
                </div>
                    <button type="submit" class="btn btn-primary" name="submit">Login</button><br><br>                       
                </form>
                <br>
            </div>  
            <div class="panel-footer">
                <p>Don't have an account?<a href="signup.php">Register</a></p>
            </div>
            </div>  
              </div>   
                </div>                       
        </div>                       
        </div>
               <div style="padding-top:150px;"><?php include './includes/footer.php'; ?></div>   
    </body>
</html>
