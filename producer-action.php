<?php
require_once ('loginconnection.php');

global $conn;

function listProducers()
{
    global $conn;
    
    $sqlQuery = "SELECT * FROM producers";
    $stmt = $conn->prepare($sqlQuery);
    $stmt->execute();
    
    $numberRows = $stmt->rowCount();
    
    $dataTable = array();
    
    while ($sqlRow = $stmt->fetch()) {
        $dataRow = array();
        
        $dataRow[] = $sqlRow['Producer_id'];
        $dataRow[] = $sqlRow['First_name'];
        $dataRow[] = $sqlRow['Last_name'];
        $dataRow[] = $sqlRow['Birthdate'];
        $dataTable[] = $dataRow;
    }
    
    $output = array(
        "recordsTotal" => $numberRows,
        "recordsFiltered" => $numberRows,
        "data" => $dataTable
    );
    
    echo json_encode($output);
}







if(!empty($_POST['action']) && $_POST['action'] == 'listProducers') {
    listProducers();
}




