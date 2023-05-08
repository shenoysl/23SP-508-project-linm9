<?php
require_once ('loginconnection.php');

global $conn;

function listActorAwards()
{
    global $conn;
    
    $sqlQuery = "SELECT * FROM actor_award";
    $stmt = $conn->prepare($sqlQuery);
    $stmt->execute();
    
    $numberRows = $stmt->rowCount();
    
    $dataTable = array();
    
    while ($sqlRow = $stmt->fetch()) {
        $dataRow = array();
        
        $dataRow[] = $sqlRow['Actor_award_id'];
        $dataRow[] = $sqlRow['Name'];
        $dataTable[] = $dataRow;
    }
    
    $output = array(
        "recordsTotal" => $numberRows,
        "recordsFiltered" => $numberRows,
        "data" => $dataTable
    );
    
    echo json_encode($output);
}







if(!empty($_POST['action']) && $_POST['action'] == 'listActorAwards') {
    listActorAwards();
}

