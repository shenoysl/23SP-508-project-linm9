<html>
<head>
<title>Anime Award List</title>
<?php require_once('header.php'); ?>
<!-- My JS libraries -->
<script src="js/list-actor-awarded.js"></script>
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
	<h4>Actor Awarded</h4>
	<div>
		<table id="table-actor_awarded" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Voice_actor_id</th>
					<th>Actor_award_id</th>
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