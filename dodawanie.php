<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nazwa_panstwa']) && isset($_POST['stolica_panstwa']) && isset($_POST['ludnosc_panstwa'])) {
    $nazwa = mysqli_real_escape_string($db, $_POST['nazwa_panstwa']);
    $stolica = mysqli_real_escape_string($db, $_POST['stolica_panstwa']);
    $ludnosc = intval($_POST['ludnosc_panstwa']);
    
    $q_insert = "INSERT INTO panstwa (nazwa, stolica, ludnosc) VALUES ('$nazwa', '$stolica', $ludnosc)";
    mysqli_query($db, $q_insert);
    
    header("Location: zadanie.php#dodawanie");
    exit();
}
?>
<h1>Dodawanie</h1>
<form method="POST" action="zadanie.php#dodawanie">
    <label>Nazwa państwa</label>
    <input type="text" name="nazwa_panstwa" placeholder="Wpisz nazwę państwa" 
           pattern="[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]+(?: [A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]+)*" 
           title="Nazwa musi zaczynać się z wielkiej litery i może zawierać spacje" required>
    
    <label>Stolica państwa</label>
    <input type="text" name="stolica_panstwa" placeholder="Wpisz stolicę państwa" 
           pattern="[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]+(?: [A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]+)*" 
           title="Stolica musi zaczynać się z wielkiej litery i może zawierać spacje" required>
    
    <label>Ludność państwa</label>
    <input type="number" name="ludnosc_panstwa" placeholder="Wpisz ludność państwa" required>
    
    <input type="submit" value="Dodaj">
</form>