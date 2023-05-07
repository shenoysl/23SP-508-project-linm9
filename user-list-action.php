<?php
require_once ('loginconnection.php');

global $conn;

function listUserList()
{
    global $conn;
    
    $sqlQuery = "SELECT * FROM user_list";
    $stmt = $conn->prepare($sqlQuery);
    $stmt->execute();
    
    $numberRows = $stmt->rowCount();
    
    $dataTable = array();
    
    while ($sqlRow = $stmt->fetch()) {
        $dataRow = array();
        
        $dataRow[] = $sqlRow['Anime_id'];
        $dataRow[] = $sqlRow['Email'];
        $dataRow[] = $sqlRow['Anime_name'];
        $dataTable[] = $dataRow;
    }
    
    $output = array(
        "recordsTotal" => $numberRows,
        "recordsFiltered" => $numberRows,
        "data" => $dataTable
    );
    
    echo json_encode($output);
}







if(!empty($_POST['action']) && $_POST['action'] == 'listUserList') {
    listUserList();
}

