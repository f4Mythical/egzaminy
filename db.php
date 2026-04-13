<?php
$db = mysqli_connect('localhost', 'root', '', 'gory');

if (!$db) {
    die("Błąd połączenia: " . mysqli_connect_error());
}

?>