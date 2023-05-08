<?php
require_once ('loginconnection.php');

global $conn;

function listAnimeAwards()
{
    global $conn;
    
    $sqlQuery = "SELECT * FROM anime_award";
    $stmt = $conn->prepare($sqlQuery);
    $stmt->execute();
    
    $numberRows = $stmt->rowCount();
    
    $dataTable = array();
    
    while ($sqlRow = $stmt->fetch()) {
        $dataRow = array();
        
        $dataRow[] = $sqlRow['Anime_award_id'];
        $dataRow[] = $sqlRow['Anime_award_name'];
        $dataTable[] = $dataRow;
    }
    
    $output = array(
        "recordsTotal" => $numberRows,
        "recordsFiltered" => $numberRows,
        "data" => $dataTable
    );
    
    echo json_encode($output);
}







if(!empty($_POST['action']) && $_POST['action'] == 'listAnimeAwards') {
    listAnimeAwards();
}




