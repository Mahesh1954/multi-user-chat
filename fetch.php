<?php
include 'db.php';

$result = $conn->query("
  SELECT m.message, u.username, m.timestamp
  FROM messages m
  JOIN users u ON m.user_id = u.id
  ORDER BY m.id DESC LIMIT 50
");

$chat = "";
while ($row = $result->fetch_assoc()) {
  $user = htmlspecialchars($row['username']);
  $msg = htmlspecialchars($row['message']);
  $time = $row['timestamp'];
  $chat = "<p><b>$user:</b> $msg <small>($time)</small></p>" . $chat;
}

echo $chat;
?>