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
					<th>Average Rating</th>
				</tr>
			</thead>
		</table>
	</div>
</div>

</body>
</html>