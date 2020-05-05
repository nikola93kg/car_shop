<nav class="navbar navbar-expand navbar-light bg-transparent">
    <a href="index.php" class="navbar-brand"><img src="img/car_logo.png" alt="blje" class="logo"></a>
    <?php
        session_start();
        if (isset($_SESSION['user_id'])) {
        require_once "partials/navbar-logged.php";
    } else {
        require_once "partials/navbar-login.php";
    }
    ?>
    <?php 
        if(isset($_SESSION['user_id'])) {
            $id = $_SESSION['user_id'];
        }
     ?>
</nav>