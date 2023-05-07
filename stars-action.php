<?php
require_once ('loginconnection.php');

global $conn;

function listStars()
{
    global $conn;
    
    $sqlQuery = "SELECT * FROM stars";
    $stmt = $conn->prepare($sqlQuery);
    $stmt->execute();
    
    $numberRows = $stmt->rowCount();
    
    $dataTable = array();
    
    while ($sqlRow = $stmt->fetch()) {
        $dataRow = array();
        
        $dataRow[] = $sqlRow['Anime_id'];
        $dataRow[] = $sqlRow['Voice_actor_id'];
        $dataTable[] = $dataRow;
    }
    
    $output = array(
        "recordsTotal" => $numberRows,
        "recordsFiltered" => $numberRows,
        "data" => $dataTable
    );
    
    echo json_encode($output);
}







if(!empty($_POST['action']) && $_POST['action'] == 'listStars') {
    listStars();
}

