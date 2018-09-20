<!DOCTYPE>
<?php
include("connect.php")
?>
<html>
<head>
    <title>Inserting Product</title>
<!--    <script src="http://tinymce.cachefly.net/4.1/tinymce.min.js"></script>-->
<!--    <script>-->
<!--        tinymce.init({selector:'textarea'});-->
<!--    </script>-->
</head>

<body>
    <form action="inserting_product.php" method="post" enctype="multipart/form-data">

        <table align="center" width="700px" bgcolor="#ff1493" border="2">

            <tr align="center">
                <td colspan="7"><h2 >Insert New Post here</h2></td>
            </tr>

            <tr>
                <td align="right"><b>Product Title:</b></td>
                <td><input type="text" name="product_title" size="60" required/></td>
            </tr>
            <tr>
                <td align="right"><b>Product Category:</b></td>
                <td>
                    <select name="product_cat">
                        <option>Select a Category</option>
                        <?php
                        $get_cats = "SELECT * FROM categories";

                        $run_cats = mysqli_query($con, $get_cats);

                        while ($row_cats = mysqli_fetch_array($run_cats)) {
                            $cat_id = $row_cats['cat_id'];
                            $cat_title = $row_cats['cat_title'];

                            echo "<option value='$cat_id'>$cat_title</option>";
                        }
                        ?>
                    </select>
                </td>

            </tr>
            <tr>
                <td align="right"><b>Product Style:</b></td>
                <td>
                    <select name="product_cat">
                        <option>Select a Category</option>
                        <?php
                        $get_styles = "SELECT * FROM styles";

                        $run_styles = mysqli_query($con, $get_styles);

                        while ($row_styles = mysqli_fetch_array($run_styles)) {
                            $style_id = $row_styles['style_id'];
                            $style_title = $row_styles['style_title'];

                            echo "<option value='$style_id'>$style_title</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr><tr>
                <td align="right"><b>Product Image:</b></td>
                <td><input type="file" name="product_image" /></td>
            </tr><tr>
                <td align="right"><b>Product Price:</b></td>
                <td><input type="text" name="product_price" /></td>
            </tr><tr>
                <td align="right"><b>Product Description:</b></td>
                <td><textarea name="product_desk" cols="20" rows="10"></textarea></td>
            </tr><tr>
                <td align="right"><b>Product Keywords:</b></td>
                <td><input type="text" name="product_keywords" size="50" /></td>
            </tr>
            <tr align="center">
                <td colspan="7"><input type="submit" name="insert_post" value="Insert Product Now"/></td>
            </tr>
        </table>

    </form>
</body>

</html>
<?php
if (isset($_POST['insert_post']))
{
    //getting text data from the fields
    $product_title = $_POST['product_title'];
    $product_cat = $_POST['product_cat'];
    $product_style = $_POST['product_style'];
    $product_price = $_POST['product_price'];
    $product_desc = $_POST['product_desc'];
    $product_keywords = $_POST['product_keywords'];

    //getting image from field
    $product_image = $_FILES['product_image']['name'];
    $product_image_tmp = $_FILES['product_image']['tmp_name'];

    move_uploaded_file($product_image_tmp, "product_images/$product_image");

    $insert_product = "INSERT INTO products(product_title, product_cat, product_style, product_price, product_desc, product_image, product_keywords)
                         VALUES ('$product_title', '$product_cat', '$product_style', '$product_price','$product_desc', '$product_image','$product_keywords')";

    $insert_pro = mysqli_query($con, $insert_product);

    if ($insert_pro)
    {
        echo "<script>alert('Product Has Been Inserted')</script>";
        echo "<script>window.open('inserting_product.php', '_self')</script>";
    }
    else
    {
        echo "Error: " . $insert_product . "<br>" . mysqli_error($con);
    }
}
mysqli_close($con);
?>


