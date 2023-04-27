<?php 

// Show all employees on the employees table

require_once('connection.php');


global $conn;

$stmt = $conn->prepare("SELECT Release_year, Storyline, Genres, Studios
                        FROM animes
                        Where anime_id = 'DSL'");
$stmt->execute();

?>
<style>
h4 {
  font-family: papyrus, fantasy;
    font-size: 30px;
}
</style>
<body>
<div class="container-fluid mt-3 mb-3">
	<h4>Demon Slayer</h4>
<table style='border: solid 2px green;'>
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

<li><a href="demon-slayer-producers.php">Producers</a></li>
<li><a href="demon-slayer-voice-actors.php">Voice Actors</a></li>
