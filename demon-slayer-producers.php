<?php 

// Show all employees on the employees table

require_once('connection.php');


global $conn;

$stmt = $conn->prepare("SELECT CONCAT(first_name, ' ', last_name) as 'Name', IFNULL(birthdate, 'Unknown') as 'Birthdate'
FROM animes join produced using (anime_id) join producers using (producer_id)
WHERE anime_id = 'DSL'");
$stmt->execute();

?>

<table style='border: solid 1px black;'>
<thead>
	<tr>
    	<th>Name</th>
    	<th>Birthdate</th>
	</tr>
</thead>
<tbody>


<?php 
while ($row = $stmt->fetch()) {
    echo "<tr>
             <td>$row[Name]</td>
             <td>$row[Birthdate]</td> 
          </tr>";
}
?>

</tbody>
</table>