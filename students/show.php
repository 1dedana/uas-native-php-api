<?php
require_once '../config/db.php';
require_once '../middleware/verify_token.php';

$id = $_GET['id'] ?? 0;
$result = $conn->query("SELECT * FROM students WHERE id=$id");
echo json_encode($result->fetch_assoc());
?>
