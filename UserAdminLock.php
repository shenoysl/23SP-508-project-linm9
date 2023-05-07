<html>
<head>
<title> AnimDB</title>
<?php 
require_once('connection.php');
require_once ('loginconnection.php');
//no double login allowed!!!
if(isset($_SESSION['Username'])) {
    if(isset($_SESSION['user_type'])) {
        if($_SESSION['user_type'] == 'Admin') {
            header("Location: admin-index.php");
        }
        else {
            header("Location: loggedon");
        }
    }
}
?>


</head>
</html>