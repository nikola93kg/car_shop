<?php require_once "partials/head.php" ?>
<?php require_once "partials/navbar.php" ?>
<div class="banner">
    <video autoplay muted loop>
        <source src="img/1.mp4?v1" type="video/mp4">
    </video>
    <div class="content">
        <h1>Auto kuća Marković</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Nemo doloremque ad minus error illum libero tempora accusamus,
            nulla cumque dolore ratione sint similique! Dolores molestias animi
            repellendus natus quibusdam repellat.
        </p>
        <?php if (isset($_GET['success'])) : ?>
            <div class="alert alert-success bg-transparent">Uspesna registracija! Ulogujte se.</div>
        <?php endif; ?>
        <a href="index.view.php?search">
            <button class="btn btn-info btn-md bg-transparent">AKM Automobili</button>
        </a>
    </div>
</div>

<?php require_once "partials/footer.php" ?>