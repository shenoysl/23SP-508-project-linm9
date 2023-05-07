<?php
require_once ('loginconnection.php');

global $conn;

function listRatesReviews()
{
    global $conn;
    
    $sqlQuery = "SELECT * FROM rates_reviews";
    $stmt = $conn->prepare($sqlQuery);
    $stmt->execute();
    
    $numberRows = $stmt->rowCount();
    
    $dataTable = array();
    
    while ($sqlRow = $stmt->fetch()) {
        $dataRow = array();
        
        $dataRow[] = $sqlRow['Rating'];
        $dataRow[] = $sqlRow['Review'];
        $dataRow[] = $sqlRow['Anime_id'];
        $dataRow[] = $sqlRow['Email'];
        $dataTable[] = $dataRow;
    }
    
    $output = array(
        "recordsTotal" => $numberRows,
        "recordsFiltered" => $numberRows,
        "data" => $dataTable
    );
    
    echo json_encode($output);
}







if(!empty($_POST['action']) && $_POST['action'] == 'listRatesReviews') {
    listRatesReviews();
}




