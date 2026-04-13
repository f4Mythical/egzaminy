<?php
$galeria_html = '';
$czy_post = false;
if (isset($_POST['filtruj2']) && isset($_POST['panstwo'])) {
    $id_panstwa = intval($_POST['panstwo']);
    $q_szczyty = "SELECT nazwa, wysokosc, zdjecie FROM szczyty WHERE id_panstwa = $id_panstwa";
    $result_szczyty = mysqli_query($db, $q_szczyty);
    $galeria_html = "<div class='galeria' id='galeria2'>";
    if (mysqli_num_rows($result_szczyty) > 0) {
        while ($szczyt = mysqli_fetch_assoc($result_szczyty)) {
            $galeria_html .= "<figure>";
            $galeria_html .= "<img src='img/" . $szczyt['zdjecie'] . "' alt='" . $szczyt['nazwa'] . "'>";
            $galeria_html .= "<figcaption>";
            $galeria_html .= "<h2>" . $szczyt['nazwa'] . "</h2>";
            $galeria_html .= "<p>" . $szczyt['wysokosc'] . " m</p>";
            $galeria_html .= "</figcaption>";
            $galeria_html .= "</figure>";
        }
    } else {
        $galeria_html .= "<p>Brak szczytów dla wybranego państwa.</p>";
    }
    $galeria_html .= "</div>";
    
    $data_log = date("Y-m-d H:i:s");
    file_put_contents("logi.txt", $data_log . "\n", FILE_APPEND);
    $czy_post = true;
}
?>
<h1>Filtrowanie po państwach (POST)</h1>
<form method="POST" action="zadanie.php#filtrowanie2" id="form_filtrowanie2">
    <?php
    $q_panstwa = "SELECT id_panstwa, nazwa FROM panstwa";
    $result_panstwa = mysqli_query($db, $q_panstwa);
    while ($panstwo = mysqli_fetch_assoc($result_panstwa)) {
        echo "<input type='radio' name='panstwo' value='" . $panstwo['id_panstwa'] . "'>" . $panstwo['nazwa'] . "<br>";
    }
    ?>
    <input type="submit" name="filtruj2" value="Filtruj">
</form>
<?php
if ($czy_post) {
    echo $galeria_html;
    echo "<script>
        document.getElementById('galeria2').scrollIntoView({ behavior: 'smooth' });
    </script>";
}
?>