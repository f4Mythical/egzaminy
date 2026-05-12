<?php 
$db = mysqli_connect('localhost','root','','wyprawy');
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biuro turystyczne</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <nav>
<ol>
<li><a href="wczasy.html">Wczasy</a></li>
<li><a href="wycieczki.html">Wycieczki</a></li>
<li><a href="allinclusive.html">All inclusive</a></li>
</ol>
</nav>
<main>
<aside>
<h3>Twój cel wyprawy</h3>
<form action="" method="POST">
<label for="miejsce">Miejsce wycieczki</label><br>
<?php 
$q = 'SELECT miejsca.nazwa FROM miejsca ORDER BY miejsca.nazwa asc';
$mq = mysqli_query($db,$q);
echo '<select name="miejsce" id="miejsce">';
while($row = mysqli_fetch_assoc($mq)){
    echo '<option value="'. $row['nazwa'] . '">' . $row['nazwa'] . '</option>';
}
echo '</select>';
?>
<label for="doroslych"> Ile doroslych?</label><br>
<input type="number" id="doroslych" name="doroslych"><br>
<label for="dzieci">Ile dzieci?</label><br>
<input type="number" id="dzieci" name="dzieci"><br>
<label for="data">Termin</label><br>
<input type="date" name="data" id="data"><br>
<input type="submit" value="Symulacja ceny" name="wyslij">
<h4>Koszt wycieczki</h4>
<?php 
if(isset($_POST['wyslij'])){
    $miejsce = $_POST['miejsce'];
    $q = "SELECT miejsca.cena
FROM miejsca
WHERE miejsca.nazwa = '$miejsce'";
$ilosc_dzieci = $_POST['dzieci'];
$ilosc_doroslych = $_POST['doroslych'];
$data = $_POST['data'];
$mq = mysqli_query($db,$q);
while($row = mysqli_fetch_assoc($mq)){
    $suma_doroslych = $ilosc_doroslych * $row['cena'];
    $suma_dzieci = $ilosc_dzieci * $row['cena'] * 0.5;
    $koszt = $suma_doroslych + $suma_dzieci;
    echo '<p>W dniu: ' . $data . '</p>';
    echo '<p>' . $koszt . ' złotych</p>  ';

}
}
?>
</form>
</aside>
<section>
<h3>Wycieczki</h3>
<?php 
$q = "SELECT miejsca.nazwa, miejsca.cena, miejsca.link_obraz
FROM miejsca
WHERE miejsca.link_obraz like '0%'";
$mq = mysqli_query($db,$q);
while($row = mysqli_fetch_assoc($mq)){
    echo '<div class="wycieczka">';
    echo "<img src='{$row['link_obraz']}' alt='zdjęcie z wycieczki'>";
    echo '<h2>'.$row['nazwa'] .'</h2>';
    echo '<p>' . $row['cena'] . '</p>';
    echo '</div>';
}
?>
</section>
</main>
<footer>
<p>Autor: 00000000</p>
</footer>
</body>
</html>