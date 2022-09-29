<nav class="navbar">
    <a href="#" class="toggle-button">
        <spa class="bar"></spa>
        <spa class="bar"></spa>
        <spa class="bar"></spa>
    </a>
    <div class="navbar-links">
        <a href="../../controllers/homeController.php">Accueil</a>
            <form action="../../controllers/pagesController.php" method="POST">
                <input type="text" name="title" value="<?=$title[0]?>" style="display:none">
                <input type="text" name="url" value="<?=$links[0]?>" style="display:none">
                <button type="submit">À la une</button>
            </form>
            <form action="../../controllers/pagesController.php" method="POST">
                <input type="text" name="title" value="<?=$title[1]?>" style="display:none">
                <input type="text" name="url" value="<?=$links[1]?>" style="display:none">
                <button type="submit">En continu</button>
            </form>
            <form action="../../controllers/pagesController.php" method="POST">
                <input type="text" name="title" value="<?=$title[2]?>" style="display:none">
                <input type="text" name="url" value="<?=$links[2]?>" style="display:none">
                <button type="submit">Galerie</button>
            </form>
            <form action="../../controllers/pagesController.php" method="POST">
                <input type="text" name="title" value="<?=$title[3]?>" style="display:none">
                <input type="text" name="url" value="<?=$links[3]?>" style="display:none">
                <button type="submit">Populaires</button>
            </form>
            <form action="../../controllers/pagesController.php" method="POST">
                <input type="text" name="title" value="<?=$title[4]?>" style="display:none">
                <input type="text" name="url" value="<?=$links[4]?>" style="display:none">
                <button type="submit">Les + vus</button>
            </form>
    </div>
    <div class="separateLine"></div>
</nav>