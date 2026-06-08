<?php
$db = mysqli_connect('localhost','root','','matura');
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matura</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
<h1>System informacji dla
maturzystów</h1>
</header>
<aside>
<img src="ma.jpg" alt="Matura">
<img src="tu.jpg" alt="Matura">
<img src="ra.jpg" alt="Matura">
</aside>

<section id="pierwszy">
<h3>Wybierz ucznia z listy:</h3>
<?php 
$q = 'SELECT maturzysta.id,maturzysta.imie,maturzysta.nazwisko
FROM maturzysta
WHERE maturzysta.szkola = "T3"
ORDER BY maturzysta.nazwisko';
$mq = mysqli_query($db,$q);
while($row = mysqli_fetch_assoc($mq)){
    echo "<a href='wynik.php?id={$row['id']}&imie={$row['imie']}&nazwisko={$row['nazwisko']}'>{$row['id']}. {$row['imie']} {$row['nazwisko']} </a><br>";
}
?>
</section>

<section id="drugi">
<div id="blok1" class="blok">
<h4>Przedmioty</h4>
<?php 
$q = "SELECT DISTINCT arkusz.przedmiot
FROM arkusz";
$mq = mysqli_query($db,$q);
while($row = mysqli_fetch_assoc($mq)){
    echo $row['przedmiot']. " ";
}
?>
</div>
<div id="blok2" class="blok">
<h4>Lata</h4>
<?php
$q = "SELECT max(arkusz.rok) as 'maks', min(arkusz.rok) as 'mini'
FROM arkusz
";
$mq = mysqli_query($db,$q);
while($row = mysqli_fetch_assoc($mq)){
    echo $row['mini'] . " - " . $row['maks'];
}
?>
</div>
<div id="blok3" class="blok">
<h4>Najlepszy wynik</h4>
<?php
$q = 'SELECT wynik.maturzysta_id, avg(wynik.punkty) as "Wynik"
FROM wynik
GROUP BY wynik.maturzysta_id
ORDER BY Wynik desc
LIMIT 1';
$mq = mysqli_query($db,$q);
while($row = mysqli_fetch_assoc($mq)){
    echo $row['Wynik'] . "%";
}

?>
</div>
<div id="blok4" class="blok">
<h4>Najgorszy wynik</h4>
<?php
$q = 'SELECT wynik.maturzysta_id, avg(wynik.punkty) as "Wynik"
FROM wynik
GROUP BY wynik.maturzysta_id
ORDER BY Wynik asc
LIMIT 1';
$mq = mysqli_query($db,$q);
while($row = mysqli_fetch_assoc($mq)){
    echo $row['Wynik'] . "%";
}

?>
</div>
</section>
<footer>
<p>Stronę wykonał: 00000000</p>
</footer>
</body>
</html>