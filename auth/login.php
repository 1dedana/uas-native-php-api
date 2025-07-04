<?php
require_once '../config/db.php';

$data = json_decode(file_get_contents("php://input"));

$email = $data->email ?? '';
$password = $data->password ?? '';

$query = $conn->prepare("SELECT * FROM users WHERE email=? LIMIT 1");
$query->bind_param("s", $email);
$query->execute();
$result = $query->get_result();

if ($user = $result->fetch_assoc()) {
    if (password_verify($password, $user['password'])) {
        $token = bin2hex(random_bytes(16));
        $conn->query("UPDATE users SET token='$token' WHERE id={$user['id']}");
        echo json_encode(["token" => $token]);
    } else {
        http_response_code(401);
        echo json_encode(["message" => "Password salah"]);
    }
} else {
    http_response_code(401);
    echo json_encode(["message" => "User tidak ditemukan"]);
}
?>
