<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles\bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome\css\font-awesome.min.css">
    <link rel="stylesheet" href="styles\style.css">
    
    <style>

        

    </style>

</head>
<body>
    <div id="top">
    
        <div class="container">

            <div class="col-md-6 offer">
                <a href="#" class="btn btn-success btn-sm">Welcome</a>
                <a href="checkout.php">3 Items In Your Cart|Total price: 300$</a>
            </div>
            <div class="col-md-6">
                <ul class="menu">
                    <li>
                        <a href="customer_register.php">Register</a>
                    </li>
                    <li>
                        <a href="checkout.php">My Account</a>
                    </li>
                    <li>
                        <a href="cart.php">Cart</a>
                    </li>
                    <li>
                        <a href="checkout.php">Login</a>
                    </li>
                </ul>
            </div>

        </div>
    
    </div>
    <div id="navbar" class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand home">
                    <img src="images/logo.jpg" alt="Mary Crafts Logo"width="125px"height="49px"class="hidden-xs">
                    <img src="images/logo.jpg" alt="Mary Crafts Logo Mobile"width="83px"height="33px" class="visible-xs">
                </a>
                <button class="navbar-toggle" data-toggle="collapse"data-target="#navigation">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-align-justify"></i>
                </button>
                <button class="navbar-toggle" data-toggle="collapse"data-target="#search">
                    <span class="sr-only">Toggle Search</span>
                    <i class="fa fa-search"></i>
                </button>
            </div>
            <div class="navbar-collapse collapse" id="navigation">
                <div class="padding-nav">
                    <ul class="nav navbar-nav left">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li class="active">
                            <a href="shop.php">Shop</a>
                        </li>
                        <li>
                            <a href="checkout.php">My Account</a>
                        </li>
                        <li>
                            <a href="cart.php">Shopping Cart</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <a href="cart.php" class="btn navbar-btn btn-primary right"><i class="fa fa-shopping-cart"></i><span> 3 Items In Your Cart</span>
                </a>
                <div class="navbar-collapse collapse right">
                    <button class="btn btn-primary navbar-btn" type="button"data-toggle="collapse"data-target="#search"><span class="sr-only">Toggle Search</span>
                    <i class="fa fa-search"></i>
                    </button>
                </div>
                <div class="collapse clearfix" id="search">
                    <form method="get" action="results.php" class="navbar-form">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search here..."name="user_query"required>
                            <span class="input-group-btn">
                                <button type="submit"name="search"value="Search" class="btn btn-primary">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="content">
        <div class="container">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        Shop
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <?php
    
                    include("includes/sidebar.php");
    
                ?>
            </div>
            <div class="col-md-9">
                <div id="productMain" class="row">
                    <div class="col-sm-6">
                        <div id="mainImage">
                            <div id="myCarousel" class="carousel slide"data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel"data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel"data-slide-to="1"></li>
                                    <li data-target="#myCarousel"data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <center><img class="img-responsive" src="admin_area\product_images\P1.jpg" alt="Product Image"></center>
                                    </div>
                                    <div class="item">
                                        <center><img class="img-responsive" src="admin_area\product_images\P1.jpg" alt="Product Image"></center>
                                    </div>
                                    <div class="item">
                                        <center><img class="img-responsive" src="admin_area\product_images\P2.jpg" alt="Product Image"></center>
                                    </div>
                                </div>
                                <a href="#myCarousel" class="left carousel-control"data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a href="#myCarousel" class="right carousel-control"data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="box">
                            <h1 class="text-center">Three Piece</h1>
                            <form action="" class="form-horizontal"method="post">
                                <div class="form-group">
                                    <label for="" class="col-md-5 control-label">Products Quantity</label>
                                    <div class="col-md-7">
                                        <select name="product_qty" id="" class="form-control">
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                            <option value="">4</option>
                                            <option value="">5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-5 control-label">Product Size</label>
                                    <div class="col-md-7">
                                        <select name="product_size" id=""class="form-control">
                                            <option value="">Select a size</option>
                                            <option value="">small</option>
                                            <option value="">medium</option>
                                            <option value="">large</option>
                                        </select>
                                    </div>
                                </div>
                                <p class="price">$20</p>
                                <p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart"> Add To Cart</button></p>
                            </form>
                        </div>
                        <div class="row" id="thumbs">
                            <div class="col-xs-4">
                                <a data-target="#myCarousel"data-slide-to="0" href="#" class="thumb">
                                    <img src="admin_area\product_images\P1.jpg" alt="Product Image" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a data-target="#myCarousel"data-slide-to="1" href="#" class="thumb">
                                    <img src="admin_area\product_images\P1.jpg" alt="Product Image" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a data-target="#myCarousel"data-slide-to="2" href="#" class="thumb">
                                    <img src="admin_area\product_images\P1.jpg" alt="Product Image" class="img-responsive">
                                </a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="box" id="details">
                    <h4>Product Description</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                       Vivamus sodales ex ut magna sodales, ac tristique lectus hendrerit. Nam feugiat, sem sit amet aliquet faucibus, ex erat accumsan lacus,
                       sed tincidunt diam velit eget diam.
                       Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                       Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                       Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                       Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                       Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                       Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                        <h4>Size</h4>
                        <ul>
                            <li>Small</li>
                            <li>Medium</li>
                            <li>Large</li>
                        </ul>
                        <hr>
                </div>
                <div id="row same-height-row">
                    <div class="col-md-3 col-sm-6">
                        <div class="box same-height headline">
                            <h3 class="text-center">Products You Maybe Like</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 center-responsive">
                        <div class="product same-height">
                            <a href="details.php">
                                <img class="img-responsive" src="admin_area\product_images\P1.jpg" alt="Product Image">
                            </a>
                            <div class="text">
                                <h3><a href="details.php">Three Piece</a></h3>
                                <p class="price">$20</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 center-responsive">
                        <div class="product same-height">
                            <a href="details.php">
                                <img class="img-responsive" src="admin_area\product_images\P1.jpg" alt="Product Image">
                            </a>
                            <div class="text">
                                <h3><a href="details.php">Three Piece</a></h3>
                                <p class="price">$20</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 center-responsive">
                        <div class="product same-height">
                            <a href="details.php">
                                <img class="img-responsive" src="admin_area\product_images\P1.jpg" alt="Product Image">
                            </a>
                            <div class="text">
                                <h3><a href="details.php">Three Piece</a></h3>
                                <p class="price">$20</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <?php
    
    include("includes/footer.php");
    
    ?>


<script src="js\jquery-331.min.js"></script>
<script src="js\bootstrap-337.min.js"></script>
</body>
</html>