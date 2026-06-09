<?php
$db = mysqli_connect('localhost', 'root', '', 'przepisy');
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog kulinarny</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <div id="kontener">
        <aside>

            <a href="przepisy.php?id=1">Sernik</a><br>
            <a href="przepisy.php?id=2">Salatka</a><br>
            <a href="przepisy.php?id=3">Pankejki</a><br>
            <a href="przepisy.php?id=4">Nugetsy</a><br>
            <a href="przepisy.php?id=5">Łosoś</a><br>
            <a href="przepisy.php?id=6">Kociołek</a><br>
            <a href="przepisy.php?id=7">Jagnięcina</a><br>
            <a href="przepisy.php?id=8">Hamburgery</a><br>
            <a href="przepisy.php?id=9">Eklerki</a><br>
            <a href="przepisy.php?id=10">Churros</a><br>
            <p>Autor:00000</p>
        </aside>

        <main>
            <?php
            $id = $_GET['id'] ?? 7;


            $q = "SELECT potrawy.nazwa,rodzaje.rodzaj
FROM potrawy
JOIN rodzaje ON rodzaje.idRodzaje = potrawy.idRodzaje
WHERE potrawy.idPotrawy = '$id'";
            $mq = mysqli_query($db, $q);
            $row1 = mysqli_fetch_assoc($mq);
            echo "<h1>";
            echo $row1['rodzaj'];

            echo "</h1>";
            ?>
            <?php
            $q2 = "SELECT potrawy.nazwa,potrawy.trudnosc,potrawy.kalorie
FROM potrawy
WHERE potrawy.idPotrawy = '$id'";
            $mq2 = mysqli_query($db, $q2);
            while ($row = mysqli_fetch_assoc($mq2)) {
                $trudnosc = $row['trudnosc'];
                $trudnosc = $trudnosc == 1 ? "łatwe" : ($trudnosc == 2 ? "średnie" : ($trudnosc == 3 ? "trudne" : 0));
                echo "<h2>{$row['nazwa']}</h2>";
                echo "<p>Trudnosc $trudnosc, kalorie {$row['kalorie']}</p> ";
            }
            echo "<img src='separator.png' alt='przepis'>";
            echo "<p>Alergeny: ";
            $q3 = "SELECT potrawy.nazwa, alergeny.alergen
FROM potrawy
JOIN lista_alergenow ON lista_alergenow.idPotrawy = potrawy.idPotrawy
JOIN alergeny ON lista_alergenow.idAlergeny = alergeny.idAlergeny
WHERE potrawy.idPotrawy = '$id'
";
            $mq3 = mysqli_query($db, $q3);
            while ($row3 = mysqli_fetch_assoc($mq3)) {
                echo $row3['alergen'];
            }
            echo "</p>";
            echo "<h2>Skladniki</h2>";
            echo "<ul>";
            echo "<li>Lorem 1 kg</li>";
            echo "<li>Ipsum 2 szt.</li>";
            echo "<li>Dolor 200 g</li>";
            echo "<li>Sit amet (szczypta)</li>";
            echo "</ul>";
            echo "<p>";
            $q4 = "SELECT potrawy.przepis,potrawy.plik
FROM potrawy
WHERE potrawy.idPotrawy = '$id'
";
            $mq4 = mysqli_query($db, $q4);
            while ($row = mysqli_fetch_assoc($mq4)) {
                $nazwa_pliku = $row['plik'];
                echo "{$row['przepis']}";
            }
            echo "</p>";


            echo "</main>";
            echo "<section style=\"background-image: url('{$nazwa_pliku}')\">";
            echo "<h1>Blok Kulinarny</h1>";
            echo "</section>";
            mysqli_close($db);
            ?>
    </div>
</body>

</html>