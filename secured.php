<?php
if (!isset($_POST['password'])) {
    header('location: /index.html');
}

if (!($_POST['password'] === 'password')) {
    header('location: /index.html');
}

session_start();
$_SESSION['password'] = 'password'
?>
<div>Le contenu sécurisé</div>