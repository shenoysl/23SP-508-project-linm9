<?php
require_once ('loginconnection.php');

global $conn;

function listUsers()
{
    global $conn;
    
    $sqlQuery = "SELECT * FROM users";
    $stmt = $conn->prepare($sqlQuery);
    $stmt->execute();
    
    $numberRows = $stmt->rowCount();
    
    $dataTable = array();
    
    while ($sqlRow = $stmt->fetch()) {
        $dataRow = array();
        
        $dataRow[] = $sqlRow['Email'];
        $dataRow[] = $sqlRow['Username'];
        $dataRow[] = $sqlRow['Password'];
        $dataRow[] = $sqlRow['user_type'];
        $dataTable[] = $dataRow;
    }
    
    $output = array(
        "recordsTotal" => $numberRows,
        "recordsFiltered" => $numberRows,
        "data" => $dataTable
    );
    
    echo json_encode($output);
}







if(!empty($_POST['action']) && $_POST['action'] == 'listUsers') {
    listUsers();
}




