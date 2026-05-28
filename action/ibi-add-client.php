<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mysqli = new mysqli('localhost', 'root', '', 'ascc');

    if ($mysqli->connect_errno != 0) {
        die($mysqli->connect_error);
    }

    $data = file_get_contents("php://input");
    $client = json_decode($data, true);

    $firstName = htmlspecialchars($client['firstName']);
    $middleName = htmlspecialchars($client['middleName']);
    $lastName = htmlspecialchars($client['lastName']);
    $branch = htmlspecialchars($client['branch']);
    $status = htmlspecialchars($client['status']);

    $sql = "INSERT INTO `interbranch_inquiry` (`firstname`, `middlename`, `lastname`, `branch`, `status`) 
                                        VALUES ('$firstName', '$middleName', '$lastName', '$branch', '$status')";
    $result = $mysqli->query($sql);

    if (!$result) {
        echo json_encode('error');
        exit;
    }

    echo json_encode($client);

    exit;
}
