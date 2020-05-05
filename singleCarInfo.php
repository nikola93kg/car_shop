<?php require_once "partials/head.php" ?>
<?php require_once "partials/navbar.php" ?>
<?php
if (!isset($id)) {
  header('Location: index.php');
}

require_once "classes/Car.php";
$cars = Car::getAll();

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $single_car = Car::oneCar($id);
} 

?>
<?php foreach ($single_car as $car) : ?>
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
                <img src="uploads/<?php echo $car->getUser()->slika ?>" class="card-img-top" alt="user_pic">
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
<?php endforeach ?>
<?php require_once "partials/footer.php" ?>