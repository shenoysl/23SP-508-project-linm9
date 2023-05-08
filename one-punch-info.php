<html>
<?php
require_once ('header.php');
require_once('loginconnection.php');


global $conn;

$stmt = $conn->prepare("SELECT Release_year, Storyline, Genres, Studios, IFNULL(ROUND(AVG(rating),1), 'No Ratings Yet') as 'Average_Rating'
                        FROM animes join rates_reviews using (anime_id)
                        Where anime_id = 'OPM'");
$stmt->execute();

$stmt2 = $conn->prepare("SELECT anime_award_name as 'Award_Name', year as 'Year_Awarded'
FROM anime_award join anime_awarded using (anime_award_id) join animes using (anime_id)
WHERE anime_id = 'OPM'");

$stmt2->execute();

$stmt3 = $conn->prepare("SELECT character_voiced as 'Character', CONCAT(first_name, ' ', last_name) as 'Voice_Actor', Birthdate
FROM voice_actors join stars using (voice_actor_id) join animes using (anime_id)
WHERE anime_id = 'OPM'");

$stmt3->execute();

$stmt4 = $conn->prepare("SELECT CONCAT(first_name, ' ', last_name) as 'Name', IFNULL(Birthdate, 'Unknown') as 'Birthdate'
FROM producers join produced using (producer_id) join animes using (anime_id)
WHERE anime_id = 'OPM'");

$stmt4->execute();


$stmt5 = $conn->prepare("SELECT IFNULL(CONCAT(first_name, ' ', last_name), 'No Awards Yet') as 'Actor', Name, Year
FROM voice_actors join stars using (voice_actor_id) join animes using (anime_id) join actor_awarded using (voice_actor_id) join actor_award using (actor_award_id)
WHERE anime_id = 'OPM'");

$stmt5->execute();

$stmt6 = $conn->prepare("SELECT user, review, rating
FROM getRatingandReview
WHERE anime_id = 'OPM'");

$stmt6->execute();




$AnimeID = 'OPM';
$username = $_SESSION['Username'];
$AnimeName = 'One Punch Man';


$stmt7 = $conn->prepare("SELECT Email FROM users WHERE Username=:Username");
$stmt7->bindValue(':Username', $_SESSION['Username']);
$stmt7->execute();

$queryResult = $stmt7->fetch();

if(!empty($queryResult))
{
    $email = $queryResult['Email'];
}
$check = $conn->prepare("SELECT Anime_name FROM user_list WHERE Email=:Email AND Anime_id=:Anime_id");
$check->bindValue(':Anime_id', $AnimeID);
$check->bindValue(':Email', $email);
$check->execute();

$checking = $check->fetch();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($checking)) {
        $stmt7 = $conn->prepare("INSERT INTO user_list (Anime_id, Anime_name, Email) VALUES (:Anime_id, :Anime_name, :Email)");
        $stmt7->bindValue(':Anime_id', $AnimeID);
        $stmt7->bindValue(':Anime_name', $AnimeName);
        $stmt7->bindValue(':Email', $email);
        $stmt7->execute();
        
        header("Location: one-punch-info.php");
    }
    else {
        echo '<div id = "reAddError">You already added it!</div>';
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
    background-image: url('photos/opmBackground.png');
    background-size: cover;
}
h4 {
    text-align: center;
    font-family: papyrus, fantasy;
    font-size: 50px;

    color: #FFF;   
}
h5 {
    font-family: papyrus, fantasy;
    font-size: 25px;
    color: #FFF;  
}
th {
    font-size: 20px;
}
table {
    text-align: center;
    box-shadow: 0 1px 20px 0 rgba(69,90,100,0.8);
    font-family: papyrus, fantasy; 
    font-size: 20px;
    color: #FFF;
    background: linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4));
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
}
table .opmInfo {
    position: fixed;
    top: 50%;
    left: 50%;
    margin-top: -50px;
    margin-left: -100px;
    padding: 10px; 
    text-align: center;
    color: #000;
}
.Awards, .ActorAwards, .Producers, .RatingAndReview {
    text-align: center;
    color: #FFF;
}
table .VoiceActors{
    padding: 10px; 
    text-align: center;
    color: #000;
}
table .ActorWards {
    padding: 10px; 
    text-align: center;
    color: #000;
}
.goBack{
    padding: 10px;
}
.goBack a, .leave a{
    color: #0d0a02;
    cursor: pointer;
    color: #000;
    text-align: center;
    background: #FFF;
    border-color: black;
    font-family: papyrus, fantasy;
    font-size: 25px;
    width: 300px;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
}
.goBack b {
    padding: 10px;
    font-family: papyrus, fantasy;
    font-size: 20px;
}
button[type="submit"] {
    position: absolute;
    top: 0.5%;
    left: 1%;
    text-align: center;
    background-color: white;
    color: black;
    border-color: black;
    border-radius: 10px;
    padding: 10px;
    font-family: papyrus, fantasy;
    font-size: 20px;  
}
</style>

<body>
<table>
	<div class="opmInfo">
		<h4>One Punch Man</h4>
			<tr>
    			<th>Release_Year</th>
    			<th>Storyline</th>
    			<th>Genres</th>
    			<th>Studios</th>
    			<th>Average Rating</th>
			</tr>
	<?php 
        while ($row = $stmt->fetch()) {
            echo "<tr>
                <td>$row[Release_year]</td>
                <td>$row[Storyline]</td>
                <td>$row[Genres]</td>
                <td>$row[Studios]</td>   
                <td>$row[Average_Rating]</td>
                </tr>";
        }
    ?>
	</div>
</table>

<h5>Anime Awards</h5>
<table>
	<div class="Awards">
		<tr>
   			<th>Name</th>
   			<th>Year</th>
		</tr>
	<?php 
        while ($row = $stmt2->fetch()) {
            echo "<tr>
                <td>$row[Award_Name]</td>
                <td>$row[Year_Awarded]</td>
                 </tr>";
        } 
    ?>
	</div>
</table>

<h5>Voice Actors</h5>
<table>
	<div class="VoiceActors">
		<tr>
   			<th>Character</th>
   			<th>Voice Actor</th>
   			<th>Birthdate</th>
   		</tr>
	<?php 
        while ($row = $stmt3->fetch()) {
            echo "<tr>
                <td>$row[Character]</td>
                <td>$row[Voice_Actor]</td>
                <td>$row[Birthdate]</td>
                </tr>";
        } 
    ?>
	</div>
</table>

<h5>Voice Actor Awards</h5>
<table>
	<div class="ActorAwards">
		<tr>
    		<th>Voice Actor</th>
    		<th>Award</th>
    		<th>Year</th>
		</tr>
	<?php 
        while ($row = $stmt5->fetch()) {
            echo "<tr>
                <td>$row[Actor]</td>
                <td>$row[Name]</td>
                <td>$row[Year]</td>
                </tr>";
        }
    ?>
	</div>
</table>

<h5>Producers</h5>
<table>
	<div class="Producers">
		<tr>
    		<th>Name</th>
    		<th>Birthdate</th>
		</tr>
	<?php 
        while ($row = $stmt4->fetch()) {
            echo "<tr>
                <td>$row[Name]</td>
                <td>$row[Birthdate]</td>
                </tr>";
        } 
    ?>
    </div>
</table>

<h5>Ratings & Reviews</h5>
<table>
	<div class="RatingAndReview">
		<tr>
    		<th>User</th>
    		<th>Review</th>
    		<th>Rating</th>
		</tr>
	<?php 
        while ($row = $stmt6->fetch()) {
            echo "<tr>
                <td>$row[user]</td>
                <td>$row[review]</td>
                <td>$row[rating]</td>
                </tr>";
        }
    ?>
</table>

<div class = "goBack">
	<a href="anime-info.php">Go Back</a>
	<b> : </b>
	<a href="loggedon">Go Home</a>
	<b> : </b>
	<a href="one-punch-man-rate-review.php">Leave a Rating & Review!</a>
</div>
<div class="container mt-3 mb-3">
	<form method="post">
		<div class="row justify-content-center">
			<div>
				<button type="submit">Add to List!</button>
			</div>
		</div>
	</form>
</div>
</body>


</html>
