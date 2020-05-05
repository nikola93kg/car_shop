<?php require_once "partials/head.php"; ?>
<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header('Location: index.view.php');
}
?>
<link rel="stylesheet" href="css/logreg_style.css">
<a href="index.php" class="navbar-brand"><img src="img/car_logo.png" alt="blje" class="logo"></a>
<img class="wave" src="img/wave.png">
<div class="container">
    <div class="img">
        <img src="img/register_img.svg?v1" alt="">
    </div>
    <div class="login-content">
        <form action="logic/register.php" method="post" enctype="multipart/form-data">
            <img src="img/register_avatar.svg" alt="">
            <h2 class="title">Registrujte se</h2>
            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <h5>Korisnicko ime</h5>
                    <input type="text" name="username" class="input" required autocomplete="off">
                </div>
            </div>
            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="div">
                    <h5>Email</h5>
                    <input type="email" name="email" class="input" required autocomplete="off">
                </div>
            </div>
            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-address-card"></i>
                </div>
                <div class="div">
                    <h5>Ime i prezime</h5>
                    <input type="text" name="ime_prezime" class="input" required autocomplete="off">
                </div>
            </div>
            <div class="input-div pass">
                <div class="i">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="div">
                    <h5>Lozinka</h5>
                    <input type="password" name="password" class="input" required>
                </div>
            </div>
            <div class="input-div pass">
                <div class="i">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="div">
                    <h5>Ponovi lozinku</h5>
                    <input type="password" name="password_repeat" class="input" required>
                </div>
            </div>
            <input type="file" name="slika" class="input mt-2" required>
            <input type="submit" name="registerBtn" class="btn" value="Registruj se">
        </form>
    </div>
</div>

<?php require_once "partials/footer.php"; ?>