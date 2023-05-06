<?php
require_once ('loginconnection.php');

global $conn;

function listAnimes()
{
    global $conn;
    
    $sqlQuery = "SELECT Anime_name as 'Title', 
                        IFNULL(ROUND(AVG(rating),1), 'No Ratings Yet') as 'Average Rating'
                        FROM animes left join rates_reviews using (Anime_id)
                        GROUP BY Anime_name
                        ORDER BY AVG(rating) DESC";
    
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

