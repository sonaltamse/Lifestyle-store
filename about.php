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
        <title>About Us\E-Store</title>             
    </head>  
    <style>
        .panel,.panel-heading{
            border: none;
        }   
        h3 {
            font-size: 20px;
            font-weight: bold;
        }
        p {
            text-align: justify;
        }
    </style>    
    <body>
<?php include './includes/header.php'; 
        include 'includes/modal.php';?>              <!--body content-->
        <div class="content container">
            <div class="row" id="items">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>WHO WE ARE</h4>
                    </div>
                    <div class="panel-body">
                        <img src="img/we.jpg" alt="we" class="img-responsive about-img">                        
                        <p>E-store is an American Electronic Commerece Company With headquarters in washington.It is the largest internet based retailer in the United States.
                            E-store started as an online blog,but soon diversified selling mobile phone's.Any businesses looking to sell their product on the internet has to
                            make the decision on what platform to use to sell. E-Commerce takes two primary forms; personal stores, or using a marketplace such as Kijiji,
                            eBay, or Facebook to connect with customers.Needless to say, the options are endless when it comes to the type of products you would like to 
                            push online with eStore. Let your imagination not limit you when using all the perks and goodies of eStore.Working in conjuction with humanitarian 
                        aid agencies, we have supported programmes to help alleviate human suffering.We are here to listen from you deliver exellence.We’ve made a life
that will change you.Mobile phones are no more merely a part of our lives. Whether it's to stay connected with friends and family or to keep abreast of important developments around 
the world, mobiles are no longer for sending a text or making a call. From budget to state-of-the-art smartphones; indigenous names to global big-wigs - a whole universe of mobiles
await you on E-store. Whether you’re looking for waterdrop notch screens, a high screen to body ratio, AI-powered sensational cameras, high storage capacity, blazing quick 
processing engines or reflective glass designs, rest assured you won’t have to venture anywhere else for your smartphone needs.We Heartly Welcome You To Our Store.</p>
                    </div>
                </div>
            </div>
             <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>OUR HISTORY</h4>
                    </div>
                    <div class="panel-body">                        
                            <p align="justify">It is the largest private employer in the United States and one of the
                            world's most valuable companies . It was founded by David Russo in Bellevue,
                            Washington, in July 2002.</p>                            
                            <h3>2008</h3>
                        <p>Nominated among the top three at Emerging US Awards 2008.</p>
                        <h3>2009</h3>
                        <p>Red Herring 100 US Awards 2009.</p>
                        <h3>2010</h3>
                        <p>Manthan Award South Asia and Asia Pacific 2010 under the ‘E-business and Financial Inclusion’ category.</p>
                        <h3>2016</h3>
                        <p>‘Special Contribution Award’ at WASME – Super SME Awards, 2016.</p>
                        <h3>2017</h3>
                        <p>‘Best Business App Award’ at GMASA 2017.</p>
                        <h3>2018</h3>
                        <p align="justify">‘Best Online Classified Application’ at Drivers of Digital Summit & Awards, 2018.</p>
                        <h3>2019</h3>
                        <p>United States Law Awards 2019 for ‘Technology, Media and Telecommunication In-House Legal Team’.</p>
                        <h3>2020</h3>
                        <p>“Most Promising Company of the Year” at the CNBC Awaaz CEO Awards.</p> 
                        <h3>2020</h3>
                        <p>“TOP Company of the Year” at the CNBC Awaaz CEO Awards.</p> 
                    </div>                    
                </div>
            </div>
             <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>OPPORTUNITIES</h4>
                    </div>
                    <div class="panel-body">                      
                        <p style="padding:5px 0px;">Available Roles</p>                    
                      <p class="text-muted">
                        1. Jr./Sr. Web Developer<br>
                        2. Graphic Designer<br>
                        3. Web Designer<br>
                        4. Front End Developer<br>
                        5. Back End Developer<br>
                        6. Database Admin<br>
                        7 .System Admin<br>
                      </p>                                       
                </div>
            </div>
        </div>
        </div>
            
        </div>        <?php include './includes/footer.php'; ?>
            </body>
</html>
