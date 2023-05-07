<?php
require_once ('loginconnection.php');

global $conn;

function listAnimes()
{
    global $conn;
    
    $sqlQuery = "SELECT * FROM animes";
    $stmt = $conn->prepare($sqlQuery);
    $stmt->execute();
    
    $numberRows = $stmt->rowCount();
    
    $dataTable = array();
    
    while ($sqlRow = $stmt->fetch()) {
        $dataRow = array();
        
        $dataRow[] = $sqlRow['Anime_id'];
        $dataRow[] = $sqlRow['Anime_name'];
        $dataRow[] = $sqlRow['Release_year'];
        $dataRow[] = $sqlRow['Storyline'];
        $dataRow[] = $sqlRow['Genres'];
        $dataRow[] = $sqlRow['Studios'];
        $dataTable[] = $dataRow;
    }
    
    $output = array(
        "recordsTotal" => $numberRows,
        "recordsFiltered" => $numberRows,
        "data" => $dataTable
    );
    
    echo json_encode($output);
}

function addAnime()
{
    global $conn;
    
    $sqlQuery = "INSERT INTO animes
                 (Anime_id, Anime_name, Release_year, Storyline, Genres, Studios)
                 VALUES
                 (:Anime_id, :Anime_name, :Release_year, :Storyline, :Genres, :Studios)";
    
    $stmt = $conn->prepare($sqlQuery);
    $stmt->bindValue(':Anime_id', $_POST["Anime_id"]);
    $stmt->bindValue(':Anime_name', $_POST["Anime_name"]);
    $stmt->bindValue(':Release_year', $_POST["Release_year"]);
    $stmt->bindValue(':Storyline', $_POST["Storyline"]);
    $stmt->bindValue(':Genres', $_POST["Genres"]);
    $stmt->bindValue(':Studios', $_POST["Studios"]);
    $stmt->execute();
}

function deleteAnime()
{
    global $conn;
    
    if ($_POST["Anime_id"]) {
        
        $sqlQuery = "DELETE FROM anime_awarded WHERE Anime_id = :Anime_id";
        
        $stmt = $conn->prepare($sqlQuery);
        $stmt->bindValue(':Anime_id', $_POST["Anime_id"]);
        $stmt->execute();
        
        
        
        $sqlQuery = "DELETE FROM produced WHERE Anime_id = :Anime_id";
        
        $stmt = $conn->prepare($sqlQuery);
        $stmt->bindValue(':Anime_id', $_POST["Anime_id"]);
        $stmt->execute();
        
        
        $sqlQuery = "DELETE FROM rates_reviews WHERE Anime_id = :Anime_id";
        
        $stmt = $conn->prepare($sqlQuery);
        $stmt->bindValue(':Anime_id', $_POST["Anime_id"]);
        $stmt->execute();
        
        
        $sqlQuery = "DELETE FROM stars WHERE Anime_id = :Anime_id";
        
        $stmt = $conn->prepare($sqlQuery);
        $stmt->bindValue(':Anime_id', $_POST["Anime_id"]);
        $stmt->execute();
        
        
        $sqlQuery = "DELETE FROM user_list WHERE Anime_id = :Anime_id";
        
        $stmt = $conn->prepare($sqlQuery);
        $stmt->bindValue(':Anime_id', $_POST["Anime_id"]);
        $stmt->execute();
        
    }
}

function updateAnime()
{
    global $conn;
    
    if ($_POST['ID']) {
        
        $sqlQuery = "UPDATE animes
                        SET
                        Anime_id = :Anime_id,
                        Anime_name = :Anime_name,
                        Release_year = :Release_year,
                        Storyline = :Storyline,
                        Genres = :Genres,
                        Studios = :Studios,
                    WHERE Anime_id = :Anime_id";
        
        $stmt = $conn->prepare($sqlQuery);
        $stmt->bindValue(':Anime_id', $_POST["Anime_id"]);
        $stmt->bindValue(':Anime_name', $_POST["Anime_name"]);
        $stmt->bindValue(':Release_year', $_POST["Release_year"]);
        $stmt->bindValue(':Storyline', $_POST["Storyline"]);
        $stmt->bindValue(':Genres', $_POST["Genres"]);
        $stmt->bindValue(':Studios', $_POST["Studios"]);
        $stmt->execute();
    }
}





if(!empty($_POST['action']) && $_POST['action'] == 'listAnimes') {
    listAnimes();
}

if(!empty($_POST['action']) && $_POST['action'] == 'addAnime') {
    addAnime();
}

if(!empty($_POST['action']) && $_POST['action'] == 'deleteAnime') {
    deleteAnime();
}

if(!empty($_POST['action']) && $_POST['action'] == 'updateAnime') {
    updateAnime();
}


