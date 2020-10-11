<?php require './includes/common.php';
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}
?>
<!DOCTYPE html>   
<html lang="en">
     <head>
         <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <?php include './includes/links.php'; ?>
        <title>Settings\E-Store</title>
    </head>
    <body>
<?php include './includes/header.php'; 
        include 'includes/modal.php';?>              
        <div class="content">
             <div class="container">
                 <div class="row" id="items">
            <div class="col-md-4 col-md-offset-4">
                <h4>Change Password</h4>
                <form action="settings_script.php" method="POST">
                    <div class="form-group">
                        <label for="old">Old Password</label>
                        <input type="password" class="form-control" name="old" placeholder="Old Password" required="true">
                    </div>
                     <div class="form-group">
                          <label for="new">New Password</label>
                        <input type="password" class="form-control" name="new" placeholder="New Password" required="true">
                    </div>
                     <div class="form-group">
                          <label for="retype">Re-type New Password</label>
                         <input type="password" class="form-control" name="retype" placeholder="Re-type New Password" required="true">
                    </div>
                    <?php
                    if(isset($_GET['m1']))
                    {
                    echo "<br><br><b class='red'>".$_GET['m1']."</b>";
                    } ?>                    
                    <button type="submit" class="btn btn-block"value="confirm">Confirm</button>                      
                </form>
            </div>
        </div>
        </div>   
        </div>                        
         <?php include './includes/footer.php'; ?>
    </body>
</html>
