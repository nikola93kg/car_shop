<?php
if (!isset($_POST['username'])) {
    header('../index.php');
}

$username = $_POST['username'];
$password = $_POST['password'];

$password = hash('sha512', $password);

require_once "../classes/User.php";
$user = User::login($username, $password);

if ($user !== null) {
    session_start();
    $_SESSION['user_id'] = $user->id;
    $_SESSION['user_name'] = $user->ime_prezime;
    $_SESSION['user_pic'] = $user->slika;
    header('Location: ../index.php?login=success');
} else {
    header('Location: ../login.view.php?login=error');
}

?>