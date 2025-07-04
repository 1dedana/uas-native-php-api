<?php
require_once '../config/db.php';
require_once '../middleware/verify_token.php';

$result = $conn->query("SELECT * FROM students");
$data = [];

while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data);
?>
