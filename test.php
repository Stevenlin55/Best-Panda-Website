<?php
    include_once 'includes/dbh.inc.php';
?>
<html>
<head>
    <title>Best Panda Chinese Restaurant Website</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
</head>
<body>
    <div class="container-1">
        <div class="box-1">
            <h1><a id="name" href="index.html">Best Panda Chinese Restaurant</a></h1>
            <div class = "navbar">
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li class="currentTab"><a href="menu.html">MENU</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                  </ul>
            </div>
        </div>
    </div> 
    <div class="container-2">
        <div class="box-2"> 
            <h2>4949 Grand Ave., Suite 4A</h2>
            <h3>Gurnee, IL 60031</h3>
            <h4>(Located in Grand Mall Plaza)</h4>
        </div>
    </div>

  

    <section id="menu-list" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center marb-35">
                    <h1 class="header-h">Menu</h1>
                    <p class="header-p">Prices are subject to change and some items might not be available</p>
                </div>


             

                <div class="col-md-11 text-center" id="menu-filters">
                    <ul>
                        <li><a class="filter " data-filter="menu-restaurant">Show All</a></li>
                        <li><a class="filter" data-filter="appetizer">Appetizer</a></li>
                        <li><a class="filter" data-filter="soup">Soup</a></li>
                        <li><a class="filter" data-filter="entree">Entrée</a></li>
                        <li><a class="filter" data-filter="fried-rice">Fried Rice</a></li>
                        <li><a class="filter" data-filter="noodles">Noodles</a></li>
                        <li><a class="filter" data-filter="specials">Specials</a></li>
                        <li><a class="filter" data-filter="side">Side Orders</a></li>

                    </ul>
                        <div class="search-container"></a> 
                            <div class="search-box">
                                <input type="text" class="search"  placeholder="Search for food"/>
                                <button type="submit" class="search-btn">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                        
                      
                        <?php
                            $sql = "SELECT * FROM food;";
                                    
                        ?>
   
                 
                      
                </div>
                
                    <div class="menu-wrapper">
                      
                            <div class="menu-restaurant specials">
                                <span class="clearfix">
                                    <a class="menu-title"><span id="foodName"></span></a>
                                    <span style="left: 100px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price"><span id="foodPrice"></span></span>
                                </span>
                                <span class="menu-subtitle"><span id="foodDescription"></span>
                            </div>
                            
                            <div class="menu-restaurant appetizer">
                                <span class="clearfix">
                                    <a href="#" class="menu-title">Vegetable Egg Roll</a>
                                    <span style="left: 180px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$1.45</span>
                                </span>
                                <span class="menu-subtitle">1 per order</span>
                            </div>

                            <div class="menu-restaurant appetizer">
                                <span class="clearfix">
                                    <a href="#" class="menu-title">Fried Wonton</a>
                                    <span style="left: 120px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$2.29</span>
                                </span>
                                <span class="menu-subtitle">4 per order</span>
                            </div>

                            <div class="menu-restaurant appetizer">
                                <span class="clearfix">
                                    <a href="#" class="menu-title">Fried Crab Rangroon</a>
                                    <span style="left: 190px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$5.75</span>
                                </span>
                                <span class="menu-subtitle">6 per order</span>
                            </div>

                            <div class="menu-restaurant appetizer">
                                <span class="clearfix">
                                    <a href="#" class="menu-title">Fried Chicken Wings</a>
                                    <span style="left: 180px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$7.99</span>
                                </span>
                                <span class="menu-subtitle">4 per order</span>
                            </div>

                            <div class="menu-restaurant appetizer">
                                <span class="clearfix">
                                    <a href="#" class="menu-title">Pot Stickers</a>
                                    <span style="left: 114px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$6.25</span>
                                </span>
                                <span class="menu-subtitle">6 per order</span>
                            </div>

                            <div class="menu-restaurant appetizer">
                                <span class="clearfix">
                                    <a href="#" class="menu-title">Steamed Dumplings</a>
                                    <span style="left: 170px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$6.25</span>
                                </span>
                                <span class="menu-subtitle">6 per order</span>
                            </div>

                            <div class="menu-restaurant appetizer">
                                <span class="clearfix">
                                    <a href="#" class="menu-title">Sweet Biscuits</a>
                                    <span style="left: 130px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$6.25</span>
                                </span>
                                <span class="menu-subtitle">10 per order</span>
                            </div>

                            <div class="menu-restaurant appetizer">
                                <span class="clearfix">
                                    <a href="#" class="menu-title">Chicken Nuggets</a>
                                    <span style="left: 150px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$6.25</span>
                                </span>
                                <span class="menu-subtitle">10 per order</span>
                            </div>

                            <div class="menu-restaurant appetizer">
                                <span class="clearfix">
                                    <a href="#" class="menu-title">Chicken on Stick</a>
                                    <span style="left: 150px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$7.25</span>
                                </span>
                                <span class="menu-subtitle">6 per order</span>
                            </div>
                            
                            <div class="menu-restaurant soup">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Hot and Sour Soup</a>
                                    <span style="left: 166px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$3.99</span>
                                </span>
                                <span class="menu-subtitle">Quart Size Only</span>
                            </div>

                            <div class="menu-restaurant soup">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Won Ton Soup</a>
                                    <span style="left: 123px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$3.99</span>
                                </span>
                                <span class="menu-subtitle">Quart Size Only</span>
                            </div>

                            <div class="menu-restaurant soup">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Egg Drop Soup</a>
                                    <span style="left: 130px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$3.99</span>
                                </span>
                                <span class="menu-subtitle">Quart Size Only</span>
                            </div>

                            <div class="menu-restaurant soup">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Chicken Rice Soup</a>
                                    <span style="left: 160px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$3.99</span>
                                </span>
                                <span class="menu-subtitle">Quart Size Only</span>
                            </div>

                            <div class="menu-restaurant soup">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Chicken Noodle Soup</a>
                                    <span style="left: 190px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$3.99</span>
                                </span>
                                <span class="menu-subtitle">Quart Size Only</span>
                            </div>
                            <div class="menu-restaurant soup">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">House Special Soup</a>
                                    <span style="left: 170px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$6.50</span>
                                </span>
                                <span class="menu-subtitle">Quart Size Only</span>
                            </div>
                            <div class="menu-restaurant soup">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Vegetable Soup</a>
                                    <span style="left: 145px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$3.99</span>
                                </span>
                                <span class="menu-subtitle">Quart Size Only</span>
                            </div>


                            
                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Special Chop Suey</a>
                                    <span style="left: 166px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$11.95</span>
                                </span>
                                <span class="menu-subtitle">Includes shrimp, chicken, and beef</span>
                            </div>

                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Shrimp Chop Suey</a>
                                    <span style="left: 155px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$11.95</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words</span>
                            </div>

                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Chicken Chop Suey</a>
                                    <span style="left: 166px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$10.50</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words</span>
                            </div>

                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Beef Chop Suey</a>
                                    <span style="left: 140px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$11.60</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words</span>
                            </div>


                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Pork Chop Suey</a>
                                    <span style="left: 140px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$10.50</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words</span>
                            </div>

                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Vegetable Chop Suey</a>
                                    <span style="left: 187px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$10.50</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words</span>
                            </div>


                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Special Egg Foo Young</a>
                                    <span style="left: 205px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$9.95</span>
                                </span>
                                <span class="menu-subtitle">Includes shrimp, chicken, beef</span>
                            </div>

                            
                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Shrimp Egg Foo Young</a>
                                    <span style="left: 200px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$9.59</span>
                                </span>
                                <span class="menu-subtitle">Includes shrimp, chicken, beef</span>
                            </div>

                            
                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Your Egg Foo Young</a>
                                    <span style="left: 183px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$8.99</span>
                                </span>
                                <span class="menu-subtitle">Choose either pork, chicken, or vegetable </span>
                            </div>

                            
                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Beef Egg Foo Young</a>
                                    <span style="left: 180px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$9.59</span>
                                </span>
                                <span class="menu-subtitle">Words</span>
                            </div>

                            
                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Chicken in Garlic Sauce (Spicy)</a>
                                    <span style="left: 280px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$10.75</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words words</span>
                            </div>

                               
                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Chicken in Garlic Sauce (Spicy)</a>
                                    <span style="left: 280px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$10.75</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words words</span>
                            </div>


                              
                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Chicken with Mixed Vegetables</a>
                                    <span style="left: 280px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$10.75</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words words</span>
                            </div>

                               
                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Sweet and Sour Chicken</a>
                                    <span style="left: 215px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$10.75</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words words</span>
                            </div>

                               
                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Chicken Cashew Nuts</a>
                                    <span style="left: 190px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$10.75</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words words</span>
                            </div>

                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Mongolian Chicken (Spicy)</a>
                                    <span style="left: 234px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$10.75</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words words</span>
                            </div>

                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Chicken with Broccoli</a>
                                    <span style="left: 205px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$10.75</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words words</span>
                            </div>

                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Curry Chicken (Spicy)</a>
                                    <span style="left: 195px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$10.75</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words words</span>
                            </div>

                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Kung Pao Chicken (Spicy)</a>
                                    <span style="left: 220px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$10.75</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words words</span>
                            </div>

                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Hunan Chicken (Spicy)</a>
                                    <span style="left: 195px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$10.75</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words words</span>
                            </div>

                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Moo Goo Gai Pan</a>
                                    <span style="left: 145px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$10.75</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words words</span>
                            </div>


                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Almond Chicken</a>
                                    <span style="left: 145px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$10.75</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words words</span>
                            </div>

                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Chicken with Black Bean Sauce</a>
                                    <span style="left: 280px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$10.75</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words words</span>
                            </div>

                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Chicken with Pea Pods</a>
                                    <span style="left: 200px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$10.75</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words words</span>
                            </div>

                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Moo Shu Chicken</a>
                                    <span style="left: 156px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$10.75</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words words</span>
                            </div>

                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Chicken with Mushroom</a>
                                    <span style="left: 215px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$10.75</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words words</span>
                            </div>

                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Sweet and Sour Pork</a>
                                    <span style="left: 190px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$10.75</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words words</span>
                            </div>

                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Pork in Garlic Sauce (Spicy)</a>
                                    <span style="left: 190px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$10.75</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words words</span>
                            </div>

                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Twice Cooked Pork (Spicy)</a>
                                    <span style="left: 170px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$10.75</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words words</span>
                            </div>

                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Roasted Pork with Mixed Vegetable</a>
                                    <span style="left: 320px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$10.75</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words words</span>
                            </div>

                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Mongolian Pork</a>
                                    <span style="left: 145px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$10.75</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words words</span>
                            </div>


                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Moo Shu Pork</a>
                                    <span style="left: 125px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$10.75</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words words</span>
                            </div> 

                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Pork with Black Bean Sauce</a>
                                    <span style="left: 250px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$10.75</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words words</span>
                            </div>

                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Moo Shu Shrimp</a>
                                    <span style="left: 135px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$12.59</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words words</span>
                            </div>


                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Sweet and Sour Shrimp</a>
                                    <span style="left: 205px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$12.59</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words words</span>
                            </div>

                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Shrimp with Cashew Nuts</a>
                                    <span style="left: 225px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$12.59</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words words</span>
                            </div>

                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Shrimp with Broccoli</a>
                                    <span style="left: 190px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$12.59</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words words</span>
                            </div>

                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Shrimp with Lobster Sauce</a>
                                    <span style="left: 240px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$12.59</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words words</span>
                            </div>


                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Kung Pao Shrimp (Spicy)</a>
                                    <span style="left: 210px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$12.59</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words words</span>
                            </div>


                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Shrimp in Garlic Sauce (Spicy)</a>
                                    <span style="left: 265px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$12.59</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words words</span>
                            </div>

                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Shrimp with Snow Pea Pods</a>
                                    <span style="left: 240px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$12.59</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words words</span>
                            </div>

                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Shrimp with Vegetable</a>
                                    <span style="left: 205px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$12.59</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words words</span>
                            </div>

                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Kung Pao Beef (Spicy)</a>
                                    <span style="left: 190px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$11.60</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words words</span>
                            </div>

                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Mongolian Beef  (Spicy)</a>
                                    <span style="left: 200px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$11.60</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words words</span>
                            </div>


                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Beef with Broccoli</a>
                                    <span style="left: 170px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$11.60</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words words</span>
                            </div>

                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Pepper Steak</a>
                                    <span style="left: 120px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$11.60</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words words</span>
                            </div>

                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Curry Beef (Spicy)</a>
                                    <span style="left: 160px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$11.60</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words words</span>
                            </div>

                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Beef in Garlic Sauce (Spicy)</a>
                                    <span style="left: 245px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$11.60</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words words</span>
                            </div>

                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Szechwan Beef (Spicy)</a>
                                    <span style="left: 195px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$11.60</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words words</span>
                            </div>

                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Hunan Beef (Spicy)</a>
                                    <span style="left: 165px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$11.60</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words words</span>
                            </div>

                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Beef with Pea Pods</a>
                                    <span style="left: 170px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$11.60</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words words</span>
                            </div>

                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Moo Shu Beef</a>
                                    <span style="left: 120px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$11.60</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words words</span>
                            </div>


                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Mixed Vegetable</a>
                                    <span style="left: 150px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$9.15</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words words</span>
                            </div>

                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Hunan Mixed Vegetable (Spicy)</a>
                                    <span style="left: 270px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$9.15</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words words</span>
                            </div>

                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Ma Po Bean Curd (Spicy)</a>
                                    <span style="left: 210px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$10.99</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words words</span>
                            </div>

                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Home Style Bean Curd (Spicy)</a>
                                    <span style="left: 260px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$10.99</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words words</span>
                            </div>

                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Broccoli in Garlic Sauce (Spicy)</a>
                                    <span style="left: 285px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$9.15</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words words</span>
                            </div>

                            <div class="menu-restaurant entree">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Moo Shu Vegetable</a>
                                    <span style="left: 170px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$9.99</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words words</span>
                            </div>

                            <div class="menu-restaurant fried-rice">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Special Fried Rice (Quart Size Only)</a>
                                    <span style="left: 315px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$8.95</span>
                                </span>
                                <span class="menu-subtitle">Includes shrimp, chicken, and beef</span>
                            </div>

                            <div class="menu-restaurant fried-rice">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Shrimp Fried Rice (Pint)</a>
                                    <span style="left: 210px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$5.45</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words</span>
                            </div>

                            <div class="menu-restaurant fried-rice">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Shrimp Fried Rice (Quart)</a>
                                    <span style="left: 225px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$5.45</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words</span>
                            </div>


                            <div class="menu-restaurant fried-rice">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Your Fried Rice (Pint)</a>
                                    <span style="left: 190px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$5.25</span>
                                </span>
                                <span class="menu-subtitle">Choose either pork, chicken, or vegetable</span>
                            </div>

                            <div class="menu-restaurant fried-rice">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Your Fried Rice (Quart)</a>
                                    <span style="left: 210px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$8.25</span>
                                </span>
                                <span class="menu-subtitle">Choose either pork, chicken, or vegetable</span>
                            </div>

                            <div class="menu-restaurant fried-rice">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Beef Fried Rice (Pint)</a>
                                    <span style="left: 190px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$5.45</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words</span>
                            </div>

                            <div class="menu-restaurant fried-rice">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Beef Fried Rice (Quart)</a>
                                    <span style="left: 210px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$5.45</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words</span>
                            </div>

        
                            <div class="menu-restaurant noodles">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Special Lo Mein (Quart Size Only)</a>
                                    <span style="left: 290px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$9.55</span>
                                </span>
                                <span class="menu-subtitle">Includes shrimp, chicken, and beef</span>
                            </div>

                            <div class="menu-restaurant noodles">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Shrimp Lo Mein (Pint)</a>
                                    <span style="left: 185px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$5.99</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words</span>
                            </div>

                            <div class="menu-restaurant noodles">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Shrimp Lo Mein (Quart)</a>
                                    <span style="left: 200px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$9.55</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words</span>
                            </div>


                            <div class="menu-restaurant noodles">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Your Lo Mein (Pint)</a>
                                    <span style="left: 170px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$5.25</span>
                                </span>
                                <span class="menu-subtitle">Choose either pork, chicken, or vegetable</span>
                            </div>

                            <div class="menu-restaurant noodles">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Your Lo Mein (Quart)</a>
                                    <span style="left: 185px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$8.99</span>
                                </span>
                                <span class="menu-subtitle">Choose either pork, chicken, or vegetable</span>
                            </div>

                            <div class="menu-restaurant noodles">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Beef Lo Mein (Pint)</a>
                                    <span style="left: 165px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$5.99</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words</span>
                            </div>

                            <div class="menu-restaurant noodles">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Beef Lo Mein (Quart)</a>
                                    <span style="left: 185px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$9.25</span>
                                </span>
                                <span class="menu-subtitle">Words Words Words</span>
                            </div>

        
                            
                            <div class="menu-restaurant  side">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Food Item Name</a>
                                    <span style="left: 166px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$10.99</span>
                                </span>
                                <span class="menu-subtitle">More words more words more words more words</span>
                            </div>

                            <div class="menu-restaurant  specials">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Food Item Name</a>
                                    <span style="left: 166px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$10.99</span>
                                </span>
                                <span class="menu-subtitle">More words more words more words more words</span>
                            </div>

                            <div class="menu-restaurant specialties">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Food Item Name</a>
                                    <span style="left: 166px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$10.99</span>
                                </span>
                                <span class="menu-subtitle">More words more words more words more words</span>
                            </div>

                            <div class="menu-restaurant  side">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Food Item Name</a>
                                    <span style="left: 166px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$10.99</span>
                                </span>
                                <span class="menu-subtitle">More words more words more words more words</span>
                            </div>

                            <div class="menu-restaurant  specials">
                                <span class="clearfix">
                                    <a href="#" class="menu-title" data-meal-img="img/grubhub-logo.png">Food Item Name</a>
                                    <span style="left: 166px;right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">$10.99</span>
                                </span>
                                <span class="menu-subtitle">More words more words more words more words</span>
                            </div>
                            

                          
                      
                        
                    </div>
            </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js" integrity="sha512-0QbL0ph8Tc8g5bLhfVzSqxe9GERORsKhIn1IrpxDAgUsbBGz/V7iSav2zzW325XGd1OMLdL4UiqRJj702IeqnQ==" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/filter.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
    <script src="js/search.js"></script>
    <script src="js/menu.js"></script>
 

</body>
<footer>
    <div class="copyright"> 
        Best Panda Chinese Restaurant, Copyright @ 2021 
    </div>
</footer>

</html>