
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
                        
                    <div class="menu-wrapper">
                      
                        <?php

                            $conn = mysqli_connect('localhost', 'root', "", 'menu');
                            $sql = "SELECT * FROM food;";
                            $result = mysqli_query($conn, $sql);     
                            $resultCheck = mysqli_num_rows($result); ?>  

                            
                        <?php
                            if ($resultCheck > 0) {
                                while ($row = mysqli_fetch_assoc($result)) { ?>

                                    <div class="menu-restaurant <?php echo $row['category'] ?>">
                                        <span class="clearfix">
                                            <a class="menu-title"><?php echo $row['name'] ?></a>
                                            <span style="left: 100px;right: 44px;" class="menu-line"></span>
                                            <span class="menu-price"><?php echo '$'.$row['price'] ?></span>
                                        </span>
                                        <span class="menu-subtitle"><?php echo $row['description'] ?></span>
                                    </div>
                            <?php }  ?>
                            <?php }  ?>
                        
                      
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