<?php
$q_pasma = "SELECT id_pasma, nazwa FROM pasma_gorskie";
$result_pasma = mysqli_query($db, $q_pasma);
$lista_pasm = [];
while ($pasmo = mysqli_fetch_assoc($result_pasma)) {
    $lista_pasm[] = $pasmo;
}
$id_pasma = isset($_GET['filtrowanie']) ? (int)$_GET['filtrowanie'] : 1;
$q_szczyty = "SELECT nazwa, wysokosc, zdjecie FROM szczyty WHERE id_pasma = $id_pasma";
$result_szczyty = mysqli_query($db, $q_szczyty);
$szczyty = [];
while ($szczyt = mysqli_fetch_assoc($result_szczyty)) {
    $szczyty[] = $szczyt;
}
?>
<h1>Filtrowanie po pasmach górskich (GET)</h1>
<?php
foreach ($lista_pasm as $pasmo) {
    echo "<a href='zadanie.php?filtrowanie=" . $pasmo['id_pasma'] . "' class='link'>" . $pasmo['nazwa'] . "</a> ";
}
echo "<div class='galeria'>";
foreach ($szczyty as $szczyt) {
    echo "<figure>";
    echo "<img src='img/" . $szczyt['zdjecie'] . "' alt='" . $szczyt['nazwa'] . "'>";
    echo "<figcaption>";
    echo "<h2>" . $szczyt['nazwa'] . "</h2>";
    echo "<p>" . $szczyt['wysokosc'] . " m</p>";
    echo "</figcaption>";
    echo "</figure>";
}
echo "</div>";