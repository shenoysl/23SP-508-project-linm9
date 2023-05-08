<html>
<head>
<title>Update Producer</title>
<?php require_once('header.php'); ?>
</head>
<?php 
require_once('loginconnection.php');
if (isset($_SESSION['Username']) && isset($_SESSION['user_type'])) {
    if ($_SESSION['user_type'] != "Admin") {
        header ("Location: index");
    }
}

global $conn;

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $sqlQuery = "UPDATE producers
                        SET
                        First_name = :First_name,
                        Last_name = :Last_name,
                        Birthdate = :Birthdate
                    WHERE Producer_id = :Producer_id";
    
    $stmt = $conn->prepare($sqlQuery);
    $stmt->bindValue(':First_name', $_POST['First_name']);
    $stmt->bindValue(':Last_name', $_POST['Last_name']);
    $stmt->bindValue(':Birthdate', $_POST['Birthdate']);
    $stmt->bindValue(':Producer_id', $_POST["Producer_id"]);
    $stmt->execute();
        //Go to login page to test out new sign in   
        header("Location: admin-index.php");
    }
?>
<style>
body{
background-image: url('photos/background.jpg');
background-size: cover;
font-family: 'Ubuntu', sans-serif;
padding-top: 200px;
}
.wrapper {
    text-align:center;
}
.col-4 {
        position: absolute;
        top: 20%;
        background: rgba(0,0,0,0.25);
        width: 400px;
        height: 430px;
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
    position: absolute;
    left: 1%;
    top: 3%;
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
button {
    position: absolute;
    left: 35%;
}
</style>


<body>
<div class = "goBack">
	<a href="admin-index.php" type="goBack" class="goBack">Go Back</a>
</div>
	<div class="container mt-3 mb-3">
		<form form action="" method="post">
			<div class="row justify-content-center">
				<div class="col-4">
					<p class="sign" align="center">Update a Producer</p>
					<div class="form-group">
						<input type="text" class="form-control" id="Producer_id" placeholder="Enter Producer ID to Update" name="Producer_id" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="First_name" placeholder="Enter First Name" name="First_name" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="Last_name" placeholder="Enter Last Name" name="Last_name" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="Birthdate" placeholder="Enter Birthdate(YYYY/MM/DD)" name="Birthdate" required>
					</div>
				
					<br>

					<button type="submit" name = "submit" class="log-in">Submit</button>
				</div>
			</div>
		</form>
	</div>
</body>
</html>


