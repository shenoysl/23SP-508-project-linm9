<html>
<head>
<title>CMSC 508</title>
<?php require_once('header.php'); ?>
</head>

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
.carousel-item img{
-webkit-background-size: cover;
background-size: cover;
background-position: center center;
background-repeat: no-repeat;
width: auto;
height: 100vh;
}
.box {
background: rgba(0,0,0,0.5);
width: 100%;
padding: 25px;
}
.box p {
text-align: justify;
}
</style>

<body>
<header>
<div class = "logoName">
	<a>AnimDB</a>
	<div class = "nav_bar">
		<ul>
			<li><a href = "anime-titles"> Anime List</a></li>
			<li><a href = "login"> Log-in | Sign-up</a></li>
			<li><a href = "rating-form"> Rate</a></li>
		</ul>
	</div>
</div>
</header>
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="photos/ds.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      	<div class = "box">
        <h5>Demon Slayer</h5>
        <p>A family is attacked by demons and only two members survive - Tanjiro and his sister Nezuko, who is turning into a demon slowly. Tanjiro sets out to become a demon slayer to avenge his family and cure his sister.</p>
      	</div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="photos/ble.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <div class = "box">
        <h5>Bleach</h5>
        <p>High school student Ichigo Kurosaki, who has the ability to see ghosts, gains soul reaper powers from Rukia Kuchiki and sets out to save the world from "Hollows".</p>
      	</div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="photos/opm.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <div class = "box">
        <h5>One Punch Man</h5>
        <p>The story of Saitama, a hero that does it just for fun & can defeat his enemies with a single punch.</p>
      	</div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="photos/aot.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <div class = "box">
        <h5>Attack On Titan</h5>
        <p>After his hometown is destroyed and his mother is killed, young Eren Jaeger vows to cleanse the earth of the giant humanoid Titans that have brought humanity to the brink of extinction.</p>
      	</div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="photos/naruto.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <div class = "box">
        <h5>Naruto</h5>
        <p>It tells the story of Naruto Uzumaki, a young ninja who seeks recognition from his peers and dreams of becoming the Hokage, the leader of his village.</p>
      	</div>
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