<?php
require_once '../config/db.php';
require_once '../middleware/verify_token.php';

$id = $_GET['id'] ?? 0;
$conn->query("DELETE FROM students WHERE id=$id");

echo json_encode(["message" => "Data mahasiswa dihapus"]);
?>
