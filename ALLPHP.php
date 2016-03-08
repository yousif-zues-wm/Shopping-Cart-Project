<?php
$dbhost = "localhost"; 
$dbuser = "root"; 
$dbpassword = "root"; 
$dbdatabase = "Cart"; 
$db = mysql_connect($dbhost, $dbuser, $dbpassword); mysql_select_db($dbdatabase, $db);


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('John', 'Doe', 'john@example.com')";

    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;





try {
    $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
    foreach($dbh->query('SELECT * from FOO') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

session_start();
if (isset($_SESSION['SESS_CHANGEID']) == TRUE) {
    session_unset();
    session_regenerate_id();
}
require("config.php"); ?> <? php echo $config_sitename; ?> < div id = "header" > < /div> <div id="menu"> <a href="<?php echo $config_basedir; ?>">Home</a > - < a href = "<?php echo $config_basedir;?>showcart.php" > View Basket / Checkout < /a></div > < div id = "container" > < div id = "bar" > <? php require("bar.php");
echo "<hr />";
if (isset($_SESSION['SESS_LOGGEDIN']) == TRUE) {
    echo "Logged in as <strong>".$_SESSION['SESS_USERNAME'].
    "</strong>[<a href=" & quot;.$config_basedir. & quot;
    logout.php ">logout</a>]";
} else {
    echo "<a href=" & quot;.$config_basedir. & quot;
    login.php ">Login</a>";
}

?>