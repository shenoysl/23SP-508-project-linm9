<?php

// Display all errors, very useful for PHP debugging (disable in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once('connection.php');

session_start();

// If the username session is not set, then the user has not logged in yet
if (!isset($_SESSION['Username']))
{
    // If the page is receiving the email and password from the login form then verify the login data
    if (isset($_POST['Email']) && isset($_POST['password']))
    {
        $stmt = $conn->prepare("SELECT Username, password, user_type FROM users WHERE Email=:Email");
        $stmt->bindValue(':Email', $_POST['Email']);
        $stmt->execute();
        
        $queryResult = $stmt->fetch();
        
        // Verify password submitted by the user with the hash stored in the database
        if(!empty($queryResult) && password_verify($_POST["password"], $queryResult['password']))
        {
            // Create session variable
            $_SESSION['Username'] = $queryResult['Username'];
            $_SESSION['user_type'] = $queryResult['user_type'];

            // Redirect to main page
            header("Location: loggedon.php");
        } else {
            // Password mismatch, show login page
            require('index.php');
            exit();
        }
    }
    else
    {
        // Show login page
        require('index.php');
        exit();
    }
}

?>
