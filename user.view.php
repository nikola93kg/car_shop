<?php require_once "partials/head.php" ?>
<?php require_once "partials/navbar.php" ?>
<?php
require_once "classes/Car.php";
if (!isset($id)) {
    header('Location: index.php');
}

$cars = Car::oneUserCar($id);

?>

<div class="container">
    <div class="row">
        <div class="col-10 offset-1">
            <div class="row">
                <div class="col-6 offset-3 mt-3 mb-5">
                    <button type="button" class="btn btn-primary form-control" data-toggle="modal" data-target=".bd-example-modal-lg">Dodaj auto</button>
                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-6 offset-3">
                                            <h4 class="mb-3 mt-3">Dodaj svoj auto</h4>
                                            <form action="logic/add_car.php" method="post" enctype="multipart/form-data">
                                                <input type="text" name="marka" placeholder="marka" class="form-control" required autocomplete="off"><br>
                                                <input type="text" name="model" placeholder="model" class="form-control" required autocomplete="off"><br>
                                                <input type="number" name="cena" placeholder="cena " class="form-control" required><br>
                                                <textarea name="info" cols="43" rows="5"></textarea>
                                                <p class="mb-1">Koriscen:</p>
                                                <select name="koriscen" class="form-control"><br>
                                                    <option value="1">Da</option>
                                                    <option value="0">Ne</option>
                                                </select><br>
                                                <input type="file" name="slika" placeholder="slika" class="mb-2" required><br>
                                                <button type="submit" class="form-control btn btn-warning mb-3" name="registerBtn">Sacuvaj</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if (isset($_GET['delete'])) : ?>
        <div class="alert alert-success text-center bg-transparent" style="color:#f00;">Auto je uspesno obrisan!</div>
    <?php endif ?>
    <?php if (isset($_GET['success'])) : ?>
        <div class="alert alert-success text-center bg-transparent" style="color:#00f;">Auto je uspesno dodat!</div>
    <?php endif ?>
    <div class="row">
        <?php foreach ($cars as $car) : ?>
            <div class="col-4">
                <div class="card mb-2 mt-2">
                    <div class="card-header">
                        <a href="singleCarInfo.php?id=<?php echo $car->id ?>" class="btn btn-secondary btn-sm">
                            <?php echo $car->marka . " " . $car->model ?>
                        </a>
                        <button class="btn btn-danger btn-sm float-right deleteBtn">
                            <a href="logic/delete_car.php?id=<?= $car->id ?>">obrisi</a>
                        </button>
                    </div>
                    <div class="card-body text-center">
                        <img src="uploads/<?php echo $car->slika ?>" alt="slika" class="car_pic">
                    </div>
                    <div class="card-footer">
                        <a href="" class="btn btn-primary btn-sm float-left">
                            <?php echo $car->cena . " $"  ?>
                        </a>
                        <button type="button" class="btn btn-outline-danger btn-sm float-right" data-toggle="modal" data-target="#exampleModalCenter">
                            <?php echo $car->getUser()->username; ?>
                        </button>
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">Podaci o korisniku</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card text-center" style="width: 22rem;margin:auto;border:none;">
                                            <img src="uploads/<?php echo $car->getUser()->slika ?>" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <p class="card-text"><?php echo "kontakt: " . $car->getUser()->email ?></p>
                                                <p class="card-text"><?php echo $car->getUser()->ime_prezime ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>
<?php require_once "partials/footer.php" ?>