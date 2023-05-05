<html>
<?php

require_once('connection.php');


global $conn;

$stmt = $conn->prepare("SELECT Release_year, Storyline, Genres, Studios, IFNULL(ROUND(AVG(rating),1), 'No Ratings Yet') as 'Average_Rating'
                        FROM animes join rates_reviews using (anime_id)
                        Where anime_id = 'DSL'");
$stmt->execute();

$stmt2 = $conn->prepare("SELECT anime_award_name as 'Award_Name', year as 'Year_Awarded'
FROM anime_award join anime_awarded using (anime_award_id) join animes using (anime_id)
WHERE anime_id = 'DSL'");

$stmt2->execute();

$stmt3 = $conn->prepare("SELECT character_voiced as 'Character', CONCAT(first_name, ' ', last_name) as 'Voice_Actor', Birthdate
FROM voice_actors join stars using (voice_actor_id) join animes using (anime_id)
WHERE anime_id = 'DSL'");

$stmt3->execute();

$stmt4 = $conn->prepare("SELECT CONCAT(first_name, ' ', last_name) as 'Name', IFNULL(Birthdate, 'Unknown') as 'Birthdate'
FROM producers join produced using (producer_id) join animes using (anime_id)
WHERE anime_id = 'DSL'");

$stmt4->execute();

$stmt5 = $conn->prepare("SELECT CONCAT(first_name, ' ', last_name) as 'Actor', Name, Year
FROM voice_actors join stars using (voice_actor_id) join animes using (anime_id) join actor_awarded using (voice_actor_id) join actor_award using (actor_award_id)
WHERE anime_id = 'DSL'");

$stmt5->execute();



?>

<style>
body{
background-color: #757C88;

}
h4 {
  font-family: papyrus, fantasy;
    font-size: 40px;    
}

h5 {
  font-family: papyrus, fantasy;
    font-size: 25px;
}

table {
border: 2px solid orange; 
padding: 5px; 
width: 76%;
text-align: center;
color: #000;
}

.awards {
border: 2px solid orange; 
padding: 5px; 
width: 30%;
text-align: left;
color: #000;
}

.voiceactors{

border: 2px solid orange; 
padding: 5px; 
width: 90%;
text-align: left;
color: #000;

}

.producers{

border: 2px solid orange; 
padding: 5px; 
width: 50%;
text-align: left;
color: #000;

}

.actorawards{

border: 2px solid orange; 
padding: 5px; 
width: 65%;
text-align: left;
color: #000;

}



.spacing {
width: 80%;
}
</style>

<table>
	<div class="container-fluid mt-3 mb-3">
		<h4>Demon Slayer</h4>
		<body>
			<tr>
    			<th>Release_Year</th>
    			<th>Storyline</th>
    			<th>Genres</th>
    			<th>Studios</th>
    			<th>Average Rating</th>
			</tr>
		</body>
	</div>

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
</table>


<table class = "awards">
	<div class="container-fluid mt-3 mb-3">
		<h5>Anime Awards</h5>
		<body>
			<tr>
    			<th class = "spacing">Name</th>
    			<th>Year</th>
			</tr>
		</body>
	</div>
	
<?php 
while ($row = $stmt2->fetch()) {
    echo "<tr>
             <td>$row[Award_Name]</td>
             <td>$row[Year_Awarded]</td>
          </tr>";
} 

?>
</table>


<table class = "voiceactors">
	<div class="container-fluid mt-3 mb-3">
		<h5>Voice Actors</h5>
		<body>
			<tr>
    			<th class = "spacing">Character</th>
    			<th>Voice Actor</th>
    			<th>Birthdate</th>
			</tr>
		</body>
	</div>
	
<?php 
while ($row = $stmt3->fetch()) {
    echo "<tr>
             <td>$row[Character]</td>
             <td>$row[Voice_Actor]</td>
             <td>$row[Birthdate]</td>
          </tr>";
} 

?>
</table>


<table class = "actorawards">
	<div class="container-fluid mt-3 mb-3">
		<h5>Voice Actor Awards</h5>
		<body>
			<tr>
    			<th class = "spacing">Voice Actor</th>
    			<th>Award</th>
    			<th>Year</th>
			</tr>
		</body>
	</div>
	
<?php 
while ($row = $stmt5->fetch()) {
    echo "<tr>
             <td>$row[Actor]</td>
             <td>$row[Name]</td>
            <td>$row[Year]</td>
          </tr>";
} 

?>
</table>



<table class = "producers">
	<div class="container-fluid mt-3 mb-3">
		<h5>Producers</h5>
		<body>
			<tr>
    			<th class = "spacing">Name</th>
    			<th>Birthdate</th>
			</tr>
		</body>
	</div>
	
<?php 
while ($row = $stmt4->fetch()) {
    echo "<tr>
             <td>$row[Name]</td>
             <td>$row[Birthdate]</td>
          </tr>";
} 

?>
</table>



<li><a href="anime-titles.php">Go Back</a></li>
<li><a href="index.php">Go Home</a></li>
<li><a href="dsl-rating.php">Leave a Rating & Review!</a></li>
</html>
