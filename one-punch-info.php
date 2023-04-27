<?php

require_once('connection.php');


global $conn;

$stmt = $conn->prepare("SELECT Release_year, Storyline, Genres, Studios
                        FROM animes
                        Where anime_id = 'OPM'");
$stmt->execute();

$stmt2 = $conn->prepare("SELECT anime_award_name as 'Award_Name', year as 'Year_Awarded'
FROM anime_award join anime_awarded using (anime_award_id) join animes using (anime_id)
WHERE anime_id = 'OPM'");

$stmt2->execute();

?>

<style>
h4 {
  font-family: papyrus, fantasy;
    font-size: 30px;
}

h5 {
  font-family: papyrus, fantasy;
    font-size: 25px;
}
</style>

<body>
<div class="container-fluid mt-3 mb-3">
	<h4>One Punch Man</h4>
<table style='border: 2px solid orange; padding: 10px; content: 15px;'>
<thead>
	<tr>
    	<th>Release_Year</th>
    	<th>Storyline</th>
    	<th>Genres</th>
    	<th>Studios</th>
	</tr>
	</thead>
	<tbody>
</div>
</body>
</html>




<?php 
while ($row = $stmt->fetch()) {
    echo "<tr>
             <td>$row[Release_year]</td>
             <td>$row[Storyline]</td>
             <td>$row[Genres]</td>
            <td>$row[Studios]</td>   
          </tr>";
}

?>

</tbody>
</table>

<body>
<div class="container-fluid mt-3 mb-3">
	<h5>Awards</h5>

<table style='border: solid 2px orange;'>
<thead>
	<tr>
    	<th>Name</th>
    	<th>Year</th>
	</tr>
	</thead>
	<tbody>
</div>
</body>
</html>
<?php 
while ($row = $stmt2->fetch()) {
    echo "<tr>
             <td>$row[Award_Name]</td>
             <td>$row[Year_Awarded]</td>
          </tr>";
} 

?>

</tbody>
</table>

<li><a href="one-punch-producers.php">Producers</a></li>
<li><a href="one-punch-voice-actors.php">Voice Actors</a></li>
