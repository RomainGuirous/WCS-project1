<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="actualites.css">
    <title>Actualités</title>
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
                    <h3 class=" link last-element hover-header"> <a href="actualites.php">Actualités</a></h3>
                </li>
            </ul>
        </div>
    </header>

    <main>
        <?php require('data.php'); ?>
        <div class="actualites-container">
            <?php foreach ($actualites as $infosArray) : ?>
                <article>
                    <img src="<?= $infosArray['image'] ?>" alt=<?= $infosArray['title'] ?>>
                    <p>
                        <?= $infosArray['description'] ?>
                    </p>
                </article>
            <?php endforeach ?>
        </div>

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
                <li><a href="oeuvres.html">Oeuvres</a></li>
                <li><a href="actualites.php">Actualités</a></li>
            </ul>
        </div>
    </footer>
</body>

</html>