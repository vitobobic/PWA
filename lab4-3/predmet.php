<?php
$db = new mysqli("localhost", "root", "", "faks");

if (isset($_POST['gumb'])) {

    $stmt = $db->prepare("INSERT INTO predmeti (sifra, naziv, ects) VALUES (?, ?, ?)");
    $stmt->bind_param("isi", $_POST['sifra'], $_POST['naziv'], $_POST['ects']);
    
    if ($stmt->execute()) {
        echo "Predmet je uspješno upisan!";
    }
    $stmt->close();
}
?>

<form method="POST">
    <input type="number" name="sifra" placeholder="Šifra predmeta" required><br><br>
    <input type="text" name="naziv" placeholder="Naziv predmeta" required><br><br>
    <input type="number" name="ects" placeholder="Broj ECTS bodova" required><br><br>
    <button type="submit" name="gumb">Zapiši u bazu</button>
</form>