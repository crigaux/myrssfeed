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
            <div class="mobileNavIcons">
                <div class="iconsNavbar">
                    <svg class="settingsIcon" xmlns="http://www.w3.org/2000/svg" width="35px" height="35px" viewBox="0 0 512 512"><path d="M200 0H312l17.2 78.4c15.8 6.5 30.6 15.1 44 25.4l76.5-24.4 56 97-59.4 54.1c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l59.4 54.1-56 97-76.5-24.4c-13.4 10.3-28.2 18.9-44 25.4L312 512H200l-17.2-78.4c-15.8-6.5-30.6-15.1-44-25.4L62.3 432.5l-56-97 59.4-54.1C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L6.3 176.5l56-97 76.5 24.4c13.4-10.3 28.2-18.9 44-25.4L200 0zm56 336c44.2 0 80-35.8 80-80s-35.8-80-80-80s-80 35.8-80 80s35.8 80 80 80z"/></svg>
                </div>
                <div class="darkModeToggle">
                    <svg class="sun" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M361.5 1.2c5 2.1 8.6 6.6 9.6 11.9L391 121l107.9 19.8c5.3 1 9.8 4.6 11.9 9.6s1.5 10.7-1.6 15.2L446.9 256l62.3 90.3c3.1 4.5 3.7 10.2 1.6 15.2s-6.6 8.6-11.9 9.6L391 391 371.1 498.9c-1 5.3-4.6 9.8-9.6 11.9s-10.7 1.5-15.2-1.6L256 446.9l-90.3 62.3c-4.5 3.1-10.2 3.7-15.2 1.6s-8.6-6.6-9.6-11.9L121 391 13.1 371.1c-5.3-1-9.8-4.6-11.9-9.6s-1.5-10.7 1.6-15.2L65.1 256 2.8 165.7c-3.1-4.5-3.7-10.2-1.6-15.2s6.6-8.6 11.9-9.6L121 121 140.9 13.1c1-5.3 4.6-9.8 9.6-11.9s10.7-1.5 15.2 1.6L256 65.1 346.3 2.8c4.5-3.1 10.2-3.7 15.2-1.6zM352 256c0 53-43 96-96 96s-96-43-96-96s43-96 96-96s96 43 96 96zm32 0c0-70.7-57.3-128-128-128s-128 57.3-128 128s57.3 128 128 128s128-57.3 128-128z"/></svg>
                    <svg class="moon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M223.5 32C100 32 0 132.3 0 256S100 480 223.5 480c60.6 0 115.5-24.2 155.8-63.4c5-4.9 6.3-12.5 3.1-18.7s-10.1-9.7-17-8.5c-9.8 1.7-19.8 2.6-30.1 2.6c-96.9 0-175.5-78.8-175.5-176c0-65.8 36-123.1 89.3-153.3c6.1-3.5 9.2-10.5 7.7-17.3s-7.3-11.9-14.3-12.5c-6.3-.5-12.6-.8-19-.8z"/></svg>
                </div>
            </div>
    </div>
    <div class="separateLine"></div>
</nav>