<html>
<head>
<title>CMSC 508</title>
<?php require_once('header.php'); ?>
</head>
<?php require_once('loginconnection.php');

$stmt = $conn->prepare("SELECT Password, Email FROM users WHERE Username=:Username");
$stmt->bindValue(':Username', $_SESSION['Username']);
$stmt->execute();

$queryResult = $stmt->fetch();

if(!empty($queryResult))
{
    $email = $queryResult['Email'];
    $password = $queryResult['Password'];
}

    if($_SERVER["REQUEST_METHOD"] == "POST") { 
        if(empty($_POST['PassChange']) && empty($_POST['DeleteAnime']) && $_POST['UserChange'] != $_SESSION['Username']) {
            $update = $conn->prepare("UPDATE users SET Username=:UserChange WHERE Email=:Email");
            $update->bindValue(':UserChange', $_POST['UserChange']);
            $update->bindValue(':Email', $email);
            $update->execute();
            $_SESSION['Username'] = $_POST['UserChange'];
            echo '<div id = "done">Done!</div>';
        }
        else if (empty($_POST['PassChange']) && empty($_POST['DeleteAnime']) && $_POST['UserChange'] == $_SESSION['Username']) {
            echo '<div id = "error">Username did not change!</div>';
        }
        else if (!empty($_POST['PassChange']) && $_POST['PassChange'] != $password) {
            $update = $conn->prepare("UPDATE users SET Password=:PassChange WHERE Email=:Email");
            $update->bindValue(':PassChange', $_POST['PassChange']);
            $update->bindValue(':Email', $email);
            $update->execute();
            echo '<div id = "done">Done!</div>';
        }
        else if(!empty($_POST['DeleteAnime'])) {
            $delete = $conn->prepare("DELETE from user_list WHERE Email=:Email AND Anime_name=:AnimeName");
            $delete->bindValue(':Email', $email);
            $delete->bindValue(':AnimeName', $_POST['DeleteAnime']);
            $delete->execute();
            echo '<div id = "done">Done!</div>';
        }
    }
    
    $animeName = $conn->prepare("SELECT a.anime_name FROM user_list_view a JOIN animes USING (anime_name) WHERE email=:Email");
    $animeName->bindValue(':Email', $email);
    $animeName->execute();
?>
</head>
<style>
#error {
    color: red;
    width: 90px;
    background: black;
    position: fixed;
    top: 30%;
    left: 45%;
}
#done {
    color: green;
    width: 90px;
    background: black;
    position: fixed;
    top: 30%;
    left: 45%;
}
body {
    background: #C890FF;
}
.wrapper {
    position: absolute;
    top: 10%;
    left: 10%;
    width: 500px;
    display: flex;
    box-shadow: 0 1px 20px 0 rgba(69,90,100,0.5)
}
.wrapper .left { 
    padding: 30px 25px;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
    text-align: center;
}
.wrapper .left h4 {
    font-family: papyrus, fantasy; 
    font-size: 40px;   
}
.wrapper .right {
    width: 65%;
    background: #FFF;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
    padding: 30px 40px;
}
.wrapper .right .update h3{
    margin-bottom: 15px;
    padding-bottom: 5px;
    border-bottom: 1px solid #FFF;
    color: #353c4e;
    text-transform: uppercase;
    font-family: papyrus, fantasy; 
    letter-spacing: 2px;
}
.wrapper .right h4{
    color: #821DB7;
    font-family: papyrus, fantasy; 
    letter-spacing: 1px;
    font-size: 25px;
}
.wrapper .right .Username .UserChange,
.wrapper .right .Password .PassChange,
.wrapper .right .Delete .DeleteAnime{
    display: inline-block;
    border-color: #821DB7;
    font-size: 15px;
    text-align: center;
}
.AnimeList {
    position: absolute;
    top: 0%;
    left: 130%;
    width: 600px;
    box-shadow: 0 1px 20px 0 rgba(69,90,100,0.5);
    background: #FFF;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
    padding: 30px 100px;
}
.AnimeList h3 {
    color: #821DB7;
    font-family: papyrus, fantasy; 
    letter-spacing: 1px;
    font-size: 25px;
    text-align: center;
}
.list {
    text-align: center;
}
.names {
    font-family: papyrus, fantasy; 
    font-size: 20px;
    display: inline-block;
    vertical-align: middle;
    width: 200px;
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
	<a href="loggedon" type="goBack" class="goBack">Go Back</a>
</div>
<div class="wrapper">
	<div class="left">
		<!--https://www.freepik.com/free-vector/cute-astronaut-spying-with-binoculars-space-cartoon-vector-icon-illustration-science-technology_27614613.htm#page=6&query=avatar&position=16&from_view=keyword&track=sph">Image by catalyststuff on Freepik -->
		<img src="photos/5300_10_05.jpg" alt="user" width="150px">
		<h4><span class="font-weight-bold"><?php echo $_SESSION['Username']?></span></h4>
	</div>
	<div class="right">
		<div class = "Update">
			<h3><p>User Info</p></h3>
			<form form action="" method="POST">
				<div class="form-group">
					<div class="Username">
						<h4>Username</h4>
							<input type="text" class="form-control" id="UserChange" placeholder="Change Username" name="UserChange">
							<p></p>
							<p><button type="submit" name="submitUser" class="UserChange">Submit</button></p>
					</div>
					<div class="Password">
						<h4>Password</h4>
							<input type="text" class="form-control" id="PassChange" placeholder="Change Password" name="PassChange">
							<p></p>								
							<p><button type="submit" name="submitPass" class="PassChange">Submit</button></p>
					</div>
					<div class="Delete">
						<h4>Delete an Anime</h4>
							<input type="text" class="form-control" id="DeleteAnime" placeholder="Name of Anime to Delete" name="DeleteAnime">
							<p></p>								
							<p><button type="submit" name="Delete" class="DeleteAnime">Delete</button></p>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="AnimeList">
		<div class = "List">
			<div class = "names">
			<h3><p>My Anime List:</p></h3>
			<?php
	           while($row = $animeName->fetch()) {
	               echo $row["anime_name"]. "<p></p>";
                }
	       ?>
	       </div>
	       
		</div>
	</div>
</div>
</body>
</html>