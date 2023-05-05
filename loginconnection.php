<?php

// Display all errors, very useful for PHP debugging (disable in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Parameters of the MySQL connection
$servername = "cmsc508.com";
$username = "23SP_linm9";
$password = "23SP_linm9";
$database = "23SP_linm9_pr";

try {
    // Establish a connection with the MySQL server
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

session_start();

// If the username session is not set, then the user has not logged in yet
if (!isset($_SESSION['Username']))
{
    // If the page is receiving the email and password from the login form then verify the login data
    if (isset($_POST['Email']) && isset($_POST['password']))
    {
        $stmt = $conn->prepare("SELECT Username, password FROM users WHERE Email=:Email");
        $stmt->bindValue(':Email', $_POST['Email']);
        $stmt->execute();
        
        $queryResult = $stmt->fetch();
        
        // Verify password submitted by the user with the hash stored in the database
        if(!empty($queryResult) && $_POST["password"] === $queryResult['password'])
        {
            // Create session variable
            $_SESSION['Username'] = $queryResult['Username'];
            
            // Redirect to main page
            header("Location:loggedon.php");
        } else {
            // Password mismatch, show login page
            require('login.php');
            exit();
        }
    }
    else
    {
        // Show login page
        require('login.php');
        exit();
    }
}

?>
