<?php

//session_start();
//if (isset (check that it is admin...))
$con = mysqli_connect("localhost:3306","root","Grammy21","mydb");
//getting cats
function getCats(){
    global $con;
    $get_cats = "SELECT * FROM categories";

    $run_cats = mysqli_query($con, $get_cats);

    while ($row_cats = mysqli_fetch_array($run_cats))
    {
        $cat_id = $row_cats['cat_id'];
        $cat_title = $row_cats['cat_title'];

        echo "<li><a href='index.php?cat=$cat_id'>$cat_title</a></li>";
    }
}

function getStyles()
{
    global $con;
    $get_styles = "SELECT * FROM styles";

    $run_styles = mysqli_query($con, $get_styles);

    while ($row_styles = mysqli_fetch_array($run_styles)) {
        $style_id = $row_styles['style_id'];
        $style_title = $row_styles['style_title'];
        echo "<li><a href='index.php?styles=$style_id'>$style_title</a></li>";
    }
}

function getPro()
{
    if (!isset($_GET['cat'])) {
        if (!isset($_GET['style'])) {
            global $con;

            $get_pro = "SELECT * FROM products ORDER BY RAND() LIMIT 0,6";

            $run_pro = mysqli_query($con, $get_pro);

            while ($row_pro = mysqli_fetch_array($run_pro)) {
                $pro_id = $row_pro['product_id'];
                $pro_title = $row_pro['product_title'];
                $pro_cat = $row_pro['product_cat'];
                $pro_style = $row_pro['product_style'];
                $pro_price = $row_pro['product_price'];
                $pro_image = $row_pro['product_image'];

                echo "
            <div id='single_product'>
                <h3>$pro_title</h3>
                <img src='admin_area/product_images/$pro_image' width='180' height='180' />
                <p><b> R $pro_price</b></p>
                
                <a href='details.php?pro_id=$pro_id' style='float:left'>Details</a>
                
                <a href='index.php?pro_id=$pro_id'><button style='float:right'>Add to Cart</button></a>
            </div>
        ";
            }
        }
    }
}

function getCatPro()
{
    if (isset($_GET['cat'])) {

        $cat_id = $_GET['cat'];

            global $con;

            $get_cat_pro = "SELECT * FROM products WHERE product_cat='$cat_id'";

            $run_cat_pro = mysqli_query($con, $get_cat_pro);

            $count_cats = mysqli_num_rows($run_cat_pro);
        if($count_cats == 0)
        {
            echo "<h2 style='padding:20px'>No Products Availabe</h2>";
        }
            while ($row_cat_pro = mysqli_fetch_array($run_cat_pro)) {
                $pro_id = $row_cat_pro['product_id'];
                $pro_title = $row_cat_pro['product_title'];
                $pro_cat = $row_cat_pro['product_cat'];
                $pro_style = $row_cat_pro['product_style'];
                $pro_price = $row_cat_pro['product_price'];
                $pro_image = $row_cat_pro['product_image'];


                echo "
            <div id='single_product'>
                <h3>$pro_title</h3>
                <img src='admin_area/product_images/$pro_image' width='180' height='180' />
                <p><b> R $pro_price</b></p>
                
                <a href='details.php?pro_id=$pro_id' style='float:left'>Details</a>
                
                <a href='index.php?pro_id=$pro_id'><button style='float:right'>Add to Cart</button></a>
            </div>
        ";
            }
        }

}

function getStylePro()
{
    if (isset($_GET['style'])) {

        $style_id = $_GET['style'];

        global $con;

        $get_style_pro = "SELECT * FROM products WHERE product_style='$style_id'";

        $run_style_pro = mysqli_query($con, $get_style_pro);

        $count_styles = mysqli_num_rows($run_style_pro);
        if($count_styles == 0)
        {
            echo "<h2 style='padding:20px'>No Products Availabe</h2>";
        }
        while ($row_style_pro = mysqli_fetch_array($run_style_pro)) {
            $pro_id = $row_style_pro['product_id'];
            $pro_title = $row_style_pro['product_title'];
            $pro_cat = $row_style_pro['product_cat'];
            $pro_style = $row_style_pro['product_style'];
            $pro_price = $row_style_pro['product_price'];
            $pro_image = $row_style_pro['product_image'];


            echo "
            <div id='single_product'>
                <h3>$pro_title</h3>
                <img src='admin_area/product_images/$pro_image' width='180' height='180' />
                <p><b> R $pro_price</b></p>
                
                <a href='details.php?pro_id=$pro_id' style='float:left'>Details</a>
                
                <a href='index.php?pro_id=$pro_id'><button style='float:right'>Add to Cart</button></a>
            </div>
        ";
        }
    }

}

?>
