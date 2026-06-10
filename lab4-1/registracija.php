<?php
$db = new mysqli("localhost", "root", "", "baza");

if (isset($_POST['gumb'])) {
    $ime = $_POST['ime'];
    $lozinka = password_hash($_POST['lozinka'], PASSWORD_DEFAULT);

    
    $rezultat = $db->query("SELECT id FROM users WHERE korisnicko_ime = '$ime'");
    
    if ($rezultat->num_rows > 0) {
        echo "<h3>Korisničko ime se već koristi</h3>";
    } else {
        
        $db->query("INSERT INTO users (korisnicko_ime, lozinka) VALUES ('$ime', '$lozinka')");
        echo "<h3>Registracija je uspješna</h3>";
    }
}
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Registracija</title>
</head>
<body>
    <h2>Registracija</h2>
    <form method="POST">
        <input type="text" name="ime" placeholder="Korisničko ime" required><br><br>
        <input type="password" name="lozinka" placeholder="Lozinka" required><br><br>
        <button type="submit" name="gumb">Pošalji</button>
    </form>
</body>
</html>