<?php
require_once 'includes/functions.php';

$error_message = ''; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (authenticateUser($email, $password)) {
        header('Location: /dashboard.php');
        exit();
    } else {
        $error_message = 'Invalid email or password';
    }
}

var_dump($email, $password, $error_message); //

?>

`<!DOCTYPE html>`
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Enigma Inc. Employee Management</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header class="dark-header">
        <div class="container">
            <img src="images/black_logo.png" alt="Enigma Inc. Logo" class="logo">
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="#">About</a></li>
                    <li><a class="login-link" href="login.php">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="main-content container">
        <section class="login-section">
            <h2>Login to Enigma Inc.</h2>
            
            <form method="post" action="login.php">
    <?php if ($error_message) : ?>
        <p class="error"><?php echo $error_message; ?></p>
    <?php endif; ?>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <button type="submit">Login</button>
</form>

        </section>
    </div>
</body>
</html>
