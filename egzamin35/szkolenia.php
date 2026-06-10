<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Firma szkoleniowa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="kontener">
        <header>
<img src="baner.jpg" alt="Szkolenia">
        </header>
        <nav>
            <ul>
                <li><a href="index.html">Strona głowna</a></li>
                <li><a href="szkolenia.php">Szkolenia</a></li>
            </ul>
        </nav>
        <main>
            <?php 
            $db = mysqli_connect('localhost','root','','firma');
            $q = "SELECT szkolenia.Data,szkolenia.Temat
FROM szkolenia
ORDER BY szkolenia.Data";
$mq = mysqli_query($db,$q);
while($row = mysqli_fetch_assoc($mq)){
    $wartosc = file_put_contents('harmonogram.txt', $row['Data'] . " " . $row['Temat'] . "\n", FILE_APPEND);
    echo "<p>" . $row['Data'] . " " . $row['Temat'] . "</p>";
    
}
$id = $_GET['id'];
$q = 
mysqli_close($db);
            ?>
        </main> 
        <footer>
            <h2>Firma szkoleniowa, ul. Głowna 1, 23-456 Warszawa</h2>
            <p> Autor: 0000000</p>
        </footer>
    </div>
</body>
</html>