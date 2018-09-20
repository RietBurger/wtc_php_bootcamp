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

        <img id="logo" src="../images/logo.jpeg" />
        <img id="banner" src="../images/images.jpeg" />

    </div>

    <div class="menubar">
        <ul id="menu">
            <li><a href="#">Home</li>
            <li><a href="#">All products</li>
            <li><a href="#">My account</li>
            <li><a href="#">Sign up</li>
            <li><a href="#">Cart</li>
            <li><a href="#">Contact us</li>
            <li><a href="#">Other</li>

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
<?php
    if(isset($_GET['pro_id'])) {

        $product_id = $_GET['pro_id'];
        $get_pro = "SELECT * FROM products WHERE product_id='$product_id'";

        $run_pro = mysqli_query($con, $get_pro);

        while ($row_pro = mysqli_fetch_array($run_pro)) {
            $pro_id = $row_pro['product_id'];
            $pro_title = $row_pro['product_title'];
            $pro_style = $row_pro['product_style'];
            $pro_price = $row_pro['product_price'];
            $pro_image = $row_pro['product_image'];
            $pro_desc = $row_pro['product_desc'];

            echo "
            <div id='single_product'>
                <h3>$pro_title</h3>
                <img src='admin_area/product_images/$pro_image' width='400' height='300' />
                <p><b> R $pro_price</b></p>
                <p>$pro_desc </p>

                <a href='index.php' style='float:left'>Go Back</a>

                <a href='index.php?pro_id=$pro_id'><button style='float:right'>Add to Cart</button></a>
            </div>
            ";
        }
    }
?>
    </div>

    <div id="footer">
        <h2 style="text-align:center; padding-top:30px;">&copy; 2017 by rburger </h2>

    </div>
</div>
</div>

</body>
</html>
