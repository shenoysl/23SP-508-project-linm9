<html>
<head>
<title>List of Users List</title>
<?php require_once('header.php'); ?>
<!-- My JS libraries -->
<script src="js/list-user-list.js"></script>
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
.goBack {
    position: absolute;
    left: 1%;
    top: 80%;
    color: #0d0a02;
    cursor: pointer;
    color: #000;
    text-align: center;
    background: #FFF;
    border-color: #821DB7;
    font-family: papyrus, fantasy;
    font-size: 20px;
    width: 100px;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
}
</style>


<body>

<div class="container-fluid mt-3 mb-3">
	<h4>User Lists</h4>
	<div>
		<table id="table-user_list" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Anime_id</th>
					<th>Email</th>
					<th>Anime_name</th>
				</tr>
			</thead>
		</table>
	</div>
	<div class = "goBack">
	<a href="admin-index.php" type="goBack" class="goBack">Go Back</a>
	</div>
</div>

</body>
</html>