<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    try {
        require_once '../includes/dbhandler.inc.php';
        
        $data = file_get_contents("php://input");
        $client = json_decode($data, true);

        $firstName = htmlspecialchars($client['firstName']);
        $middleName = htmlspecialchars($client['middleName']);
        $lastName = htmlspecialchars($client['lastName']);
        $branch = htmlspecialchars($client['branch']);
        $status = htmlspecialchars($client['status']);

        $sql = "INSERT INTO `interbranch_inquiry` (`firstname`, `middlename`, `lastname`, `branch`, `status`) 
                                            VALUES (:firstName, :middleName, :lastName, :branch, :status)";
        // prepare the sql query
        $stmt = $conn->prepare($sql);
        // bind parameters
        $stmt->bindParam(':firstName', $firstName, PDO::PARAM_STR);
        $stmt->bindParam(':middleName', $middleName, PDO::PARAM_STR);
        $stmt->bindParam(':lastName', $lastName, PDO::PARAM_STR);
        $stmt->bindParam(':branch', $branch, PDO::PARAM_STR);
        $stmt->bindParam(':status', $status, PDO::PARAM_STR);

        // execute query
        $stmt->execute();

        // return client details
        echo json_encode($client);
        // exit db connection
        exit;
    
    } catch(PDOException $e) {
        echo json_encode('Error: ' . $e->getMessage());
    }
}
