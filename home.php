<?php include './includes/common.php'; 
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
        <title>Home/E-Store</title>      
    </head>
    <body>
        <?php 
        include './includes/header.php'; 
        include './includes/check-if-added.php';        
        $user_id = $_SESSION['user_id'];
        $email = $_SESSION['email'];
        ?>
        <div class="content">
            <div class="container-fluid">
                <div class="jumbotron">
                    <?php
                        echo "<h3 class='text-center'>Welcome $email</h3>";
                    ?>
                </div>
                <div class="row" id="items">
                    <div class="col-md-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading"><h3>Mobile 1</h3></div>
                            <div class="panel-body">
                                <img src="img/1.jpeg" alt="Samsung Galaxy 9" class="img-responsive img-phone">
                            </div>
                            <div class="panel-footer">
                                <p>Battery:4200mAH,RAM:6GB,ROM:128GB,Rs:30,999</p>
                                <?php if(!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy now</a></p>
                        <?php                         
                        } else {
                                if(check_if_added_to_cart(1)) {
     echo '<a href=""><button type="button" class="btn btn-success btn-block disabled">Add to Cart</button></a>'; 
                                } else { ?>
                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                  <?php                                   
                                } 
                        }
                        ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading"><h3>Mobile 2</h3></div>
                            <div class="panel-body">
                                <img src="img/2.jpg" alt="iphone 7" class="img-responsive img-phone">
                            </div>
                            <div class="panel-footer">
                                <p>Battery:3400mAH,RAM:8GB,ROM:256GB,Rs:29,999</p>
                          <?php if(!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy now</a></p>
                        <?php                         
                        } else {
                                if(check_if_added_to_cart(2)) {
     echo '<a href=""><button type="button" class="btn btn-success btn-block disabled">Add to Cart</button></a>'; 
                                } else { ?>
                        <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                  <?php                                   
                                } 
                        }
                        ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading"><h3>Mobile 3</h3></div>
                            <div class="panel-body">
                                <img src="img/3.jpg" alt="iphone XR" class="img-responsive img-phone">
                            </div>
                            <div class="panel-footer">
                                <p>Battery:4085mAH,RAM:8GB,ROM:256GB,Rs:59,999</p>
                                     <?php if(!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy now</a></p>
                        <?php                         
                        } else {
                                if(check_if_added_to_cart(3)) {
     echo '<a href=""><button type="button" class="btn btn-success btn-block disabled">Add to Cart</button></a>'; 
                                } else { ?>
                        <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                  <?php                                   
                                } 
                        }
                        ?>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading"><h3>Mobile 4</h3></div>
                            <div class="panel-body">
                                <img src="img/4.jpeg" alt="Redmi K20" class="img-responsive img-phone">
                            </div>
                            <div class="panel-footer">
                                <p>Battery:400mAH,RAM:8GB,ROM:128GB,Rs:49,999</p>
                                      <?php if(!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy now</a></p>
                        <?php                         
                        } else {
                                if(check_if_added_to_cart(4)) {
     echo '<a href=""><button type="button" class="btn btn-success btn-block disabled">Add to Cart</button></a>'; 
                                } else { ?>
                        <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                  <?php                                   
                                } 
                        }
                        ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading"><h3>Mobile 5</h3></div>
                            <div class="panel-body">
                                <img src="img/5.jpg" alt="One Plus 7T pro" class="img-responsive img-phone">
                            </div>
                            <div class="panel-footer">
                                <p>Battery:4800mAH,RAM:8GB,ROM:256GB,Rs:47,999</p>
                                      <?php if(!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy now</a></p>
                        <?php                         
                        } else {
                                if(check_if_added_to_cart(5)) {
     echo '<a href=""><button type="button" class="btn btn-success btn-block disabled">Add to Cart</button></a>'; 
                                } else { ?>
                        <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                  <?php                                   
                                } 
                        }
                        ?>                      
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading"><h3>Mobile 6</h3></div>
                            <div class="panel-body">
                                <img src="img/6.jpeg" alt="Samsung Galaxy S20" class="img-responsive img-phone">
                            </div>
                            <div class="panel-footer">
                                <p>Battery:4200mAH,RAM:12GB,ROM:128GB,Rs:97,999</p>
                                  <?php if(!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy now</a></p>
                        <?php                         
                        } else {
                                if(check_if_added_to_cart(6)) {
     echo '<a href=""><button type="button" class="btn btn-success btn-block disabled">Add to Cart</button></a>'; 
                                } else { ?>
                        <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                  <?php                                   
                                } 
                        }
                        ?>
                            </div>
                        </div>
                    </div>
                </div> 
                 <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading"><h3>Mobile 7</h3></div>
                            <div class="panel-body">
                                <img src="img/7.jpeg" alt="Samsung Galaxy A51" class="img-responsive img-phone">
                            </div>
                            <div class="panel-footer">
                                <p>Battery:4500mAH,RAM:6GB,ROM:128GB,Rs:25,250</p>
                                      <?php if(!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy now</a></p>
                        <?php                         
                        } else {
                                if(check_if_added_to_cart(7)) {
     echo '<a href=""><button type="button" class="btn btn-success btn-block disabled">Add to Cart</button></a>'; 
                                } else { ?>
                        <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                  <?php                                   
                                } 
                        }
                        ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading"><h3>Mobile 8</h3></div>
                            <div class="panel-body">
                                <img src="img/8.jpg" alt="iPhone XS-Max" class="img-responsive img-phone">
                            </div>
                            <div class="panel-footer">
                                <p>Battery:3400mAH,RAM:8GB,ROM:256GB,Rs:99,999</p>
                                      <?php if(!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy now</a></p>
                        <?php                         
                        } else {
                                if(check_if_added_to_cart(8)) {
     echo '<a href=""><button type="button" class="btn btn-success btn-block disabled">Add to Cart</button></a>'; 
                                } else { ?>
                        <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                  <?php                                   
                                } 
                        }
                        ?>                      
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading"><h3>Mobile 9</h3></div>
                            <div class="panel-body">
                                <img src="img/9.jpeg" alt="Samsung Galaxy S10" class="img-responsive img-phone">
                            </div>
                            <div class="panel-footer">
                                <p>Battery:4000mAH,RAM:128GB,ROM:1240GB,Rs:1,29,999</p>
                                  <?php if(!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy now</a></p>
                        <?php                         
                        } else {
                                if(check_if_added_to_cart(9)) {
     echo '<a href=""><button type="button" class="btn btn-success btn-block disabled">Add to Cart</button></a>'; 
                                } else { ?>
                        <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                  <?php                                   
                                } 
                        }
                        ?>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>           
        </div>       
    </body>
</html>