<html>
<head>
<title>Producer List</title>
<?php require_once('header.php'); ?>
<!-- My JS libraries -->
<script src="js/list-voice-actors.js"></script>
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
	<h4>Voice Actors</h4>
	<div>
		<table id="table-actors" class="table table-bordered table-striped">
			<thead>
				<tr>
					
					<th>Voice_actor_id</th>
					<th>Character_voiced</th>
					<th>First_name</th>
					<th>Last_name</th>
					<th>Birthdate</th>
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