<nav class="navbar">
    <a href="#" class="toggle-button">
        <spa class="bar"></spa>
        <spa class="bar"></spa>
        <spa class="bar"></spa>
    </a>
    <div class="navbar-links">
        <a href="/accueil">Accueil</a>
            <form action="/a-la-une" method="POST">
                <input type="text" name="title" value="<?=$title[0]?>" style="display:none">
                <input type="text" name="url" value="<?=$links[0]?>" style="display:none">
                <button type="submit">À la une</button>
            </form>
            <form action="/en-continu" method="POST">
                <input type="text" name="title" value="<?=$title[1]?>" style="display:none">
                <input type="text" name="url" value="<?=$links[1]?>" style="display:none">
                <button type="submit">En continu</button>
            </form>
            <form action="/galerie" method="POST">
                <input type="text" name="title" value="<?=$title[2]?>" style="display:none">
                <input type="text" name="url" value="<?=$links[2]?>" style="display:none">
                <button type="submit">Galerie</button>
            </form>
            <form action="/populaires" method="POST">
                <input type="text" name="title" value="<?=$title[3]?>" style="display:none">
                <input type="text" name="url" value="<?=$links[3]?>" style="display:none">
                <button type="submit">Populaires</button>
            </form>
            <form action="/les+vus" method="POST">
                <input type="text" name="title" value="<?=$title[4]?>" style="display:none">
                <input type="text" name="url" value="<?=$links[4]?>" style="display:none">
                <button type="submit">Les + vus</button>
            </form>
            <div class="iconsNavbar"><svg xmlns="http://www.w3.org/2000/svg" width="35px" height="35px" viewBox="0 0 512 512"><path d="M200 0H312l17.2 78.4c15.8 6.5 30.6 15.1 44 25.4l76.5-24.4 56 97-59.4 54.1c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l59.4 54.1-56 97-76.5-24.4c-13.4 10.3-28.2 18.9-44 25.4L312 512H200l-17.2-78.4c-15.8-6.5-30.6-15.1-44-25.4L62.3 432.5l-56-97 59.4-54.1C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L6.3 176.5l56-97 76.5 24.4c13.4-10.3 28.2-18.9 44-25.4L200 0zm56 336c44.2 0 80-35.8 80-80s-35.8-80-80-80s-80 35.8-80 80s35.8 80 80 80z"/></svg></div>
    </div>
    <div class="separateLine"></div>
</nav>