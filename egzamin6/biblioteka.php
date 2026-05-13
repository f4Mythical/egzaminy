<?php 
$db = mysqli_connect('localhost','root','','biblioteka');
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteka miejska</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
<header>
    <?php
    for ($i = 0; $i < 20; $i++) {
        echo '<img src="obraz.png" alt="grafika">';
    }
    ?>
</header>
<div id="kontener">
<section id="sek1">
<h2>Liryka</h2>
<form action="" method="POST">
<?php 
echo '<select name="gatunek">';
$q = 'SELECT ksiazka.id, ksiazka.tytul 
FROM ksiazka
WHERE ksiazka.gatunek = "liryka"';
$mq = mysqli_query($db,$q);
while($row = mysqli_fetch_assoc($mq)){
    echo "<option value='{$row['id']}'>{$row['tytul']}</option>";
}
echo '</select>';
echo '<input type="submit" value="Rezerwuj" name="wyslij">';
if(isset($_POST['wyslij'])){
    $id = $_POST['gatunek'];

    $q = "SELECT ksiazka.tytul
FROM ksiazka
WHERE id = $id";
$mq = mysqli_query($db,$q);
while($row = mysqli_fetch_assoc($mq)){
echo "Książka {$row['tytul']} została zarezerwowana ";
}
$q = "UPDATE ksiazka 
SET rezerwacja = 1 
WHERE id = $id;";
$mq = mysqli_query($db,$q);
}
?>

</form>
</section>
<section id="sek2">
    <h2>Epika</h2>
<form action="" method="POST">
<?php 
echo '<select name="gatunek">';
$q = 'SELECT ksiazka.id, ksiazka.tytul 
FROM ksiazka
WHERE ksiazka.gatunek = "epika"';
$mq = mysqli_query($db,$q);
while($row = mysqli_fetch_assoc($mq)){
    echo "<option value='{$row['id']}'>{$row['tytul']}</option>";
}
echo '</select>';
echo '<input type="submit" value="Rezerwuj" name="wyslijEpika">';
if(isset($_POST['wyslijEpika'])){
    $id = $_POST['gatunek'];

    $q = "SELECT ksiazka.tytul
FROM ksiazka
WHERE id = $id";
$mq = mysqli_query($db,$q);
while($row = mysqli_fetch_assoc($mq)){
echo "Książka {$row['tytul']} została zarezerwowana ";
}
$q = "UPDATE ksiazka 
SET rezerwacja = 1 
WHERE id = $id;";
$mq = mysqli_query($db,$q);
}
?>

</form>
</section>
<section id="sek3">
    <h2>Dramat</h2>
<form action="" method="POST">
<?php 
echo '<select name="gatunek">';
$q = 'SELECT ksiazka.id, ksiazka.tytul 
FROM ksiazka
WHERE ksiazka.gatunek = "dramat"';
$mq = mysqli_query($db,$q);
while($row = mysqli_fetch_assoc($mq)){
    echo "<option value='{$row['id']}'>{$row['tytul']}</option>";
}
echo '</select>';
echo '<input type="submit" value="Rezerwuj" name="wyslijDramat">';
if(isset($_POST['wyslijDramat'])){
    $id = $_POST['gatunek'];

    $q = "SELECT ksiazka.tytul
FROM ksiazka
WHERE id = $id";
$mq = mysqli_query($db,$q);
while($row = mysqli_fetch_assoc($mq)){
echo "Książka {$row['tytul']} została zarezerwowana ";
}
$q = "UPDATE ksiazka 
SET rezerwacja = 1 
WHERE id = $id;";
$mq = mysqli_query($db,$q);
}
?>

</form>
</section>
<section id="sek4">
    <h2>Zalegle ksiazki</h2>
    <?php
echo "<ul>";
$q = "SELECT ksiazka.tytul, wypozyczenia.id_cz, wypozyczenia.data_odd
FROM ksiazka
JOIN wypozyczenia ON ksiazka.id = wypozyczenia.id_ks
ORDER BY wypozyczenia.data_odd
LIMIT 15";
$mq = mysqli_query($db,$q);
while($row = mysqli_fetch_assoc($mq)){
    echo "<li>{$row['tytul']} {$row['id_cz']} {$row['data_odd']}</li>";
}
echo "</ul>";
    ?>
</section>
</div>
<footer>
<p><strong>Autor: 00000</strong></p>
</footer>
</body>
</html>