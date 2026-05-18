<?php
$db = mysqli_connect('localhost','root','','kalendarz');
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalendarz</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
<h1>Dni, miesiące, lata...</h1>
</header>
<nav>
<p><?php
$data = getdate();
$rok = $data['year'];
$miesiac = date('m');
$dni_tygodnia = date('d');

$dzien_tygodnia = $data['wday'];
$dzien_tygodnia_nazwa = [
    '0' => 'Niedziela',
    '1' => 'Poniedziałek',
    '2' => 'Wtorek',
    '3' => 'Środa',
    '4' => 'Czwartek',
    '5' => 'Piątek',
    '6' => 'Sobota'
];
$nazwa_tygodnia = $dzien_tygodnia_nazwa[$dzien_tygodnia];
$q = "SELECT imieniny.imiona
FROM imieniny
WHERE imieniny.data = '05-04'";
$mq = mysqli_query($db,$q);
while($row = mysqli_fetch_assoc($mq)){
    echo "Dzisiaj jest {$nazwa_tygodnia}, {$dni_tygodnia}-{$miesiac}-{$rok}, imienny:  {$row['imiona']} ";
}
?></php></p>
</nav>  
<section id="lewy">
<table>
  <tr>
    <th>liczba dni</th>
    <th>miesiąc</th>
  </tr>
  <tr>
    <td rowspan="7">31</td>
    <td>styczeń</td>
  </tr>
  <tr>
    <td>marzec</td>
  </tr>
  <tr>
    <td>maj</td>
  </tr>
  <tr>
    <td>lipiec</td>
  </tr>
  <tr>
    <td>sierpień</td>
  </tr>
  <tr>
    <td>październik</td>
  </tr>
  <tr>
    <td>grudzień</td>
  </tr>
  <tr>
    <td rowspan="4">30</td>
    <td>kwiecien</td>
</tr>
    <td>czerwiec</td>
</tr>
<tr>
    <td>wrzesien</td>
</tr>
<td>listopad</td>
</tr>
<tr>
    <td>28 lub 29</td>
    <td>luty</td>

</tr>
</table>
</section>
<section id="srodek">
<h2>Sprawdź kto ma urodziny</h2>
<form action="" method="POST">
<input type="date" name="data" id="data" min="2024-01-01" max="2024-12-31" required>
<input type="submit" value="wyślij" name="wyslij">
<?php 
if(isset($_POST['wyslij'])){
$data_z_formularza = $_POST['data'];
$data = substr($data_z_formularza,5);
$q = "SELECT imieniny.imiona
FROM imieniny
WHERE imieniny.data = '$data'";
$mq = mysqli_query($db,$q);
while($row= mysqli_fetch_assoc($mq)){
    echo "Dnia {$data} są imieniny {$row['imiona']}";
}
}

?>
</form>
</section>
<section id="prawy">
<a href="https://pl.wikipedia.org/wiki/Kalendarz_Maj%C3%B3w" target="_blank">
    <img src="kalendarz.gif" alt="Kalendarz Majów">
</a>
<h2>Rodzaje kalendarzy</h2>
<ol>
    <li>słoneczny
        <ul>
            <li>kalendarz Majów</li>
            <li>juliański</li>
            <li>gregoriański</li>
        </ul>
    </li> <li>księżycowy
        <ul>
            <li>starogrecki</li>
            <li>babiloński</li>
        </ul>
    </li> 
</ol> 
</section>
<footer>
<p>Stronę opracował(a):000000000000</p>
</footer>
</body>
</html>