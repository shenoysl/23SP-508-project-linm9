<html>
<head>
<title>Death Note Rate/Review</title>
<?php require_once('header.php'); ?>
</head>
<?php 
require_once('loginconnection.php');


global $conn;

$AnimeID = 'DN';
$username = $_SESSION['Username'];


$stmt = $conn->prepare("SELECT Email FROM users WHERE Username=:Username");
$stmt->bindValue(':Username', $_SESSION['Username']);
$stmt->execute();

$queryResult = $stmt->fetch();

if(!empty($queryResult)) 
{
$email = $queryResult['Email'];
}

$check = $conn->prepare("SELECT Anime_id FROM rates_reviews WHERE Email=:Email AND Anime_id=:Anime_id");
$check->bindValue(':Anime_id', $AnimeID);
$check->bindValue(':Email', $email);
$check->execute();

$checking = $check->fetch();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($checking)) {
        $stmt = $conn->prepare("INSERT INTO rates_reviews (Rating, Review, Anime_id, Email) VALUES (:Rating, :Review, :Anime_id, :Email)");        
        $stmt->bindValue(':Rating', $_POST['Rating']);
        $stmt->bindValue(':Review', $_POST['Review']);
        $stmt->bindValue(':Anime_id', $AnimeID);
        $stmt->bindValue(':Email', $email);
        $stmt->execute();
        //Go to login page to test out new sign in   
        header("Location: death-note-info.php");
    }
    else{
        echo '<div id = "reAddError">You already left a rating/review!</div>';
    }
}
?>
<style>

#reAddError {
    color: red;
    width: 90px;
    background: black;
    position: fixed;
    top: 50%;
    left: 50%;
}


body{
background-image: url('photos/deathnote.jpeg');
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

.goBack {
    color: #0d0a02;
    cursor: pointer;
    color: #000;
    text-align: center;
    background: #FFF;
    border-color: #821DB7;
    font-family: papyrus, fantasy;
    font-size: 20px;
    width: 100px;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
}

</style>


<body>
<div class = "goBack">
	<a href="death-note-info.php" type="goBack" class="goBack">Go Back</a>
</div>
	<div class="container mt-3 mb-3">
		<form method="post">
			<div class="row justify-content-center">
				<div class="col-4">
					<p class="sign" align="center">Rate & Review Death Note</p>
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


