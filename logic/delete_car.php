<?php
require_once "../classes/Car.php";

try {
    Car::deleteCar($_GET['id']);
    header('Location: ../user.view.php?delete=1');
} catch (Exception $ex) {
    header('Location: ../user.view.php?error%delete=1');
}
?>