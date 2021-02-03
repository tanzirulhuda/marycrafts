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
                        <li>
                            <a href="shop.php">Shop</a>
                        </li>
                        <li>
                            <a href="checkout.php">My Account</a>
                        </li>
                        <li>
                            <a href="cart.php">Shopping Cart</a>
                        </li>
                        <li class="active">
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
                        Contact Us
                    </li>
                </ul>
            </div>
            <div class="col-md-3">

                <?php
    
                    include("includes/sidebar.php");
    
                ?>
            </div>
            <div class="col-md-9"><!-- col-md-9 bigin-->
                <div class="box"><!-- box bigin-->
                    <div class="box-header"><!-- box-header bigin-->
                        <center><!--center bigin-->
                            <h2>Feel Free To Contact Us</h2>
                            <p class="text-muted"><!--p bigin-->
                                If you have any type of question feel free to contact us .Our customer service work 24/7.
                            </p><!--p finish-->
                        </center><!--center finish-->
                        <form action="contact.php"method="post"><!-- form bigin-->
                            <div class="form-group"><!--form-group bigin-->
                                <label for="Name">Name</label>
                                <input type="text" class="form-control" name="name"placeholder="Full Name"required>
                            </div><!--form-group finish-->
                            <div class="form-group"><!--form-group bigin-->
                                <label for="Email">Email</label>
                                <input type="email" class="form-control" name="email"placeholder="Email"required>
                            </div><!--form-group finish-->
                            <div class="form-group"><!--form-group bigin-->
                                <label for="subject">Subject</label>
                                <input type="text" class="form-control" name="subject"placeholder="Subject"required>
                            </div><!--form-group finish-->
                            <div class="form-group"><!--form-group bigin-->
                                <label for="massage">Massage</label>
                                <textarea name="massage" class="form-control"></textarea>
                            </div><!--form-group finish-->
                            <div class="text-center"><!--text-center bigin-->
                                <button type="submit"name="submit" class="btn btn-primary">
                                    <i class="fa fa-user-md"> Send Massage</i>
                                </button>
                            </div><!--text-center finish-->
                        </form><!--form finish-->
                    </div> <!-- box-header finish-->
                </div>   <!-- box finish--> 
            </div><!-- col-md-9 finish-->
            
    </div>
    <?php
    
    include("includes/footer.php");
    
    ?>


<script src="js\jquery-331.min.js"></script>
<script src="js\bootstrap-337.min.js"></script>
</body>
</html>