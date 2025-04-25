<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $password);
    if ($stmt->execute()) {
        echo "Registration successful. <a href='login.php'>Login here</a>";
    } else {
        echo "User already exists.";
    }
}
?>

<form method="POST">
  <input name="username" placeholder="Username" required><br>
  <input name="password" type="password" placeholder="Password" required><br>
  <button type="submit">Register</button>
</form>