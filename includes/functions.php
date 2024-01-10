<?php
require_once 'db.php';

function authenticateUser($email, $password) {
    global $db;
    $query = $db->prepare('SELECT * FROM users WHERE email = :email');
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->execute();
    $user = $query->fetch(PDO::FETCH_ASSOC);

    var_dump($user); 

    return ($user && password_verify($password, $user['password']));
}
?>
