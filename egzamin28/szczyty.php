<?php 
$db = mysqli_connect('localhost','root','','korona');
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Korona gór polskich</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header id="naglowek1">
<img src="logo.png" alt="Logo">
</header>
<header id="naglowek2">
    <h1>Korona Gór Polskich</h1>
</header>
<main>
    <?php
    $id = $_GET['id'];
    $q = "SELECT szczyty.plik,szczyty.nazwa,szczyty.wysokosc,szczyty.pasmo,opis.opis
FROM szczyty
JOIN opis ON opis.szczyty_id = szczyty.id
WHERE opis.id = '$id'";
$mq = mysqli_query($db,$q);
while($row = mysqli_fetch_assoc($mq)){
    echo "<img src='{$row['plik']}' alt='szczyt'>";
    echo "<h2>{$row['nazwa']}</h2>";
    echo "<h3>{$row['wysokosc']} metrów n.p.m.</h3>";
    echo "<h3>{$row['pasmo']}</h3>";
    echo "<p>{$row['opis']}</p>";
}
    ?>
</main>
<section>
<!--Skrypt2-->
<?php 
$q = "SELECT szczyty.nazwa,szczyty.plik
FROM szczyty
LIMIT 10";
$mq = mysqli_query($db,$q);
while($row = mysqli_fetch_assoc($mq)){
    echo "<img src='{$row['plik']}' alt='{$row['nazwa']}' class='miniatury'> ";
}
?>
</section>
<footer>
<div id="sekcja1">
    <h3>Kontakt</h3>
    <ul>
<li>Zadzwoń do nas: 111 222 333</li>
<li><a href="mailto:korona@gory.pl">Napisz do nas</a></li>
</ul>
</div>
<div id="sekcja2">
    <h3>© Wykonane przez: 000000000</h3>
</div>
</footer>
</body>
</html>