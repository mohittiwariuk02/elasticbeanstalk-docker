<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        nav a {
            color: #fff;
            margin: 0 10px;
            text-decoration: none;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            overflow: hidden;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
<header>
    <nav>
        <a href="?page=home">Home</a>
        <a href="?page=about">About</a>
        <a href="?page=contact">Contact</a>
    </nav>
</header>
<div class="container">

<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'home':
        echo '<h1>Welcome to My Website</h1><p>This is the home page of my simple PHP website.</p>';
        break;
    case 'about':
        echo '<h1>About Us</h1><p>This is the about page of my simple PHP website.</p>';
        break;
    case 'contact':
        echo '<h1>Contact Us</h1>
              <form method="post" action="?page=contact">
                  <label for="name">Name:</label>
                  <input type="text" id="name" name="name" required><br>
                  <label for="email">Email:</label>
                  <input type="email" id="email" name="email" required><br>
                  <label for="message">Message:</label>
                  <textarea id="message" name="message" required></textarea><br>
                  <input type="submit" value="Submit">
              </form>';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $message = htmlspecialchars($_POST['message']);
            echo "<p>Thank you, $name. We have received your message.</p>";
        }
        break;
    default:
        echo '<h1>Welcome to My Website</h1><p>This is the home page of my simple PHP website.</p>';
}
?>

</div>
<footer>
    <p>&copy; 2024 My PHP Website</p>
</footer>
</body>
</html>
