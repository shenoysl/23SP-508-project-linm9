<html>
<head>
<title>login/signup</title>
<?php require_once('header.php'); ?>
<?php require_once('connection.php'); ?>

</head>
<?php 
require_once('loginconnection.php');

global $conn;


$email= $_SESSION['Email'];
$AnimeID = 'DSL';


if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check that passwords match
    // TODO check whether email ALREADY exists
        //INSERT INTO users table new user
    echo "INSERT INTO rates_reviews(Anime_id, Email, Rating, Review) VALUES ($AnimeID, $email, :Rating, :Review)";
        $stmt = $conn->prepare("INSERT INTO rates_reviews(Anime_id, Email, Rating, Review) VALUES ($AnimeID, $email, :Rating, :Review)");
        $stmt->bindValue(':Rating', $_POST['Rating']);
        $stmt->bindValue(':Review', $_POST['Review']);
        $stmt->execute();
        
        //Go to login page to test out new sign in
        header("Location: demon-slayer-info.php");
    }

?>
<style>
body{
background-image: url('photos/ds.jpg');
background-size: cover;
font-family: 'Ubuntu', sans-serif;
padding-top: 200px;
}
.wrapper {
    text-align:center;
}
.col-4 {
background: rgba(0,0,0,0.25);
        width: 400px;
        height: 320px;
        margin: auto;
        border-radius: 1.5em;
        box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.4);   
}
.sign {
        padding-top: 40px;
        color: white;
        font-family: 'Ubuntu', sans-serif;
        font-weight: bold;
        font-size: 23px;
    }
.form-group {
width: 76%;
    color: rgb(38, 50, 56);
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 1px;
    margin-bottom: 50px;
    margin-left: 46px;
    text-align: center;
    margin-bottom: 27px;
    font-family: 'Ubuntu', sans-serif;
}

.log-in {
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


<body>
	<div class="container mt-3 mb-3">
		<form method="post">
			<div class="row justify-content-center">
				<div class="col-4">
					<p class="sign" align="center">Rate & Review Demon Slayer</p>
					<div class="form-group">
						<input type="text" class="form-control" id="Rating" placeholder="Enter Rating" name="Rating" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="Review" placeholder="Write Review" name="Review" required>
					</div>
					<br><div class = "wrapper">
					<button type="submit" name = "submit" class="log-in">Submit</button>
				</div>
			</div>
		</form>
	</div>
</body>
</html>


