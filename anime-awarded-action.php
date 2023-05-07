<?php
require_once ('loginconnection.php');

global $conn;

function listAnimeAwarded()
{
    global $conn;
    
    $sqlQuery = "SELECT * FROM anime_awarded";
    $stmt = $conn->prepare($sqlQuery);
    $stmt->execute();
    
    $numberRows = $stmt->rowCount();
    
    $dataTable = array();
    
    while ($sqlRow = $stmt->fetch()) {
        $dataRow = array();
        
        $dataRow[] = $sqlRow['Anime_id'];
        $dataRow[] = $sqlRow['Anime_award_id'];
        $dataRow[] = $sqlRow['Year'];
        $dataTable[] = $dataRow;
    }
    
    $output = array(
        "recordsTotal" => $numberRows,
        "recordsFiltered" => $numberRows,
        "data" => $dataTable
    );
    
    echo json_encode($output);
}







if(!empty($_POST['action']) && $_POST['action'] == 'listAnimeAwarded') {
    listAnimeAwarded();
}

