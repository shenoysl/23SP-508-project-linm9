<?php 

// Show all employees on the employees table

require_once('connection.php');


global $conn;

$stmt = $conn->prepare("SELECT anime_name as 'Title', Release_year, Storyline, Genres, Studios
                        FROM animes
                        Where anime_id = 'Naruto'");
$stmt->execute();

?>

<table style='border: solid 1px black;'>
<thead>
	<tr>
    	<th>Title</th>
    	<th>Release_Year</th>
    	<th>Storyline</th>
    	<th>Genres</th>
    	<th>Studios</th>
	</tr>
</thead>
<tbody>
<li><a href="naruto-producers.php">Producers</a></li>
<li><a href="naruto-voice-actors.php">Voice Actors</a></li>

<?php 
while ($row = $stmt->fetch()) {
    echo "<tr>
             <td>$row[Title]</td>
             <td>$row[Release_year]</td>
             <td>$row[Storyline]</td>
             <td>$row[Genres]</td>
            <td>$row[Studios]</td>   
          </tr>";
}
?>

</tbody>
</table>