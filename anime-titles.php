<html>
<head>
<title>Anime List</title>
<?php require_once('header.php'); ?>
<!-- My JS libraries -->
<script src="js/anime-titles.js"></script>
</head>

<?php require_once('connection.php'); ?>

<style>

h4 {
  font-family: papyrus, fantasy;
    font-size: 40px;    
}

h5 {
  font-family: papyrus, fantasy;
    font-size: 30px;
}
</style>


<body>

<div class="container-fluid mt-3 mb-3">
	<h4>Animes</h4>
	<div>
		<table id="table-animes" class="table table-bordered table-striped">
			<thead>
				<tr>
					
					<th>Title</th>
					<li><a href="index.php">Go Home</a></li>
					<th>Average Rating</th>
				</tr>
			</thead>
		</table>
		<br>
		<br>
		<br>
		<h4>Want to learn more about these Animes?</h4>
		<li><a href="anime-info.php">Click Here!</a></li>
	</div>
</div>

</body>
</html>