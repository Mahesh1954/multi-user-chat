# Multi-User Chat Application

A real-time multi-user chatroom built with **PHP**, **MySQL**, **HTML/CSS**, and **JavaScript**. This project allows users to register, log in, and chat live with others in a secure environment.

## Features

- User registration and login system
- Real-time chat using AJAX
- Messages saved to MySQL database
- Timestamps and usernames displayed
- Clean and responsive UI
- Secure PHP session management

## Technologies Used

- PHP
- MySQL
- JavaScript (AJAX)
- HTML5
- CSS3

## Installation Guide

### 1. Clone the Repository

```bash
git clone https://github.com/Mahesh1954/multi-user-chat.git
cd multi-user-chat
```

### 2. Set Up the Database

Create a MySQL database named `chatapp` and run this SQL:

```sql
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL
);

CREATE TABLE messages (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT,
  message TEXT NOT NULL,
  timestamp DATETIME DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (user_id) REFERENCES users(id)
);
```

### 3. Configure `db.php`

Edit your database credentials:

```php
$conn = new mysqli("localhost", "your_mysql_user", "your_mysql_password", "chatapp");
```

### 4. Deploy on Local Server

If you're using Apache:

```bash
sudo cp -r multi-user-chat /var/www/html/
```

Access via:  
`http://localhost/multi-user-chat`

---

## Author

**Mahesh**  
20-year-old developer, passionate about building real-time applications, robotics, and tech projects.

---

## License

**© 2025 Mahesh. All rights reserved.**  
This project is licensed for personal or educational use only. You may not reproduce or redistribute it commercially without permission.

---

## Contact

Have suggestions or questions? Feel free to reach out at:

- GitHub: [https://github.com/Mahesh1954](https://github.com/Mahesh1954)
