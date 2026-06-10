<?php
session_start();
$db = new mysqli("localhost", "root", "", "baza");

if (isset($_POST['gumb'])) {
    $ime = $_POST['ime'];
    $lozinka = $_POST['lozinka'];

    $rezultat = $db->query("SELECT * FROM users WHERE korisnicko_ime = '$ime'");
    
    if ($rezultat->num_rows > 0) {
        $korisnik = $rezultat->fetch_assoc();

        if (password_verify($lozinka, $korisnik['lozinka'])) {

            $_SESSION['korisnik'] = $korisnik['korisnicko_ime'];
            $_SESSION['rola'] = $korisnik['razina_dozvole'];

            if ($_SESSION['rola'] == 'administrator') {
                echo "<p>Dobro došli. Vaša razina je administrator.</p>";
            } else {
                echo "<p>Dobro došli.</p>";
            }
            echo '<a href="druga.php">NEXT</a>';
            exit;
        }
    }
    echo "Pogrešno korisničko ime ili lozinka!";
}
?>

<form method="POST">
    <input type="text" name="ime" placeholder="Korisničko ime" required><br><br>
    <input type="password" name="lozinka" placeholder="Lozinka" required><br><br>
    <button type="submit" name="gumb">Prijava</button>
</form>