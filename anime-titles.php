<html>
<head>
<title>Anime List</title>
<?php require_once('header.php'); ?>
<!-- My JS libraries -->
<script src="js/anime-titles.js"></script>
</head>

<?php require_once('connection.php'); ?>

<body>

<div class="container-fluid mt-3 mb-3">
	<h4>Animes</h4>
	<div>
		<table id="table-animes" class="table table-bordered table-striped">
			<thead>
				<tr>
					
					<th>Title</th>
					<li><a href="attack-on-titan-info.php">Attack on Titan Info!</a></li>
					<li><a href="demon-slayer-info.php">Demon Slayer Info!</a></li>
					<li><a href="one-punch-info.php">One Punch Man Info!</a></li>
					<li><a href="naruto-info.php">Naruto Info!</a></li>
					<li><a href="tensura-info.php">That Time I Got Reincarnated as a Slime Info!</a></li>
					<li><a href="bleach-info.php">Bleach Info!</a></li>
					<th>Average Rating</th>
				</tr>
			</thead>
		</table>
	</div>
</div>

</body>
</html>