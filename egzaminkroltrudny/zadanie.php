<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal turystyczny</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>

<header>
    <a name="gora"></a>
    <?php include('db.php'); ?>
    <img src="img/logo.png" alt="logo">
    <h1>Portal turystyczny - panel admina</h1>
</header>

<div class="baner">
    <img src="img/baner.jpg" alt="baner">
    <div>Hala Gąsiennicowa</div>
</div>

<nav>
    <a href="#filtrowanie">Szczyty - filtrowanie po pasmach</a>
    <a href="#usuwanie">Szczyty górskie - usuwanie</a>
    <a href="#dodawanie">Państwa - dodawanie</a>
    <a href="#filtrowanie2">Szczyty - filtrowanie po państwach</a>
    <a href="#filtrowanie3">Szczyty - filtrowanie po frazie państwa</a>
</nav>

<main>
    <section>
        <a class="tytul" name="filtrowanie"></a>
        <?php include('filtrowanie.php'); ?>
        <a class="powrot" href="#gora">Powrót na górę strony</a>
    </section>

    <section>
        <a class="tytul" name="usuwanie"></a>
        <?php include('usuwanie.php'); ?>
        <a class="powrot" href="#gora">Powrót na górę strony</a>
    </section>

    <section>
        <a class="tytul" name="dodawanie"></a>
        <?php include('dodawanie.php'); ?>
        <a class="powrot" href="#gora">Powrót na górę strony</a>
    </section>

    <section>
        <a class="tytul" name="filtrowanie2"></a>
        <?php include('filtrowanie2.php'); ?>
        <a class="powrot" href="#gora">Powrót na górę strony</a>
    </section>

    <section>
        <a class="tytul" name="filtrowanie3"></a>
        <?php include('filtrowanie3.php'); ?>
        <a class="powrot" href="#gora">Powrót na górę strony</a>
    </section>
</main>

<footer>
    <p>Pracę wykonał: <strong>Jan Kowalski 4TI</strong></p>
    <?php
    mysqli_close($db);
    ?>
</footer>

</body>
</html>
