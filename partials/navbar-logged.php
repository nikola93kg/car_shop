<ul class="navbar-nav ml-auto">
    <?php if (isset($_GET['search'])) : ?>
        <li class="nav-item">
            <form action="search.php" method="get">
                <div class="input-group">
                    <input type="text" name="search" class="form-control search_input" required placeholder="
                    <?php if (isset($_GET['error'])) {
                        echo "Nema pronadjenih rezultata! Pokusajte ponovo";
                    } else {
                        echo "pretrazi";
                    }  ?>" autocomplete="off">
                    <div class="input-group-append">
                        <button type="submit" name="subBtn"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
        </li>
    <?php endif ?>
    <li class="nav-item"><a href="#" class="nav-link">Poruke <span class="badge badge-light"> 4</span></a></li>
    <li class="nav-item"><a href="user.view.php" class="nav-link"><?= $_SESSION['user_name']; ?></a></li>
    <li class="nav-item"><a href="logic/logout.php" class="nav-link">Izloguj se</a></li>
</ul>