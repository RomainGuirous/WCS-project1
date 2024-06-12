<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="admin.css">
    <title>Admin</title>
</head>

<body>
<header>
        <div class="menu">
            <h1 class="logo"><a href="index.html">ZC</a></h1>
            <ul>
                <li>
                    <h3 class="link"> <a href="expositions.php"> Expositions</a></h3>
                </li>
                <li>
                    <h3 class="link"> <a href="oeuvres.php">Oeuvres</a></h3>
                </li>
                <li>
                    <h3 class="link"> <a href="actualites.php">Actualités</a></h3>
                </li>
                <li>
                    <h3 class="link last-element"> <a href="contact.html">Contactez-moi</a></h3>
                </li>
            </ul>
        </div>
    </header>

    <main>
    <?php require('data.php'); ?>
        <form action="#" method="post">
        <h1>Oeuvres</h1>
        <textarea name="oeuvres" id="oeuvres" cols="200" rows="30"><?php print_r($oeuvres) ?></textarea>
        <h1>Actualités</h1>
        <textarea name="actualites" id="actualites" cols="200" rows="30"><?php print_r($actualites) ?></textarea>
        <h1>contact</h1>
        <textarea name="contact" id="contact"  cols="200" rows="30"></textarea>
        <div>
        <input class="button" type="submit" value="Enregistrer">
        </div>
    </form>
    </main>
    <footer>
        <div class="author">
            <ul class="list-wihout-dot">
                <li>Romain Guirous</li>
                <li>Dorian Dequirez</li>
                <li>Hermine Som Idellette Judith</li>
            </ul>
        </div>
        <div class="navigation">
            <ul class="list-wihout-dot">
                <li><a href="index.html">ZC</a></li>
                <li><a href="expositions.php"> Expositions</a></li>
                <li><a href="oeuvres.php">Oeuvres</a></li>
                <li><a href="actualites.php">Actualités</a></li>
                <li><a href="contact.html">Contactez-moi</a></li>
            </ul>
        </div>
    </footer>
</body>

</html>