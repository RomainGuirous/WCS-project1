<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="expositions.css">
    <title>Expositions</title>
</head>

<body>
    <header>
        <div class="menu">
            <h1 class="logo"><a href="index.html">ZC</a></h1>
            <ul>
                <li>
                    <h3 class="link hover-header"> <a href="expositions.php"> Expositions</a></h3>
                </li>
                <li>
                    <h3 class="link"> <a href="oeuvres.php">Oeuvres</a></h3>
                </li>
                <li>
                    <h3 class=" link last-element"> <a href="actualites.php">Actualités</a></h3>
                </li>
            </ul>
        </div>
    </header>

    <main>
        <?php require('data.php') ?>
        <?php foreach ($expositions as $year => $infosArray) : ?>
            <div class="barre-deroulante">
                <!-- $date -> les titres (années); $infosArray -> tout le contenu -->
                <h1><?= $year ?></h1><img class="more" id="more<?= $year ?>" onclick="more(<?php echo ($year); ?>)" src="images/more.png"><img id="less<?= $year ?>" class="hidden" onclick="less(<?php echo ($year); ?>)" src="images/less.png">
            </div>
            <ul id="description<?= $year ?>" class="hidden">
                <?php foreach ($infosArray as $information) : ?>
                    <!-- $categorie-> date, image, lieu, etc; $information -> la valeur de $categorie -->
                    <li>
                        <img src="<?= $information['image'] ?>" alt=<?= $information['nomImage'] ?>>
                        <h2><?= $information['structure'] ?>, <?= $information['location'] ?></h2>
                        <h4><?= $information['date'] ?></h4>
                        <p>"<?= $information['expositionName'] ?>" - Du <?= $information['date'] ?> au <?= $information['dateFin'] ?>, <?= $information['description'] ?></p>
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
                <li><a href="actualites.php">Actualités</a></li>
            </ul>
        </div>
    </footer>

</body>
<script>
    function more($year) {
        var more = document.getElementById("more" + $year);
        var description = document.getElementById("description" + $year);
        var less = document.getElementById("less" + $year);
        more.classList.add("hidden");
        description.classList.remove("hidden");
        less.classList.remove("hidden");
    }

    function less($year) {
        var less = document.getElementById("less" + $year);
        var description = document.getElementById("description" + $year);
        var more = document.getElementById("more" + $year);
        less.classList.add("hidden");
        description.classList.add("hidden");
        more.classList.remove("hidden");
    }
</script>

</html>