<?php
$db = mysqli_connect('localhost', 'root', '', 'kino');
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacje o aktorze | KinoTEKA</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <header id="naglowek1">
        <h2><a href="index.php">KinoTEKA</a></h2>
    </header>
    <header id="naglowek2">
        <p><em>W naszej bazie znajdują się najlepsi aktorzy</em></p>
    </header>
    <main>
        <div id="aktorzy">
            <?php
            $id = $_GET['id'];
            $q = "SELECT aktorzy.imie,aktorzy.nazwisko,aktorzy.plik_awatara
FROM aktorzy
WHERE aktorzy.id_aktora = '$id'";
            $mq = mysqli_query($db, $q);

            while ($row = mysqli_fetch_assoc($mq)) {
                $imie_aktora = $row['imie'];

                echo "<div class='aktor2 aktor'>";
                echo "<img src='img/{$row['plik_awatara']}' alt='{$row['imie']} {$row['nazwisko']}' title='{$row['imie']} {$row['nazwisko']}'>";
                echo "<h1>{$row['imie']} {$row['nazwisko']}</h1>";
                echo "</div>";
            }
            ?>

        </div>
        <?php
        $id = $_GET['id'];
        $q = "SELECT filmy.id_filmu, filmy.tytul,filmy.rok_produkcji
FROM filmy
JOIN filmy_aktorzy ON filmy_aktorzy.id_filmu = filmy.id_filmu
JOIN aktorzy ON aktorzy.id_aktora = filmy_aktorzy.id_aktora
WHERE aktorzy.id_aktora = '$id'";
        $mq = mysqli_query($db, $q);
        $row = mysqli_fetch_assoc($mq);
        if (mysqli_num_rows($mq) == 0) {
            echo " {$imie_aktora} nie znajduje się na listach obsady znanych nam produkcji";
        } else {
            $count = mysqli_num_rows($mq);
            echo "{$imie_aktora} znajduje się na listach obsady $count znanych nam produkcj";
        }

        ?>
    </main>
    <footer>
        <p>Autor: <strong>000000000</strong></p>
    </footer>
</body>

</html>