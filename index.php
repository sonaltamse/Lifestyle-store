 <?php 
require './includes/common.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <?php include './includes/links.php'; ?>
        <title>WELCOME/E-Store</title>    
    </head>
    <body>
       <?php include './includes/header.php'; 
        include 'includes/modal.php';?>                 
      
        <div class="content">
            <div class="container-fluid">
                <div class="row" id="items">
                    <div class="col-sm-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading"><h3>Mobile 1</h3></div>
                            <div class="panel-body">
                                <img src="img/1.jpeg" alt="Samsung Galaxy 9" class="img-responsive img-phone image">
                            </div>
                            <div class="panel-footer">
                                <p>Battery:4200mAH,RAM:6GB,ROM:128GB,Rs:30,999</p>
                                <a href="signup.php"><button type="button" class="btn btn-primary btn-block">Order Now!</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading"><h3>Mobile 2</h3></div>
                            <div class="panel-body">
                                <img src="img/2.jpg" alt="iphone 7" class="img-responsive img-phone">
                            </div>
                            <div class="panel-footer">
                                <p>Battery:3400mAH,RAM:8GB,ROM:256GB,Rs:29,999</p>
                                        <a href="signup.php"><button type="button" class="btn btn-primary btn-block">Order Now!</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading"><h3>Mobile 3</h3></div>
                            <div class="panel-body">
                                <img src="img/3.jpg" alt="iphone XR" class="img-responsive img-phone">
                            </div>
                            <div class="panel-footer">
                                <p>Battery:4085mAH,RAM:8GB,ROM:256GB,Rs:59,999</p>
                                <a href="signup.php"><button type="button" class="btn btn-primary btn-block">Order Now!</button></a>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-sm-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading"><h3>Mobile 4</h3></div>
                            <div class="panel-body">
                                <img src="img/4.jpeg" alt="Redmi K20" class="img-responsive img-phone">
                            </div>
                            <div class="panel-footer">
                                <p>Battery:400mAH,RAM:8GB,ROM:128GB,Rs:49,999</p>
                                <a href="signup.php"><button type="button" class="btn btn-primary btn-block">Order Now!</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading"><h3>Mobile 5</h3></div>
                            <div class="panel-body">
                                <img src="img/5.jpg" alt="One Plus 7T pro" class="img-responsive img-phone">
                            </div>
                            <div class="panel-footer">
                                <p>Battery:4800mAH,RAM:8GB,ROM:256GB,Rs:47,999</p>
                                <a href="signup.php"><button type="button" class="btn btn-primary btn-block">Order Now!</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading"><h3>Mobile 6</h3></div>
                            <div class="panel-body">
                                <img src="img/6.jpeg" alt="Samsung Galaxy S20" class="img-responsive img-phone">
                            </div>
                            <div class="panel-footer">
                                <p>Battery:4200mAH,RAM:12GB,ROM:128GB,Rs:97,999</p>
                                <a href="signup.php"><button type="button" class="btn btn-primary btn-block">Order Now!</button></a>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>           
        </div><?php include './includes/footer.php'; ?>
    </body>
</html>