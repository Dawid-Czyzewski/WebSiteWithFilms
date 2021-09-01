<?php
    include("film.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Dawid Czyżewski">
        <link rel="stylesheet" type="text/css" href="../Front-end/style.css">
        <script type="text/javascript" src="../Front-end/filmsDarkMode.js"></script>
        <title>Films</title>
    </head>
    <body class="notDarkModeBody" id="body">
        <div id="Contener">
            <div id="navBar" class="notDarkModeNavBar">
                <ul>
                    <li><a href="../Front-end/index.html" class="notDarkMode">home</a></li
                    <li><a href="films.php"  class="notDarkMode">films</a></li>
                    <li><a href="../Front-end/author.html"  class="notDarkMode">author</a></li>
                    <button type="button" id="siteColorsButton" onclick="filmsDarkMode()">dark mode</button>
                </ul>   
            </div>
            <div id="content">
                <?php
                    Film::showFilms();
                ?>
            </div>
            <div id="footer" class="notDarkMode">
                Project for portfolio
            </div>
        </div>
    </body>
</html>