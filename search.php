<?php require_once "partials/head.php" ?>
<?php require_once "partials/navbar.php" ?>
<?php
if (!isset($id)) {
    header('Location: index.php');
}
?>
<?php require_once "classes/Car.php" ?>

<?php

if (isset($_GET['subBtn'])) {
    $search = $_GET['search'];
    $res = Car::search($search, $search, $search);
}

?>

<?php foreach ($res as $car) : ?>
    <div class="card" style="width: 38rem;margin:auto;margin-top:30px;">
        <img src="uploads/<?= $car->slika ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $car->marka . " " . $car->model ?>
                <button class="btn float-right btn-sm btn-<?php if ($car->koriscen) {
                                                                echo "danger";
                                                            } else {
                                                                echo "success";
                                                            } ?>"> <?php if ($car->koriscen) {
                                                        echo "koriscen";
                                                    } else {
                                                        echo "nov";
                                                    }
                                                    ?>
                </button>
            </h5>
            <p class="card-text"><?= $car->info ?></p>
            <a href="" class="btn btn-warning btn-sm float-left">
                <?php echo $car->cena . "$"  ?>
            </a>
            <button type="button" class="btn btn-outline-danger btn-sm float-right">
                <?php echo $car->getUser()->username; ?>
            </button>
        </div>
    </div>
<?php endforeach ?>

<?php require_once "partials/footer.php" ?>