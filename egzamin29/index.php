<?php
$db = mysqli_connect('localhost','root','','pogoda');
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pogoda</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header id="naglowek1">
        <img src="slonce.png" alt="Słonecznie">
</header>
    <header id="naglowek2">
        <h1>Pogoda w Europie</h1>
</header>

<main>
<section id="lewy">
<h2>Temperatury w lipcu</h2>
<table>
<tr>
    <td>Miasto</td>
    <td>Kraj</td>
    <td>Temperatura</td>
    <td>Pogoda</td>
</tr>
<?php 
$q = "SELECT miejscowosc.nazwa,miejscowosc.kraj,pomiary.temperatura
FROM miejscowosc
JOIN pomiary ON pomiary.id_miejscowosc = miejscowosc.id
WHERE pomiary.id_miesiac=7";
$mq = mysqli_query($db,$q);
while($row = mysqli_fetch_assoc($mq)){
    $obraz = $row['temperatura'];
    $obraz = $obraz > 30 ? "slonce.png" : ($obraz < 26 ? "deszcz.png" : "chmury.png" );
    echo "<tr>";
    echo "<td>{$row['nazwa']}</td>";
    echo "<td>{$row['kraj']}</td>";
    echo "<td>{$row['temperatura']}</td>";
    echo "<td><img src='$obraz'></td>";
    echo "</tr>";
}
?>
</table>
</section>
<section id="prawy">
<h2>Srednie temperatury w roku</h2>
<a href="index.php?id=1">Styczen</a>
<a href="index.php?id=2">Luty</a>
<a href="index.php?id=3">Marzec</a>
<a href="index.php?id=4">Kwiecien</a>
<a href="index.php?id=5">Maj</a>
<a href="index.php?id=6">Czerwiec</a>
<a href="index.php?id=7">Lipiec</a>
<a href="index.php?id=8">Sierpien</a>
<a href="index.php?id=9">Wrzesien</a>
<a href="index.php?id=10">Pazdziernik</a>
<a href="index.php?id=11">Listopad</a>
<a href="index.php?id=12">Grudzien</a>
<p>Średnia temperatura dla wybranego miesiąca wynosi: </p>
<?php 
$id = $_GET['id'];
$q = "SELECT round(avg(pomiary.temperatura),2) as 'Srednia'
FROM pomiary
WHERE pomiary.id_miesiac = '$id'";
$mq = mysqli_query($db,$q);
$row = mysqli_fetch_assoc($mq);
echo "<h3>{$row['Srednia']} stopni</h3>";
?>
</section>


</main>
<footer>
<p>Numer zdajacego: 000000</p>

</footer>
</body>
</html>