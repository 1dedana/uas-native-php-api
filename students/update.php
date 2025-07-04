<?php
require_once '../config/db.php';
require_once '../middleware/verify_token.php';

$id = $_GET['id'] ?? 0;
$data = json_decode(file_get_contents("php://input"), true);

$stmt = $conn->prepare("UPDATE students SET name=?, email=?, nim=?, major=? WHERE id=?");
$stmt->bind_param("ssssi", $data['name'], $data['email'], $data['nim'], $data['major'], $id);
$stmt->execute();

echo json_encode(["message" => "Data mahasiswa diperbarui"]);
?>
