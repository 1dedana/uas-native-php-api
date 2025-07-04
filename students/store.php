<?php
require_once '../config/db.php';
require_once '../middleware/verify_token.php';

$data = json_decode(file_get_contents("php://input"), true);

$stmt = $conn->prepare("INSERT INTO students (name, email, nim, major) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $data['name'], $data['email'], $data['nim'], $data['major']);
$stmt->execute();

echo json_encode(["message" => "Mahasiswa ditambahkan"]);
?>
