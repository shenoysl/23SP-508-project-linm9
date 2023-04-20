<?php
require_once ('connection.php');

global $conn;

function listAnimes()
{
    global $conn;
    
    $sqlQuery = "SELECT Anime_name as 'Title', 
                        AVG(rating) as 'Average Rating'
                        FROM animes join rates_reviews using (Anime_id)
                        GROUP BY Anime_name";
    
    $stmt = $conn->prepare($sqlQuery);
    $stmt->execute();
    
    $numberRows = $stmt->rowCount();
    
    $dataTable = array();
    
    while ($sqlRow = $stmt->fetch()) {
        $dataRow = array();
        
        $dataRow[] = $sqlRow['Title'];
        $dataRow[] = $sqlRow['Average Rating'];
        $dataTable[] = $dataRow;
    }
    
    $output = array(
        "recordsTotal" => $numberRows,
        "recordsFiltered" => $numberRows,
        "data" => $dataTable
    );
    
    echo json_encode($output);
}


if(!empty($_POST['action']) && $_POST['action'] == 'listAnimes') {
    listAnimes();
}

if(!empty($_POST['action']) && $_POST['action'] == 'listAnimes') {
    listAnimes();
}

?>
