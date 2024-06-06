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

    </footer>

</body>

</html>