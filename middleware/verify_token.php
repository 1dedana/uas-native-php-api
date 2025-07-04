<?php
$headers = getallheaders();
$token = $headers['Authorization'] ?? '';

if (!$token) {
    http_response_code(401);
    exit(json_encode(["message" => "Token tidak ditemukan"]));
}

$query = $conn->prepare("SELECT * FROM users WHERE token=? LIMIT 1");
$query->bind_param("s", $token);
$query->execute();
$result = $query->get_result();
$user = $result->fetch_assoc();

if (!$user) {
    http_response_code(401);
    exit(json_encode(["message" => "Token tidak valid"]));
}
?>
