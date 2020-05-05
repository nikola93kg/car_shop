<?php require_once "partials/head.php" ?>
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
        <img src="img/login_img.svg" alt="">
    </div>
    <div class="login-content">
        <form action="logic/login.php" method="post">
            <img src="img/login_avatar.svg" alt="">
            <h2 class="title">Ulogujte se</h2>
            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <h5>Korisnicko ime</h5>
                    <input type="text" name="username" required autocomplete="off" class="input">
                </div>
            </div>
            <div class="input-div pass">
                <div class="i">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="div">
                    <h5>Lozinka</h5>
                    <input type="password" name="password" class="input">
                </div>
            </div>
            <a href="register.view.php">Nemas nalog? Registruj se</a>
            <input type="submit" class="btn" value="Login">
        </form>
    </div>
</div>

<?php require_once "partials/footer.php" ?>