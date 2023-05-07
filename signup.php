<html>
<head>
<title>Sign-Up Page</title>
<?php require_once('header.php'); ?>
</head>

<?php
require_once ('connection.php');

// Create new account and redirect to login
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = 'user';
    // Check that passwords match
    // TODO check whether email ALREADY exists
    if($_POST['Password'] == $_POST['RePassword']) {
        //INSERT INTO users table new user
        $stmt = $conn->prepare("INSERT INTO users (Email, Username, Password, user_type) VALUES (:Email, :Username, :Password, :user)");
        $stmt->bindValue(':Email', $_POST['Email']);
        $stmt->bindValue(':Username', $_POST['Username']);
            //Hash password
            $hash = password_hash($_POST['Password'], PASSWORD_DEFAULT);
        $stmt->bindValue(':Password', $hash);
        $stmt->bindValue(':user', $user);
        $stmt->execute();
        //Go to login page to test out new sign in
        header("Location: index.php");
    }
    else {
        echo '<div class = "error"> Passwords do not match </div>';
    }
}

?>
<style>
#error{
    color: red;
    width: 90px;
    background: black;
    position: fixed;
    top: 30%;
    left: 70%;
}
body{
background-image: url('photos/background2.jpg');
font-family: 'Ubuntu', sans-serif;
padding-top:200px;
}
.wrapper {
    text-align:center;
}
.col-4 {
background: rgba(0,0,0,0.2);
        width: 400px;
        height: 400px;
        margin: auto;
        border-radius: 1.5em;
        box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.5);
}
.form-group {
width: 76%;
    color: rgb(38, 50, 56);
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 1px;
    margin-bottom: 50px;
    margin-left: 46px;
    text-align: left;
    margin-bottom: 27px;
    font-family: 'Ubuntu', sans-serif;
}
.sign {
        padding-top: 40px;
        color: #0d0a02;
        font-family: 'Ubuntu', sans-serif;
        font-weight: bold;
        font-size: 23px;
    }
.signup {
color: #0d0a02;
cursor: pointer;
        border-radius: 5em;
        color: #FFF;
        background: #0d0a02;
        border: 0;
        padding-left: 40px;
        padding-right: 40px;
        padding-bottom: 10px;
        padding-top: 10px;
        font-family: 'Ubuntu', sans-serif;
        font-size: 13px;
        box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
}
</style>


<body style = "background-color:black;">

	<div class="container-fluid">
		<form method="post">
			<div class="row justify-content-center">
				<div class="col-4">
					<p class="sign" align="center">Sign Up</p>
					<div class="form-group">
						<input type="text" class="form-control" id="Username" placeholder="Creative Username" name="Username" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="Email" placeholder="Email" name="Email" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="Password" placeholder="Password" name="Password" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="RePassword" placeholder="Re-Enter Password" name="RePassword" required>
					</div>
					<br><div class = "wrapper">
					<button type="submit" class="signup">Sign-Up</button></div>
				</div>
			</div>
		</form>
	</div>
</body>
</html>