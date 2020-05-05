<?php 
if (!isset($_POST['marka'])) {
    header('../index.php');
}

session_start();
$marka = $_POST['marka'];
$model = $_POST['model'];
$cena = $_POST['cena'];
$info = $_POST['info'];
$slika = $_FILES['slika'];
$koriscen = $_POST['koriscen'];

$korisnik_id = $_SESSION['user_id'];

require_once "../classes/Car.php";

$new_car = Car::addCar($marka, $model, $cena, $koriscen, $info, $slika['name'], $korisnik_id); 

if ($new_car !== false && isset($slika)) {
    require_once "../includes/Upload.php";
    $upload = Upload::factory('uploads', dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR);
    $upload->file($slika);
    $upload->set_allowed_mime_types(['jpg/jpeg', 'image/png', 'image/gif']);
    $upload->set_max_file_size(4);
    $upload->set_filename($slika['name']);
    $upload->save();
    header('Location: ../user.view.php?success');
} else {
    header('Location: ../user.view.php?error');
}


?>