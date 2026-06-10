<?php
$db = mysqli_connect('localhost','root','','przewozy');
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Firma Przewozowa</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
<h1>Firma przewozowa Półdarmo</h1>
</header>

<nav>
<a href="kwerendy.txt">kwerenda1</a><!--tu nie mam jakby co tego zrobionego-->
<a href="kwerendy.txt">kwerenda2</a><!--tu nie mam jakby co tego zrobionego-->
<a href="kwerendy.txt">kwerenda3</a><!--tu nie mam jakby co tego zrobionego-->
<a href="kwerendy.txt">kwerenda4</a><!--tu nie mam jakby co tego zrobionego-->
</nav>
<main>
<section id="lewy">
<h2>Zadania do wykonania</h2>
<table>
<tr>
    <th>Zadania do wykonania</th>
    <th>Data realizacji</th>
    <th>Akcja</th>
    
</tr>
<?php 
$q = "SELECT zadania.id_zadania,zadania.zadanie,zadania.data 
FROM zadania";
$mq = mysqli_query($db,$q);
while($row = mysqli_fetch_assoc($mq)){
    echo "<tr>";
    echo "<td>{$row['zadanie']}</td>";
    echo "<td>{$row['data']}</td>";
    echo "<td><a href='przewozy.php?id={$row['id_zadania']}'>Usun</a></td>";
    echo "</tr>";
}
$id = $_GET['id'];
$q = "DELETE FROM zadania
WHERE id_zadania = '$id'";
$mq = mysqli_query($db,$q);
?>
</table>
<form action="" method="POST">
<label for="zadanie">Zadanie do wykonania</label>
<input type="text" name="zadanie" id="zadanie"><br>
<label for="data">Data realizacji</label>
<input type="date" name="data" id="data">
<input type="submit" value="Dodaj" name="wyslij">
</form>
<?php 
if(isset($_POST['wyslij'])){
$zadanie = $_POST['zadanie'];
$data = $_POST['data'];
$q = "INSERT INTO `zadania`(`zadanie`, `data`, `osoba_id`) VALUES ('$zadanie','$data',1)
";
$mq = mysqli_query($db,$q);
}
?>
</section>
<section id="prawy">
<img src="auto.png" alt="auto firmowe">
<h3>Nasza specjalnosc</h3>
<ul>
<li>Przeprowadzki</li>
<li>Przewoz mebli</li>
<li>Przesyłki gabarytowe</li>
<li>Wynajem pojazdow</li>
<li>Zakupty towarow</li>
</ul>
</section>
</main>
<footer>
<p>Strone wykonał: 000000</p>
</footer>
</body>
</html>
<?php 
mysqli_close($db);
?>