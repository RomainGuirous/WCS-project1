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
        
    <h1>contact</h1>
        <table>
            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Mail</th>
                    <th scope="col">Message</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $f = fopen("contact.csv", "r");
                while (($line = fgetcsv($f)) !== false) {
                    echo "<tr>";
                    foreach ($line as $cell) {
                        echo "<td>" . htmlspecialchars($cell) . "</td>";
                    }
                    echo "</tr>\n";
                }
                fclose($f);
                ?>
            </tbody>
        </table>



        <?php require('data.php'); ?>
        <form action="#" method="post">
            <h1>Expositions</h1>
            <textarea name="expositions" id="expositions" cols="200" rows="30"><?php print_r($expositions) ?></textarea>
            <h1>Actualités</h1>
            <textarea name="actualites" id="actualites" cols="200" rows="30"><?php print_r($actualites) ?></textarea>
            <h1>Oeuvres</h1>
            <textarea name="oeuvres" id="oeuvres" cols="200" rows="30"><?php print_r($oeuvres) ?></textarea>
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
<?php

error_reporting(E_ERROR | E_PARSE);
$expositions = $_POST['expositions'];
$actualites = $_POST['actualites'];
$oeuvres = $_POST['oeuvres'];
$value = $expositions;
str_replace("\[","'",$value);
str_replace("\]","'",$value);
str_replace("\(","[",$value);
str_replace("\)","]",$value);
str_replace("Array","",$value);

// var_dump($value);die();

// $valueToAdd = array($value);
// $fp = fopen('data.php','a+');

//     fputcsv($fp, $valueToAdd);
    
// fclose($fp);








?>
</html>