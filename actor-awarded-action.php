<?php
require_once ('loginconnection.php');

global $conn;

function listActorAwarded()
{
    global $conn;
    
    $sqlQuery = "SELECT * FROM actor_awarded";
    $stmt = $conn->prepare($sqlQuery);
    $stmt->execute();
    
    $numberRows = $stmt->rowCount();
    
    $dataTable = array();
    
    while ($sqlRow = $stmt->fetch()) {
        $dataRow = array();
        
        $dataRow[] = $sqlRow['Voice_actor_id'];
        $dataRow[] = $sqlRow['Actor_award_id'];
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







if(!empty($_POST['action']) && $_POST['action'] == 'listActorAwarded') {
    listActorAwarded();
}

