<?php
if (isset($_GET['usuwanie'])) {
    $id_usun = mysqli_real_escape_string($db, $_GET['usuwanie']);
    $q_usun = "DELETE FROM szczyty WHERE id_szczytu = $id_usun";
    mysqli_query($db, $q_usun);
    header("Location: zadanie.php#usuwanie");
    exit();
}
?>
<h1>Usuwanie</h1>
<?php
$q_wyswietl = "SELECT szczyty.id_szczytu, szczyty.nazwa, szczyty.wysokosc, panstwa.nazwa AS panstwo
               FROM szczyty
               JOIN panstwa ON szczyty.id_panstwa = panstwa.id_panstwa";
$result = mysqli_query($db, $q_wyswietl);

echo "<table>";
echo "<tr><th>nazwa szczytu</th><th>wysokość</th><th>nazwa państwa</th><th></th></tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['nazwa'] . "</td>";
    echo "<td>" . $row['wysokosc'] . "</td>";
    echo "<td>" . $row['panstwo'] . "</td>";
    echo "<td><a href='zadanie.php?usuwanie=" . $row['id_szczytu'] . "' class='link'>Usuń</a></td>";
    echo "</tr>";
}
echo "</table>";
?>