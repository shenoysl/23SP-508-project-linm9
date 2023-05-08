<html>
<head>
<title>Anime List</title>
<?php require_once('header.php'); ?>
<!-- My JS libraries -->
<script src="js/anime-titles.js"></script>
</head>

<?php require_once('loginconnection.php'); 
$sqlQuery = "SELECT Anime_name as 'Title',
                        IFNULL(ROUND(AVG(rating),1), 'No Ratings Yet') as 'Average Rating'
                        FROM animes left join rates_reviews using (Anime_id)
                        GROUP BY Anime_name
                        ORDER BY AVG(rating) DESC";
$stmt = $conn->prepare($sqlQuery);
$stmt->execute();

$sqlQuery2 = "SELECT Anime_name as 'Title',
                        IFNULL(ROUND(AVG(rating),1), 'No Ratings Yet') as 'Average Rating'
                        FROM animes left join rates_reviews using (Anime_id)
                        GROUP BY Anime_name
                        ORDER BY AVG(rating) DESC";
$stmt2 = $conn->prepare($sqlQuery2);
$stmt2->execute();
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
.fetch {
    top: 12%;
    left: 2%;
    position: absolute;
    width: 400px;
    text-align: center;
    box-shadow: 0 1px 20px 0 rgba(69,90,100,0.8);
    font-family: papyrus, fantasy; 
    font-size: 25px;
    display: inline-block;
    color: #FFF;
    background: linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4));
}
.fetch2 {
    top: 12%;
    left: 28%;
    position: absolute;
    width: 400px;
    text-align: center;
    box-shadow: 0 1px 20px 0 rgba(69,90,100,0.8);
    font-family: papyrus, fantasy; 
    font-size: 28px;
    display: inline-block;
    color: #FFF;
    background: linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4));
}
.clickhere {
    position: absolute;
    text-align: center;
    top: 35%;
    left: 55%;
    position: absolute;
    width: 600px;
    background: linear-gradient(rgba(0, 0, 0, 0.3),rgba(0, 0, 0, 0.3));
    box-shadow: 0 1px 20px 0 rgba(69,90,100,0.8)
}
.clickhere h4 {
    color: #FFF;
    font-size: 50px;
}
.clickhere a {
    color: #0d0a02;
    cursor: pointer;
    color: #000;
    text-align: center;
    background: #CBFC96;
    border-color: #821DB7;
    font-family: papyrus, fantasy;
    font-size: 25px;
    width: 70px;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
}
.clickhere b {
    font-family: papyrus, fantasy;
    font-size: 15px;
}
</style>


<body>

<div class="container-fluid mt-3 mb-3">
	<h4>Anime Titles</h4>
	<div class = "fetch">
	<h3>Anime:</h3>
		<?php 
		while($row = $stmt->fetch()) {
		    echo $row['Title']. "<p></p>";
		}
		?>
	</div>
	<div class = "fetch2">
	<h3>Rating:</h3>
	<?php 
		while($row2 = $stmt2->fetch()) {
		    echo $row2['Average Rating']. "<p></p>";
		}
		?>
	</div>
	<div class = "clickhere">
		<h4>Want to learn more about these Anime?</h4>
			<a href="anime-info.php">Click Here!</a>
			<b> OR </b>
			<a href="loggedon">Go Back</a>
		</div>
</div>

</body>
</html>
