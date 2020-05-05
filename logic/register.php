<?php
if (!isset($_POST['username'])) {
    header('Location: ../index.php');
}

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_repeat = $_POST['password_repeat'];
$ime_prezime = $_POST['ime_prezime'];
$slika = $_FILES['slika'];

$password = hash('sha512', $password);
$password_repeat = hash('sha512', $password_repeat);

require_once "../classes/User.php";
$user_id = User::registerUser($username, $password, $email, $ime_prezime, $slika['name']);



if ($user_id !== null && isset($_FILES['slika'])) {
            require_once "../includes/Upload.php";
            $upload = Upload::factory('uploads', dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR);
            $upload->file($slika);
            $upload->set_allowed_mime_types(['jpg/jpeg', 'image/png', 'image/gif']);
            $upload->set_max_file_size(4);
            $upload->set_filename($slika['name']);
            $upload->save();
            header('Location: ../index.php?success');
        } else {
            header('Location: ../register.view.php?error=1');
        }
