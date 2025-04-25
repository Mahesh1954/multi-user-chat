<?php
include 'db.php';
if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Multi-User Chat</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="chat-container">
    <h3>Welcome, <?= htmlspecialchars($_SESSION['username']) ?> | <a href="logout.php">Logout</a></h3>
    <div id="chat-box" class="chat-box"></div>
    <form id="chat-form">
      <input type="text" id="message" placeholder="Type your message..." required autocomplete="off">
      <button type="submit">Send</button>
    </form>
  </div>
  <script src="chat.js"></script>
</body>
</html>