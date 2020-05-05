<?php require_once "partials/head.php" ?>
<?php require_once "partials/navbar.php" ?>

<div class="jumbotron">
    <h3 class="display-5 index-naslov">Automobili iz AKM</h3>
    <div class="background">
        <div class="slider-frame">
            <div class="slide-images">
                <div class="img-container">
                    <img src="img/audi.jpg" alt="">
                </div>
                <div class="img-container">
                    <img src="img/seat.jpg" alt="">
                </div>
                <div class="img-container">
                    <img src="img/mercedes.jpg" alt="">
                </div>
                <div class="img-container">
                    <img src="img/1cf55aed5580-800x600.jpg" alt="">
                </div>
                <div class="img-container">
                    <img src="img/2e28df837c8b-1920x1080.jpg" alt="">
                </div>
                <div class="img-container">
                    <img src="img/7dc49977c62b-1920x1080.jpg" alt="">
                </div>
                <div class="img-container">
                    <img src="img/070ae516de17-1920x1080.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <hr class="my-4 bg-light">
    <?php if(!isset($id)): ?>
    <p>Da biste pogledali oglase koje su ostavili drugi korisnici potrebno je da se ulogujete.</p>
    <?php elseif(isset($id)): ?>
    <p><a href="#oglasi">Pogledajte oglase nasih korisnika.</a></p>
    <?php endif ?>
    <a class="btn btn-primary btn-lg" href="<?php if (isset($id)) {
        echo "user.view.php";
    } else {
        echo "login.view.php";
    } ?>" role="button">Postavi oglas</a>
</div>

<?php require_once "classes/Car.php";
$cars = Car::getAll();
?>

<?php if (isset($id)) : ?>
    <h3 class="text-center mb-5" id="oglasi">Oglasi automobila</h3>
    <div class="container-fluid">
        <div class="row" id="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <?php foreach ($cars as $car) : ?>
                        <div class="col-3 mb-3 zbidelj2">
                            <a href="singleCarInfo.php?id=<?= $car->id ?> " id="a_tag">
                                <div class="card text-center kartica">
                                    <div class="card-header"><?= $car->marka . ' ' . $car->model  ?></div>
                            </a>
                            <div class="card-body zbidelj"><?= $car->info ?></div>
                            <div class="card-footer">
                                <button class="btn btn-primary btn-sm float-left" name="button"><?= $car->cena . "$" ?></button>
                                <button class="btn btn-<?php if ($car->koriscen) {
                                                            echo "warning";
                                                        } else {
                                                            echo "success";
                                                        } ?> btn-sm float-right" name="button"><?php if ($car->koriscen) {
                                                            echo "Koriscen";
                                                        } else {
                                                            echo "Nov";
                                                        } ?>
                                </button>
                            </div>
                        </div>
                </div>
            <?php endforeach ?>
            </div>
        </div>
    </div>
    </div>
    <a class="gotopbtn" href="#"> <i class="fas fa-arrow-up"></i> </a>
<?php endif ?>
<?php require_once "partials/footer.php" ?>