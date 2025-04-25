<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $msg = trim($_POST['message']);

    if (!empty($msg)) {
        $stmt = $conn->prepare("INSERT INTO messages (user_id, message) VALUES (?, ?)");
        $stmt->bind_param("is", $user_id, $msg);
        $stmt->execute();
    }
}
?>