<?php require './includes/common.php'; 
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
        <title>Contact/E-Store</title>     
        <style>
            p {
                text-align: justify;
            }
        </style>
    </head>
    <body>
<?php include './includes/header.php'; 
        include 'includes/modal.php';?>               <script>
                    function myfunction()
                    {
                        document.getElementById("msg").style.color = "green";
                        alert('Thank You');
                    }
        </script>
        <div class="content">
            <div class="row" id="items">
                <div class="col-md-8 col-md-offset-1">
                    <h2>LIVE SUPPORT</h2>
                    <h5><b>24 hours | 7 days a week | 365 days a year Live Technical Support</b></h5>
                    <!--insert the valid note-->
                    
                    
                    <p>E-store is an American Electronic Commerece Company With headquarters in washington.It is the largest internet based retailer in the United States.
                            E-store started as an online blog,but soon diversified selling mobile phone's.Any businesses looking to sell their product on the internet has to
                            make the decision on what platform to use to sell. E-Commerce takes two primary forms; personal stores, or using a marketplace such as Kijiji,
                            eBay,</p>
                </div>
                <div class="col-md-3">
                    <img src="img/contact.png" class="img-contact img-responsive">
                </div>
            </div>
            <div class="row" style="padding-top: 3px;">
                <div class="col-md-5 col-md-offset-1">                                            
                            <h1>CONTACT US</h1>                                            
                            <form role='form' method="POST">  
                                <div class="form-group">     
                                    <label for="name">Name</label></br>
                                    <input type="text" name="name" class="form-control" required="true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label></br>
                                    <input type="email" name="email" class="form-control" value="abc@xyz.com" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label></br>
                                <textarea name="message" cols="85" rows="3" class="form-control"></textarea>
                                </div>                                                                                                  
                                <button id="msg" type="submit" value="submit" onclick="myfunction()" class="btn btn-primary btn-inline">Submit</button>                                   
                            </form>                    
                </div>
                <div class="col-md-4">
                    <h1>Company Information</h1>
                    <p class="text-muted">
                        500 Lorel Ipsum Doler sit,                    
                    </p>
                    <p class="text-muted">USA</p>
                    <p class="text-muted">Phone:(00) 222 666 444</p>
                    <p class="text-muted">FAX:(000) 000 00 00 0</p>
                    <p class="text-muted">INDIA</p>
                    <p class="text-muted">Email : lifestyle@store.com</p>
                  <p class="text-muted">Follow On: instagram ,facebook</p>   
                </div>
            </div>
        </div>
        <div style="padding-top: 10px;"><?php include './includes/footer.php'; ?></div>       
    </body>
</html>