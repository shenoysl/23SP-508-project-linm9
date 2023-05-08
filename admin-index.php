
<html>
<head>
<title>Admin Main</title>
<?php 
require_once ('loginconnection.php');
if (isset($_SESSION['Username']) && isset($_SESSION['user_type'])) {
    if ($_SESSION['user_type'] != "Admin") {
        header ("Location: index");
    }
}
?>
<style>
body{
    background-image: url('photos/background4.jpg');
    background-size: cover;
}
h4 {
    font-family: papyrus, fantasy;
    font-size: 40px;
    color: #FFF;
}
.sort {
    width: 400px;
    text-align: left;
    box-shadow: 0 1px 20px 0 rgba(69,90,100,0.8);
    font-family: papyrus, fantasy; 
    font-size: 30px;
    display: inline-block;
    color: #FFF;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
}
.sort a {
    font-family: papyrus, fantasy; 
    font-size: 20px;
    color: #FFF;
}
.sort h3 {
    position: absolute;
    top: 8%;
    left: 1%;
    font-family: papyrus, fantasy; 
    font-size: 25px;
    color: #FFF;
}
.fetch {
    top: 17%;
    left: 1%;
    position: absolute;
    width: 300px;
    text-align: center;
    box-shadow: 0 1px 20px 0 rgba(69,90,100,0.8);
    font-family: papyrus, fantasy; 
    font-size: 25px;
    display: inline-block;
    color: #FFF;
    background: linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4));
}
.fetch2 {
    top: 17%;
    left: 25%;
    position: absolute;
    width: 300px;
    text-align: center;
    box-shadow: 0 1px 20px 0 rgba(69,90,100,0.8);
    font-family: papyrus, fantasy; 
    font-size: 25px;
    display: inline-block;
    color: #FFF;
    background: linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4));
}
.fetch3 {
    top: 17%;
    left: 49%;
    position: absolute;
    width: 300px;
    text-align: center;
    box-shadow: 0 1px 20px 0 rgba(69,90,100,0.8);
    font-family: papyrus, fantasy; 
    font-size: 25px;
    display: inline-block;
    color: #FFF;
    background: linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4));
}
.fetch4 {
    top: 17%;
    left: 73%;
    position: absolute;
    width: 300px;
    text-align: center;
    box-shadow: 0 1px 20px 0 rgba(69,90,100,0.8);
    font-family: papyrus, fantasy; 
    font-size: 25px;
    display: inline-block;
    color: #FFF;
    background: linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4));
}
.logout {
    position: absolute;
    top: 1%;
    left: 93%;
    width: 100px;
    text-align: center;
    box-shadow: 0 1px 20px 0 rgba(69,90,100,0.8);
    font-family: papyrus, fantasy; 
    font-size: 25px;
    display: inline-block;
    color: #FFF;
    background: linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4));
}
</style>
<body>
<h4>Admin Page</h4>
<div class = "sort">
<p><h3>Admin Tools:</h3></p>
	<div class = "fetch">
	<a href="add-Anime.php">Add an Anime!</a>
	<p></p>
	<a href="delete-Anime.php">Delete an Anime!</a>
	<p></p>
	<a href="update-Anime.php">Update an Anime!</a>
	<p></p>
	<a href="delete-User.php">Delete a User!</a>
	<p></p>
	<a href="update-User.php">Update a User!</a>
	<p></p>
	<a href="add-Producer.php">Add a Producer!</a>
	<p></p>
	<a href="delete-Producer.php">Delete a Producer!</a>
	<p></p>
	<a href="update-producer.php">Update a Producer!</a>
	<p></p>
	<a href="add-Anime-Award.php">Add an Anime Award!</a>
	<p></p>
	<a href="delete-Anime-Award.php">Delete an Anime Award!</a>
	<p></p>
	<a href="update-Anime-Award.php">Update Anime Award!</a>
	</div>
	<div class = "fetch2">
	<a href="add-Voice-Actor.php">Add a Voice Actor!</a>
	<p></p>
	<a href="delete-Voice-Actor.php">Delete a Voice Actor!</a>
	<p></p>
	<a href="update-Voice-Actor.php">Update Voice Actor!</a>
	<p></p>
	<a href="add-Actor-Award.php">Add an Actor Award!</a>
	<p></p>
	<a href="delete-Actor-Award.php">Delete an Actor Award!</a>
	<p></p>
	<a href="update-Actor-Award.php">Update an Actor Award!</a>
	<p></p>
	<a href="add-Actor-Awarded.php">Give an Actor an Award!</a>
	<p></p>
	<a href="delete-actor-awarded.php">Delete from Actor Awarded!</a>
	<p></p>
	<a href="add-Anime-Awarded.php">Give an Anime an Award!</a>
	<p></p>
	<a href="delete-Anime-Awarded.php">Delete from Anime Awarded!</a>
	</div>
	<div class = "fetch3">
	<a href="add-Produced.php">Assign Producer to Anime!</a>
	<p></p>
	<a href="delete-Produced.php">Delete Producer from Anime!</a>
	<p></p>
	<a href="add-Stars.php">Assign Voice Actor to Anime!</a>
	<p></p>
	<a href="delete-Stars.php">Delete Voice Actor from Anime!</a>
	<p></p>
	<a href="admin-anime-list.php">List of Animes!</a>
	<p></p>
	<a href="admin-user-list.php">List of Users!</a>
	<p></p>
	<a href="admin-producer-list.php">List of Producers!</a>
	<p></p>
	<a href="admin-anime-award-list.php">List of Anime Awards!</a>
	<p></p>
	<a href="admin-voice-actor-list.php">List of Voice Actors!</a>
	</div>
	<div class = "fetch4">
	<a href="admin-actor-award-list.php">List of Actor Awards!</a>
	<p></p>
	<a href="admin-actor-awarded-list.php">List of Actor Awarded!</a>
	<p></p>
	<a href="admin-produced-list.php">List: Produced!</a>
	<p></p>
	<a href="admin-stars-list.php">List: Stars!</a>
	<p></p>
	<a href="admin-anime-awarded-list.php">List: Anime Awarded!</a>
	<p></p>
	<a href="admin-user-list-list.php">List: User Lists!</a>
	<p></p>
	<a href="admin-rates-reviews-list.php">List: Rates/Reviews!</a>
	</div>
	<div class = "logout">
	<a href = "logout"> Log Out</a>
	</div>
</div>
</body>
</head>
</html>