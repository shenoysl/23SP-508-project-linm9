<html>
<head>
<title>CMSC 508</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<?php require_once('header.php'); ?>
</head>

<?php require_once('connection.php'); ?>

<style>
header {
height: 100px;
background: rgba(0,0,0,0.7);
width: 100%;
position: fixed;
z-index: 12;
}
.logoName {
    padding-top: 40px;
    margin-left: 50px;
    font-size: 25px;
    font-family: papyrus, fantasy;
    color: #FFF;
}
.logoName a{
    color: #FFF;
}
.nav_bar {
font-family: papyrus, fantasy;
font-size: 20px;
float: right;
}
.nav_bar li {
display: inline-block;
}
.nav_bar li a {
padding: 5px;
}
.nav_bar li a:hover {
background: #959191;
color: #FFF;
border: 1px solid #000;
border-radius: 5px;
border-width: auto;
}
</style>

<body>
<header>
<div class = "logoName">
	<a>AnimDB</a>
	<div class = "nav_bar">
		<ul>
			<li><a href = "AnimeList"> Anime List</a></li>
			<li><a href = "login"> Log-in | Sign-up</a></li>
		</ul>
	</div>
</div>
</header>
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="photos/ds.jpe" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="photos/ble.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="photos/opm.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</body>
</html>