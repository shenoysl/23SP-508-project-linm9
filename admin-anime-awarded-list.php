<html>
<head>
<title>Anime Awarded List</title>
<?php require_once('header.php'); ?>
<!-- My JS libraries -->
<script src="js/list-anime-awarded.js"></script>
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
	<h4>Anime Awarded</h4>
	<div>
		<table id="table-anime_awarded" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Anime_id</th>
					<th>Anime_award_id</th>
					<th>Year</th>
				</tr>
			</thead>
		</table>
		<br>
		<br>
		<br>
		<li><a href="admin-index.php">Go Home</a></li>
	</div>
</div>

</body>
</html>