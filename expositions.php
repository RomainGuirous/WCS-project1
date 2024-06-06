<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="expositions.css">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="menu">
            <h1 class="logo"><a href="index.html">ZC</a></h1>
            <h3 class="link"> <a href="expositions.php"> Expositions</a></h3>
            <h3 class="link"> <a href="oeuvres.php">Oeuvres</a></h3>
            <h3 class=" link last-element"> <a href="actualites.html">Actualités</a></h3>
        </div>
    </header>

    <main>
        <?php require('data.php'); ?>
        <?php foreach ($expositions as $year => $infosArray) : ?>
            <!-- $date -> les titres (années); $infosArray -> tout le contenu -->
            <h1><?= $year ?></h1>
            <ul>
                <?php foreach ($infosArray as $information) : ?>
                    <!-- $categorie-> date, image, lieu, etc; $information -> la valeur de $categorie -->
                    <li>
                        <img src="<?= $information['image'] ?>" alt="Highschool of Smalltown">
                        <h2><?= $information['expositionName'] ?>, <?= $information['location'] ?></h2>
                        <h4><?= $information['date'] ?></h4>
                        <p><?= $information['description'] ?></p>
                    </li>
                <?php endforeach ?>
            </ul>
        <?php endforeach ?>


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
                <li><a href="actualites.html">Actualités</a></li>
            </ul>
        </div>
    </footer>

</body>

</html>