<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="oeuvres.css">
    <link rel="icon" href="/images/ZC.png">
    <title>Oeuvres</title>
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
                    <h3 class="link hover-header"> <a href="oeuvres.php">Oeuvres</a></h3>
                </li>
                <li>
                    <h3 class=" link"> <a href="actualites.php">Actualités</a></h3>
                </li>
                <li>
                    <h3 class="link last-element"> <a href="contact.html">Contactez-moi</a></h3>
                </li>
            </ul>
        </div>
    </header>

    <main>
        <?php require('data.php'); ?>
        <!-- <h1>Œuvres</h1> -->
        <div class="oeuvres-container">
            <?php foreach ($oeuvres as $infosArray) : ?>
                <article>
                    <img src="<?= $infosArray['image'] ?>" alt=<?= $infosArray['artworkName'] ?>>
                    <p>
                        <?= $infosArray['dimension'] ?> - <i><?= $infosArray['artworkName'] ?></i> - <?= $infosArray['year'] ?> -<?= $infosArray['technique'] ?>
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
                <li><a href="oeuvres.php">Oeuvres</a></li>
                <li><a href="actualites.php">Actualités</a></li>
                <li><a href="contact.html">Contactez-moi</a></li>
            </ul>
        </div>
    </footer>
</body>

</html>