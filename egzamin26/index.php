<?php 
$db = mysqli_connect('localhost','root','','kino');
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista aktorów | KinoTEKA</title>
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
        <h1>Najlepsi aktorzy tylko w naszym kinie</h1>
        <div id="aktorzy">
            <?php 
                $q = 'SELECT aktorzy.*
FROM aktorzy
ORDER BY aktorzy.nazwisko,aktorzy.imie ';
$mq = mysqli_query($db,$q);
while($row = mysqli_fetch_assoc($mq)){
    echo "<div class='aktor1 aktor'>";
    echo "<a href='aktor.php?id={$row['id_aktora']}'>";
    echo "<img src='img/{$row['plik_awatara']}' alt='{$row['imie']} {$row['nazwisko']}' title='{$row['imie']} {$row['nazwisko']}'>";
    echo "<p>{$row['imie']} {$row['nazwisko']}</p> ";
    echo "</a>";
    echo "</div>";
}
            ?>
        </div>
    </main>
    <footer>
        <p>Autor: <strong>000000000</strong></p>
    </footer>
</body>
</html>