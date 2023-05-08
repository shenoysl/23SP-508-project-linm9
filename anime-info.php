<html>
<?php 
require_once ('header.php');
require_once('loginconnection.php');
?>
<head>
<title>Anime Info</title>
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
.sort {
    top: 10%;
    left: 5%;
    position: absolute;
    width: 400px;
    text-align: left;
    box-shadow: 0 1px 20px 0 rgba(69,90,100,0.8);
    font-family: papyrus, fantasy; 
    font-size: 30px;
    display: inline-block;
    color: #FFF;
    background: linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4));
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
}
.sort a {
    font-family: papyrus, fantasy; 
    font-size: 20px;
    color: #FFF;
}
.goBack {
    position: absolute;
    text-align: center;
    top: 40%;
    left: 150%;
    width: 300px;
    position: absolute;
    box-shadow: 0 1px 20px 0 rgba(69,90,100,0.8);
    background: linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4));
}
.goBack a {
    color: #0d0a02;
    cursor: pointer;
    color: #000;
    text-align: center;
    background: #CBFC96;
    border-color: #821DB7;
    font-family: papyrus, fantasy;
    font-size: 25px;
    width: 200px;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
}
.goBack b {
    font-size: 20px;
}

</style>
<body>
<h4>Anime Info</h4>
<div class = "sort">
<p>Links:</p>
	<a href="attack-on-titan-info.php">Attack on Titan Info!</a>
	<p></p>
	<a href="demon-slayer-info.php">Demon Slayer Info!</a>
	<p></p>
	<a href="one-punch-info.php">One Punch Man Info!</a>
	<p></p>
	<a href="naruto-info.php">Naruto Info!</a>
	<p></p>
	<a href="tensura-info.php">That Time I Got Reincarnated as a Slime Info!</a>
	<p></p>
	<a href="bleach-info.php">Bleach Info!</a>
	<p></p>
	<a href="jujutsu-kaisen-info.php">Jujutsu Kaisen Info!</a>
	<p></p>
	<a href="death-note-info.php">Death Note Info!</a>
	<p></p>
	<a href="vinland-saga-info.php">Vinland Saga Info!</a>
	<p></p>
	<a href="hunter-x-hunter-info.php">Hunter x Hunter Info!</a>
	
	<p></p>
	<div class = "goBack">
		<a href="anime-titles.php">Go Back</a>
		<b> OR </b>
		<a href="loggedon">Go Home</a>
	</div>
</div>
</body>
</head>
</html>