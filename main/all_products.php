<!DOCTYPE>
<?php
include("functions.php");
?>

<html>
<head>
    <title>rush00</title>
    <link rel="stylesheet" href="css/styles.css" media="all" >
</head>
<body>

<div class="main_wrapper">

    <div class="header_wrapper">

        <a href="index.php"><img id="logo" src="http://evergreenexport.co.in/wp-content/uploads/2014/12/banner-4-960x400_c.jpg" /></a>
        <img id="banner" src="https://assets.razerzone.com/eeimages/razer_pages/16462/1220x500-banner_cap.jpg" />

    </div>

    <div class="menubar">
        <ul id="menu">
            <li><a href="index.php">Home</li>
            <li><a href="all_products.php">All products</li>
            <li><a href="my_account.php">My account</li>
            <li><a href="src/register.php">Sign up</li>
            <li><a href="cart.php">Cart</li>
            <li><a href="#">Contact us</li>

        </ul>

        <div id="form">
            <form method="get" action="results.php" enctype="multipart/form-data" >
                <input type="text" name="user_query" />
                <input type="submit" name="search" value="Search" placeholder="Search a Product" />
            </form>
        </div>
    </div>

    <div class="content_wrapper">

        <div id="sidebar">

            <div id="sidebar_title">Categories</div>
            <ul id="cats">

                <?php getCats(); ?>

            </ul>

            <div id="sidebar_title">Styles</div>
            <ul id="cats">

                <?php getStyles(); ?>

            </ul>
        </div>
    </div>
        <div id="content_area">

            <div id="shopping_cart">
                <span style="float:right font-size:18px; padding-left:5px; line-height:40px;">

                    Welcome Guest! <b style="color:yellow">Shopping Cart</b>Total Items: Total price: <a href="cart.php" style="color:yellow">Go to Cart</a>

                </span>
            </div>

            <div>
                <p><h2>All Products</h2></p>
            </div>

            <div id="products_box">

                <?php getPro(); ?>
                <?php getCatPro(); ?>
                <?php getStylePro(); ?>

            </div>
        </div>

        <div id="footer">
            <h2 style="text-align:center; padding-top:30px;">&copy; 2017 by rburger </h2>

        </div>
    </div>
</div>

</body>
</html>
