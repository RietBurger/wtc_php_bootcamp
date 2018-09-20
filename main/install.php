//DATABASE
<?PHP
$servername = "[]";
$username = "[]";
$password = "[]";
// Connect to MySQL
$con = mysqli_connect($servername, $username, $password);
// Check connection
if (!$con)
{
    die("Connection failed: " . mysqli_connect_error() . "\n");
}
else
{
    echo "MySQL connected"."\n";
}
// Close the connection
mysqli_close($con);
?>

// LOGIN/USER DATABASE - to edit
<?PHP
$servername = "[]";
$username = "[]";
$password = "[]";

// Connect to MySQL
$con = mysqli_connect($servername, $username, $password);
// Create a database
$sql = "CREATE DATABASE myDB";
if (mysqli_query($con, $sql))
{
    echo "Database created successfully" . "\n";
}
else
{
    echo "Error creating database: " . mysqli_error($con) . "\n";
}

mysqli_close($con);
?>

<?PHP
$servername = "[]";
$username = "[]";
$password = "[]";
$dbname = "[]";

// Connect to MySQL
$con = mysqli_connect($servername, $username, $password, $dbname);

// Create a users table
$table_users = "CREATE TABLE Users (
    id INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
    first_name VARCHAR(255) ,
    last_name VARCHAR(255) ,
    uid VARCHAR(255) ,
    passwd VARCHAR(1000)
    )";

if ($con->query($table_users) === TRUE)
{
    echo "Table Products created successfully";
}
else
{
    echo "Error creating table: " . $con->error;
}

// Create a products table
$table_products = "CREATE TABLE Products (
    product_id INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    product_title VARCHAR(255) ,
    product_cat INT(100) ,
    product_style INT(100) ,
    product_price INT(100) ,
    product_desc TEXT(255) ,
    product_image TEXT(255) ,
    product_keywords TEXT(255)
    )";

if ($con->query($table_products) === TRUE)
{
    echo "Table Products created successfully";
}
else
{
    echo "Error creating table: " . $con->error;
}
// Create a categories table
$table_cat = "CREATE TABLE Categories (
    cat_id INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    cat_title TEXT(255)
    )";

if ($con->query($table_cat) === TRUE)
{
    echo "Table Categories created successfully";
}
else
{
    echo "Error creating table: " . $con->error;
}

// Create a Style table
$table_style = "CREATE TABLE Styles (
    style_id INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    style_title TEXT(255)
    )";

if ($con->query($table_style) === TRUE)
{
    echo "Table Styles created successfully";
}
else
{
    echo "Error creating table: " . $con->error;
}
// Close the connection
mysqli_close($con);
?>

//CATEGORIES
<?PHP
$servername = "[]";
$username = "[]";
$password = "[]";
$dbname = "[]";

// Connect to MySQL
$con = mysqli_connect($servername, $username, $password, $dbname);
// Adding categories
$cat_info = "INSERT INTO Categories (cat_title)
    VALUES ('A-Frame Trucker');";
$cat_info .= "INSERT INTO Categories (cat_title)
    VALUES ('Americano');";
$cat_info .= "INSERT INTO Categories (cat_title)
    VALUES ('Elite');";
$cat_info .= "INSERT INTO Categories (cat_title)
    VALUES ('Fedora');";
$cat_info .= "INSERT INTO Categories (cat_title)
    VALUES ('Color');";
if (mysqli_multi_query($con, $cat_info))
{
    echo "New categories created successfully";
}
else
{
    echo "Error: " . $cat_info . "<br>" . mysqli_error($con);
}
// Close the connection
mysqli_close($con);
?>

//STYLES
<?PHP
$servername = "[]";
$username = "[]";
$password = "[]";
$dbname = "[]";

// Connect to MySQL
$con = mysqli_connect($servername, $username, $password, $dbname);
// Adding styles
$style_info = "INSERT INTO Styles (style_title)
VALUES ('Color');";
$style_info .= "INSERT INTO Styles (style_title)
VALUES ('Size');";
if (mysqli_multi_query($con, $style_info))
{
    echo "New styles created successfully";
}
else
{
    echo "Error: " . $style_info . "<br>" . mysqli_error($con);
}
// Close the connection
mysqli_close($con);
?>



