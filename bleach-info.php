<?php

// Show all employees on the employees table

require_once('connection.php');


global $conn;

$stmt = $conn->prepare("SELECT Release_year, Storyline, Genres, Studios
                        FROM animes
                        Where anime_id = 'Bleach'");
$stmt->execute();

?>

<body>
<div class="container-fluid mt-3 mb-3">
	<h4>Bleach</h4>
	<div>
<table style='border: solid 2px red;'>
<thead>
	<tr>
    	<th>Release_Year</th>
    	<th>Storyline</th>
    	<th>Genres</th>
    	<th>Studios</th>
	</tr>
	</thead>
	<tbody>
	<li><a href="bleach-producers.php">Producers</a></li>
<li><a href="bleach-voice-actors.php">Voice Actors</a></li>
</div>
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