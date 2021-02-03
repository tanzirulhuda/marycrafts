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
                <a href="checkout.php">3 Items In Your Cart|Total price: $120</a>
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
                        <li class="active">
                            <a href="index.php">Home</a>
                        </li>
                        <li>
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
    <div class="container" id="slider" style="margin-bottom:40px;">

        <div class="col-md-12">

            <div class="carousel slide" id="mycarousel"data-ride="carousel">
                <ol class="carousel-indicators">
                    <li class="active" data-target="#mycarousel"data-slide-to="0"></li>
                    <li data-target="#mycarousel"data-slide-to="1"></li>
                    <li data-target="#mycarousel"data-slide-to="2"></li>
                    <li data-target="#mycarousel"data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">

                    <div class="item active">
                        <img src="admin_area\slides_images\S1.jpg" alt="Slider Image 1">
                    </div>
                    <div class="item">
                        <img src="admin_area\slides_images\S2.jpg" alt="Slider Image 1">
                    </div>
                    <div class="item">
                        <img src="admin_area\slides_images\S3.jpg" alt="Slider Image 1">
                    </div>
                    <div class="item">
                        <img src="admin_area\slides_images\S4.jpg" alt="Slider Image 1">
                    </div>

                </div>
                <a href="#mycarousel" class="left carousel-control" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left">
                <span class="sr-only">
                Previous
                </span>
                
                </span>
                
                </a>
                <a href="#mycarousel" class="right carousel-control" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right">
                <span class="sr-only">
                Next
                </span>
                
                </span>
                
                </a>
            </div>

        </div>

    </div>
    <div id="advantages">
        <div class="container">
            <div class="same-height-row">
                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-heart"></i>
                        </div>
                        <h3><a href="#">Best products</a></h3>
                        <p>We provide the best posible service ever.Lorem ipsum dolor sit
                        amet, consectetur adipiscing elit. Proin accumsan sem ut tempor
                        eleifend. Suspendisse eu augue est. Vivamus non eros nec dolor 
                        convallis egestas dapibus quis arcu. Orci varius natoque penatibus 
                        et magnis dis parturient montes, nascetur ridiculus mus. Maecenas
                        et lorem quis sem vestibulum faucibus eu eu nunc. Ut ullamcorper 
                        malesuada tellus, sit amet sodales enim tristique quis. Vivamus 
                        tincidunt enim et molestie maximus. Aenean id risus finibus, eleifend
                        eros non, dignissim mi. Mauris facilisis consequat ligula. Nam eu sapien 
                        interdum, mollis erat non, molestie sapien. Fusce malesuada erat neque, 
                        sed convallis tellus molestie quis. Mauris porta venenatis quam sed 
                        porta.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-tag"></i>
                        </div>
                        <h3><a href="#">Best prices</a></h3>
                        <p>Compare us with another store site, who have best prices.Lorem ipsum 
                        dolor sit amet, consectetur adipiscing elit. Proin accumsan sem ut tempor 
                        eleifend. Suspendisse eu augue est. Vivamus non eros nec dolor convallis
                        egestas dapibus quis arcu. Orci varius natoque penatibus et magnis dis 
                        parturient montes, nascetur ridiculus mus. Maecenas et lorem quis sem 
                        vestibulum faucibus eu eu nunc. Ut ullamcorper malesuada tellus, sit amet
                        sodales enim tristique quis. Vivamus tincidunt enim et molestie maximus. 
                        Aenean id risus finibus, eleifend eros non, dignissim mi. Mauris facilisis 
                        consequat ligula. Nam eu sapien interdum, mollis erat non, molestie sapien.
                        Fusce malesuada erat neque, sed convallis tellus molestie quis. Mauris porta 
                        venenatis quam sed porta.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-thumbs-up"></i>
                        </div>
                        <h3><a href="#">100% original products</a></h3>
                        <p>We just offer you the best and original products.Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit. Proin accumsan sem ut tempor eleifend. Suspendisse 
                        eu augue est. Vivamus non eros nec dolor convallis egestas dapibus quis arcu. 
                        Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                        mus. Maecenas et lorem quis sem vestibulum faucibus eu eu nunc. Ut ullamcorper
                        malesuada tellus, sit amet sodales enim tristique quis. Vivamus tincidunt enim et 
                        molestie maximus. Aenean id risus finibus, eleifend eros non, dignissim mi. Mauris 
                        facilisis consequat ligula. Nam eu sapien interdum, mollis erat non, molestie 
                        sapien. Fusce malesuada erat neque.sed convallis tellus molestie quis.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <div id="hot">
        <div class="box">
            <div class="container">
                <div class="col-md-12">
                    <h2>
                        Our Letest Products
                    </h2>
                </div>
            </div>
        </div>
   </div> 
   <div id="content" class="container">
       <div class="row">
           <div class="col-sm-4 col-sm-6 single">
               <div class="product">
                   <a href="detailes.php">
                       <img class="img-responsive" src="admin_area\product_images\P1.jpg" alt="Product Image">
                   </a>
                   <div class="text">
                       <h3>
                           <a href="details.php">
                               Product Image
                           </a>
                       </h3>
                       <p class="price">
                           $20
                       </p>
                       <p class="button">
                           <a href="details.php" class="btn btn-default">View Details</a>
                           <a href="details.php" class="btn btn-primary">
                               <i class="fa fa-shopping-cart">
                                   Add To Cart
                               </i>
                           </a>
                       </p>
                   </div>
               </div>
           </div>
           <div class="col-sm-4 col-sm-6 single">
               <div class="product">
                   <a href="detailes.php">
                       <img class="img-responsive" src="admin_area\product_images\P1.jpg" alt="Product Image">
                   </a>
                   <div class="text">
                       <h3>
                           <a href="details.php">
                               Product Image
                           </a>
                       </h3>
                       <p class="price">
                           $20
                       </p>
                       <p class="button">
                           <a href="details.php" class="btn btn-default">View Details</a>
                           <a href="details.php" class="btn btn-primary">
                               <i class="fa fa-shopping-cart">
                                   Add To Cart
                               </i>
                           </a>
                       </p>
                   </div>
               </div>
           </div>
           <div class="col-sm-4 col-sm-6 single">
               <div class="product">
                   <a href="detailes.php">
                       <img class="img-responsive" src="admin_area\product_images\P1.jpg" alt="Product Image">
                   </a>
                   <div class="text">
                       <h3>
                           <a href="details.php">
                               Product Image
                           </a>
                       </h3>
                       <p class="price">
                           $20
                       </p>
                       <p class="button">
                           <a href="details.php" class="btn btn-default">View Details</a>
                           <a href="details.php" class="btn btn-primary">
                               <i class="fa fa-shopping-cart">
                                   Add To Cart
                               </i>
                           </a>
                       </p>
                   </div>
               </div>
           </div>
           <div class="col-sm-4 col-sm-6 single">
               <div class="product">
                   <a href="detailes.php">
                       <img class="img-responsive" src="admin_area\product_images\P1.jpg" alt="Product Image">
                   </a>
                   <div class="text">
                       <h3>
                           <a href="details.php">
                               Product Image
                           </a>
                       </h3>
                       <p class="price">
                           $20
                       </p>
                       <p class="button">
                           <a href="details.php" class="btn btn-default">View Details</a>
                           <a href="details.php" class="btn btn-primary">
                               <i class="fa fa-shopping-cart">
                                   Add To Cart
                               </i>
                           </a>
                       </p>
                   </div>
               </div>
           </div>
           <div class="col-sm-4 col-sm-6 single">
               <div class="product">
                   <a href="detailes.php">
                       <img class="img-responsive" src="admin_area\product_images\P1.jpg" alt="Product Image">
                   </a>
                   <div class="text">
                       <h3>
                           <a href="details.php">
                               Product Image
                           </a>
                       </h3>
                       <p class="price">
                           $20
                       </p>
                       <p class="button">
                           <a href="details.php" class="btn btn-default">View Details</a>
                           <a href="details.php" class="btn btn-primary">
                               <i class="fa fa-shopping-cart">
                                   Add To Cart
                               </i>
                           </a>
                       </p>
                   </div>
               </div>
           </div>
           <div class="col-sm-4 col-sm-6 single">
               <div class="product">
                   <a href="detailes.php">
                       <img class="img-responsive" src="admin_area\product_images\P1.jpg" alt="Product Image">
                   </a>
                   <div class="text">
                       <h3>
                           <a href="details.php">
                               Product Image
                           </a>
                       </h3>
                       <p class="price">
                           $20
                       </p>
                       <p class="button">
                           <a href="details.php" class="btn btn-default">View Details</a>
                           <a href="details.php" class="btn btn-primary">
                               <i class="fa fa-shopping-cart">
                                   Add To Cart
                               </i>
                           </a>
                       </p>
                   </div>
               </div>
           </div>
           <div class="col-sm-4 col-sm-6 single">
               <div class="product">
                   <a href="detailes.php">
                       <img class="img-responsive" src="admin_area\product_images\P1.jpg" alt="Product Image">
                   </a>
                   <div class="text">
                       <h3>
                           <a href="details.php">
                               Product Image
                           </a>
                       </h3>
                       <p class="price">
                           $20
                       </p>
                       <p class="button">
                           <a href="details.php" class="btn btn-default">View Details</a>
                           <a href="details.php" class="btn btn-primary">
                               <i class="fa fa-shopping-cart">
                                   Add To Cart
                               </i>
                           </a>
                       </p>
                   </div>
               </div>
           </div>
           <div class="col-sm-4 col-sm-6 single">
               <div class="product">
                   <a href="detailes.php">
                       <img class="img-responsive" src="admin_area\product_images\P1.jpg" alt="Product Image">
                   </a>
                   <div class="text">
                       <h3>
                           <a href="details.php">
                               Product Image
                           </a>
                       </h3>
                       <p class="price">
                           $20
                       </p>
                       <p class="button">
                           <a href="details.php" class="btn btn-default">View Details</a>
                           <a href="details.php" class="btn btn-primary">
                               <i class="fa fa-shopping-cart">
                                   Add To Cart
                               </i>
                           </a>
                       </p>
                   </div>
               </div>
           </div>
           <div class="col-sm-4 col-sm-6 single">
               <div class="product">
                   <a href="detailes.php">
                       <img class="img-responsive" src="admin_area\product_images\P1.jpg" alt="Product Image">
                   </a>
                   <div class="text">
                       <h3>
                           <a href="details.php">
                               Product Image
                           </a>
                       </h3>
                       <p class="price">
                           $20
                       </p>
                       <p class="button">
                           <a href="details.php" class="btn btn-default">View Details</a>
                           <a href="details.php" class="btn btn-primary">
                               <i class="fa fa-shopping-cart">
                                   Add To Cart
                               </i>
                           </a>
                       </p>
                   </div>
               </div>
           </div>
           <div class="col-sm-4 col-sm-6 single">
               <div class="product">
                   <a href="detailes.php">
                       <img class="img-responsive" src="admin_area\product_images\P1.jpg" alt="Product Image">
                   </a>
                   <div class="text">
                       <h3>
                           <a href="details.php">
                               Product Image
                           </a>
                       </h3>
                       <p class="price">
                           $20
                       </p>
                       <p class="button">
                           <a href="details.php" class="btn btn-default">View Details</a>
                           <a href="details.php" class="btn btn-primary">
                               <i class="fa fa-shopping-cart">
                                   Add To Cart
                               </i>
                           </a>
                       </p>
                   </div>
               </div>
           </div>
           <div class="col-sm-4 col-sm-6 single">
               <div class="product">
                   <a href="detailes.php">
                       <img class="img-responsive" src="admin_area\product_images\P1.jpg" alt="Product Image">
                   </a>
                   <div class="text">
                       <h3>
                           <a href="details.php">
                               Product Image
                           </a>
                       </h3>
                       <p class="price">
                           $20
                       </p>
                       <p class="button">
                           <a href="details.php" class="btn btn-default">View Details</a>
                           <a href="details.php" class="btn btn-primary">
                               <i class="fa fa-shopping-cart">
                                   Add To Cart
                               </i>
                           </a>
                       </p>
                   </div>
               </div>
           </div>
           <div class="col-sm-4 col-sm-6 single">
               <div class="product">
                   <a href="detailes.php">
                       <img class="img-responsive" src="admin_area\product_images\P1.jpg" alt="Product Image">
                   </a>
                   <div class="text">
                       <h3>
                           <a href="details.php">
                               Product Image
                           </a>
                       </h3>
                       <p class="price">
                           $20
                       </p>
                       <p class="button">
                           <a href="details.php" class="btn btn-default">View Details</a>
                           <a href="details.php" class="btn btn-primary">
                               <i class="fa fa-shopping-cart">
                                   Add To Cart
                               </i>
                           </a>
                       </p>
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