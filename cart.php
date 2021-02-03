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
    <div id="top"><!--#top begin -->
    
        <div class="container"><!--container begin -->

            <div class="col-md-6 offer"><!--col-md-6 begin -->
                <a href="#" class="btn btn-success btn-sm">Welcome</a>
                <a href="checkout.php">3 Items In Your Cart|Total price: 300$</a>
            </div><!--col-md-6 finish -->
            <div class="col-md-6"><!--col-md-6 begin -->
                <ul class="menu"><!--menu begin -->
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
                </ul><!--menu finish -->
            </div><!--col-md-6 finish -->

        </div><!--container finish -->
    
    </div><!--#top finish -->
    <div id="navbar" class="navbar navbar-default"><!--navbar begin -->
        <div class="container"><!--container begin -->
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
                        <li>
                            <a href="shop.php">Shop</a>
                        </li>
                        <li>
                            <a href="checkout.php">My Account</a>
                        </li>
                        <li class="active">
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
        </div><!--container finish -->
    </div><!--navbar finish -->
    <div id="content">
        <div class="container">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        Cart
                    </li>
                </ul>
            </div>
            <div id="cart" class="col-md-9"><!--col-md-9 begin -->
                <div class="box"><!--box begin -->
                    <form action="cart.php"method="post"><!--form begin -->
                        <h1>Shopping Cart</h1>
                        <p class="text-muted">You have currently 3 item(s) in your cart</p>
                        <div class="table-responsive"><!--table-responsive begin -->
                            <table class="table"><!--table begin -->
                                <thead><!--thead begin -->
                                    <tr><!--tr begin -->
                                        <th colspan="2">Product</th>
                                        <th>Quantity</th>
                                        <th>Unit price</th>
                                        <th>Size</th>
                                        <th colspan="1">Delete</th>
                                        <th colspan="2">Sub total</th>
                                    </tr><!--tr finish -->
                                </thead><!--thead finish-->
                                <tbody><!--tbody begin -->
                                    <tr><!--tr begin -->
                                        <td>
                                            <img class="img-responsive" src="admin_area\product_images\P1.jpg" alt="Product Image">
                                        </td>
                                        <td>
                                            <a href="#">Three Piece</a>
                                        </td>
                                        <td>
                                            2
                                        </td>
                                        <td>
                                            $20
                                        </td>
                                        <td>
                                            Large
                                        </td>
                                        <td>
                                            <input type="checkbox"name="remove">
                                        </td>
                                        <td>
                                            $40
                                        </td>
                                    </tr><!--tr finish -->
                                </tbody><!--tbody finish -->
                                <tbody><!--tbody begin -->
                                    <tr><!--tr begin -->
                                        <td>
                                            <img class="img-responsive" src="admin_area\product_images\P1.jpg" alt="Product Image">
                                        </td>
                                        <td>
                                            <a href="#">Three Piece</a>
                                        </td>
                                        <td>
                                            2
                                        </td>
                                        <td>
                                            $20
                                        </td>
                                        <td>
                                            Large
                                        </td>
                                        <td>
                                            <input type="checkbox"name="remove">
                                        </td>
                                        <td>
                                            $40
                                        </td>
                                    </tr><!--tr finish -->
                                </tbody><!--tbody finish -->
                                <tbody><!--tbody begin -->
                                    <tr><!--tr begin -->
                                        <td>
                                            <img class="img-responsive" src="admin_area\product_images\P1.jpg" alt="Product Image">
                                        </td>
                                        <td>
                                            <a href="#">Three Piece</a>
                                        </td>
                                        <td>
                                            2
                                        </td>
                                        <td>
                                            $20
                                        </td>
                                        <td>
                                            Large
                                        </td>
                                        <td>
                                            <input type="checkbox"name="remove">
                                        </td>
                                        <td>
                                            $40
                                        </td>
                                    </tr><!--tr finish -->
                                </tbody><!--tbody finish -->
                                <tfoot><!--tfoot begin -->
                                    <tr><!--tr begin -->
                                       <th colspan="6">Total</th>
                                       <th colspan="2">$120</th>  
                                    </tr><!--tr finish -->
                                </tfoot><!--tfoot finish -->
                            </table><!--table finish -->
                        </div><!--table-responsive finish -->
                        <div class="box-footer"><!--box-footer begin-->
                            <div class="pull-left"><!--pull-left begin-->
                                <a href="index.php"class="btn btn-default"><!--btn btn-default begin-->
                                    <i class="fa fa-chevron-left"></i> Continue Shopping
                                </a><!--btn btn-default finish -->
                            </div><!--pull-left finish -->
                            
                            <div class="pull-right"><!--pull-right begin-->
                                <button type="submit" name="update"value="update cart" class="btn btn-default"><!--btn btn-default begin-->
                                    <i class="fa fa-refresh"></i> Update Cart
                                </button><!--btn btn-default finish -->
                                <a href="checkout.php" class="btn btn-primary">
                                    Proceed Checkout <i class="fa fa-chevron-right"></i>
                                </a>
                            </div><!--pull-right finish -->
                        </div><!--box-footer finish -->
                    </form><!--form finish -->
                </div><!--box finish -->
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
            </div><!--col-md-9 finish -->
            <div class="col-md-3"><!--col-md-3 begin-->
                <div id="order-summery" class="box"><!--order-summery begin-->
                    <div class="box-header"><!--box-header begin-->
                        <h3>Order Summery</h3>
                    </div><!--box-header finish -->
                    <p class="text-muted"><!--text-muted begin-->
                        Shipping and additional costs are calculated based on value you have entered. 
                    </p><!--text-muted finish -->
                    <div class="table-responsive"><!--table-responsive begin-->
                        <table class="table"><!--table begin-->
                            <tbody><!--tbody begin-->
                                <tr><!--tr begin-->
                                    <td>Order Sub-total</td>
                                    <th>$120</th>
                                </tr><!--tr finish -->
                                <tr><!--tr begin-->
                                    <td>Shipping</td>
                                    <td>$0</td>
                                </tr><!--tr finish -->
                                <tr class="total"><!--tr begin-->
                                    <td>Total</td>
                                    <td>$120</td>
                                </tr><!--tr finish -->
                            </tbody><!--tbody finish -->
                        </table><!--table finish -->
                    </div><!--table-responsive finish -->
                </div><!--order-summery finish -->
            </div><!--col-md-3 finish -->
    </div>
    <?php
    
    include("includes/footer.php");
    
    ?>


<script src="js\jquery-331.min.js"></script>
<script src="js\bootstrap-337.min.js"></script>
</body>
</html>